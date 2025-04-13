<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller 
{
    public function index()
    {
        $this->db->select('penjualan.*, pelanggan.*');
        $this->db->from('penjualan');
        $this->db->join('pelanggan','pelanggan.PelangganID = penjualan.PelangganID','left');
        $penjualan = $this->db->get()->result();
        $pelanggan = $this->db->get('pelanggan')->result();

        $data = [
            'penjualan' => $penjualan,
            'pelanggan' => $pelanggan
        ];

        $this->load->view('Template/Header');
        $this->load->view('Penjualan/Penjualan', $data);
        $this->load->view('Template/Footer');
    }

    public function ProsesPenjualan($id)
    {
        $this->db->where('PelangganID', $id);
        $pelanggan = $this->db->get('pelanggan')->row();

        $tanggal = date('Y-m-d');
        if ($pelanggan) {
            $data = [
                'TanggalPenjualan' => $tanggal,
                'PelangganID' => $pelanggan->PelangganID,
                'TotalHarga' => 0
            ];
        
            $this->db->insert('penjualan', $data);
            $penjualanID = $this->db->insert_id();
            if ($penjualanID) {
                redirect('Penjualan/Detail/' . $penjualanID);
            } else {
                redirect('Penjualan');
            }
        } else {
            $this->session->set_flashdata('error','Gagal Menambahkan Penjualan');
            redirect('penjualan');
        }
    }

    public function HapusPenjualan($id)
    {
        $this->db->where('PenjualanID', $id);
        if ($this->db->delete('penjualan')) {
            $this->session->set_flashdata('success', 'Data Penjualan Berhasil Dihapus');
            redirect('Penjualan');
        } else {
            $this->session->set_flashdata('error', 'Data Penjualan Tidak Bisa Dihapus');
        }
    }

    public function Detail($id)
    {
        $this->db->select('penjualan.*,pelanggan.*');
        $this->db->from('penjualan');
        $this->db->join('pelanggan', 'pelanggan.PelangganID = penjualan.PelangganID', 'left');
        $this->db->where('PenjualanID', $id);
        $penjualan = $this->db->get()->row();

        $this->db->select('detailpenjualan.*,produk.*');
        $this->db->from('detailpenjualan');
        $this->db->join('produk', 'produk.ProdukID = detailpenjualan.ProdukID', 'left');
        $this->db->where('PenjualanID', $id);
        $detail = $this->db->get()->result();

        $this->db->select_sum("Subtotal");
        $this->db->where('PenjualanID', $id);
        $TotalHarga = $this->db->get('detailpenjualan')->row();

        $produk = $this->db->get('produk')->result();

        $data = [
            'produk' => $produk,
            'penjualan' => $penjualan,
            'detail' => $detail,
            'TotalHarga' => $TotalHarga,
        ];

        $this->load->view('Template/Header');
        $this->load->view('Penjualan/Detail', $data);
        $this->load->view('Template/Footer');
    }

    public function AddDetail()
    {
        $ProdukID = $this->input->post('ProdukID');
        $JumlahProduk = $this->input->post('JumlahProduct');
        $PenjualanID = $this->input->post('PenjualanID');
        
        $this->form_validation->set_rules('ProdukID','ProdukID','required');
        $this->form_validation->set_rules('JumlahProduct','Jumlah Produk', 'required');
        $this->form_validation->set_rules('PenjualanID','Penjualan ID', 'required');

        if( $this->form_validation->run() == FALSE ) {
            $this->Detail($PenjualanID);
        } else {
            $this->db->where('PenjualanID', $PenjualanID);
            $this->db->where('ProdukID', $ProdukID);
            $ProdukSudahAda = $this->db->get('detailpenjualan')->row();

            if ($ProdukSudahAda) {
                $this->session->set_flashdata('error', 'Produk Sudah Ada Di Detail Penjualan');
                redirect('Penjualan/Detail/' . $PenjualanID);
            }

            $Produk = $this->db->where('ProdukID', $ProdukID)->get('produk')->row();

            if($Produk->Stok < $JumlahProduk) {
                $this->session->set_flashdata('erradsor','Stok Tidak Mencukupi');
                redirect('Penjualan/Detail/' .  $PenjualanID);
            }

            $SubTotal = $JumlahProduk * (int) $Produk->Harga;
            $data = [
                'PenjualanID' => $PenjualanID,
                'ProdukID' => $ProdukID,
                'JumlahProduk' => $JumlahProduk,
                'SubTotal' => $SubTotal, 
            ];

            if($this->db->insert('detailpenjualan', $data)) {
                // Proses mengurangi stok
                $this->db->where('ProdukID', $ProdukID);
                $this->db->set('Stok', 'Stok - ' . $JumlahProduk, FALSE);
                $this->db->update('produk');

                $this->session->set_flashdata('success','Detail Ditambahkan');
                redirect('Penjualan/Detail/' . $PenjualanID);
            } else {
                $this->session->set_flashdata('error','Detail Gagal Ditambahkan');
                redirect('Penjualan/Detail/' . $PenjualanID);
            }
        }
    }

    public function HapusDetail($id)
    {
        $this->db->where('DetailID', $id);
        $detail = $this->db->get('detailpenjualan')->row();

        $JumlahDikembalikan = $detail->JumlahProduk;

        $this->db->set('Stok', 'Stok + ' . $JumlahDikembalikan,  FALSE);
        $KembaliStok = $this->db->update('produk');

        if( $KembaliStok ) {
            $this->db->where('DetailID', $id);
            $this->db->delete('detailpenjualan');

            $this->session->set_flashdata('success','Detail Produk Dihapus');
            redirect('Penjualan/Detail/' . $detail->PenjualanID);
        } else {
            $this->session->set_flashdata('error','Gagal Menghapus Detail');
            redirect('Penjualan/Detail/' . $detail->PenjualanID);
        }
    }

    public function bayar($id)
    {
        $TotalHarga = $this->input->post('TotalHarga');
        $Pembayaran = $this->input->post('Pembayaran');

        if($Pembayaran < $TotalHarga) {
            $this->session->set_flashdata('error','Pembayaran Kurang');
            return;
        }

        $data = [
            'TotalHarga' => $TotalHarga,
            'TotalPembayaran' => $Pembayaran,
        ];
        $this->db->where('PenjualanID', $id);

        $bayar = $this->db->update('penjualan', $data);

        if( $bayar ) {
            redirect('Penjualan/Struk/' . $id);
        } else {
            redirect('Penjualan/Detail/' . $id);
        }
    }

	public function Struk($id)
	
	{

		$this->db->select('penjualan.*,pelanggan.*');
		$this->db->from('penjualan');
		$this->db->join('pelanggan', 'pelanggan.PelangganID = penjualan.PelangganID', 'left');
		$this->db->where('PenjualanID', $id);
		$penjualan = $this->db->get()->row();

		$this->db->select('detailpenjualan.*,produk.*');
		$this->db->from('detailpenjualan');
		$this->db->join('produk', 'produk.ProdukID = detailpenjualan.ProdukID', 'left');
		$this->db->where('PenjualanID', $id);
		$detail = $this->db->get()->result();

		$produk = $this->db->get('produk')->result();

		$data = [
			'produk' => $produk,
			'penjualan' => $penjualan,
			'detail' => $detail,
			'penjualan' => $penjualan,
		];

		$this->load->view('Penjualan/Struk', $data);
	}

}
