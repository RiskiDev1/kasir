<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function index()
	{
		$produk = $this->db->get('Produk')->result();

		$data = [
			'produk' => $produk,
		];

		$this->load->view('Template/Header');
		$this->load->view('Produk/Produk', $data);
		$this->load->view('Template/Footer');
	}

	public function ProsesCreate()
	{
		$this->form_validation->set_rules('NamaProduk','Nama Produk','required');
		$this->form_validation->set_rules('Harga','Harga Produk','required');
		$this->form_validation->set_rules('Stok','Nama Produk','required');
		
		if($this->form_validation->run() == FALSE) {
			$this->Create();
		} else {
			$data = [
				'NamaProduk' =>$this->input->post('NamaProduk'),
				'Harga' =>$this->input->post('Harga'),
				'Stok' =>$this->input->post('Stok'),
			];

			if($this->db->insert('produk', $data)) {
				$this->session->set_flashdata('success', 'Produk Berhasil Di Tambah Kan');
				redirect('Produk');
			} else {
				$this->session->set_flashdata('error', 'Produk Gagal Di Tambah Kan');
				redirect('Produk/Create');
			}
		}

	}

	public function ProsesEdit()
	{
		$this->form_validation->set_rules('NamaProduk','Nama Produk','required');
		$this->form_validation->set_rules('Harga','Harga','required');
		$this->form_validation->set_rules('Stok','Stok','required');
		$id = $this->input->post('id');

		if($this->form_validation->run() == FALSE) {
			$this->Edit();
		} else {
			$data = [
				'NamaProduk' =>$this->input->post('NamaProduk'),
				'Harga' =>$this->input->post('Harga'),
				'Stok' =>$this->input->post('Stok'),
			];

			$this->db->where('ProdukID', $id);
			$update = $this->db->update('Produk', $data);
			if($update) {
				$this->session->set_flashdata('success', 'Produk Berhasil Di Edit');
				redirect('Produk');
			} else {
				$this->session->set_flashdata('error', 'Produk Gagal Di Edit');
				redirect('Produk/Edit/' . $id);
			}
		}

	}

		public function Hapus($id)
		{
			$this->db->where('ProdukID', $id);
			$delete = $this->db->delete('produk');

			if ($delete) {
				$this->session->set_flashdata('success', 'Berhasil Menghapus Data Produk');
				redirect('produk');
		} else {
			$this->session->set_flashdata('error', 'Gagal Menghapus Data Produk');
				redirect('Produk');
		}
}
}
