<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Transaksi Detail</h5>
						<p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="breadcrumb-title">
						<li class="breadcrumb-item">
							<a href="index.html"> <i class="fa fa-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#!">Penjualan</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="app-content">
		<!--begin::Container-->
		<div class="container-fluid">
			<!--begin::Row-->
			<?php if ($this->session->flashdata('success')): ?>
			<div class="col-12">
				<div class="callout callout-info">
					<?= $this->session->flashdata('success'); ?>
				</div>
			</div>
			<?php endif ?>

			<?php if ($this->session->flashdata('error')): ?>
			<div class="col-12">
				<div class="callout callout-danger">
					<?= $this->session->flashdata('error'); ?>
				</div>
			</div>
			<?php endif ?>

			<br>

			<div class="row">
				<div class="col-md-6">
					<div class="card mb-4">

						<div class="card-body">
							<div class="mb-3">
								<label>Nama Pelanggan</label>
								<input type="text" readonly class="form-control"
									value="<?= $penjualan->NamaPelanggan ?>">
							</div>
							<div class="mb-3">
								<label>Tanggal Penjualan</label>
								<input type="text" readonly class="form-control"
									value="<?= $penjualan->TanggalPenjualan ?>">
							</div>

							<br>

							<form action="<?= base_url('Penjualan/AddDetail') ?>" method="post">
								<label>Nama Product</label>
								<div class="mb-3">

									<select class="form-control" name="ProdukID">
										<?php
                                        foreach ($produk as $p):
                                            ?>
										<option value="<?= $p->ProdukID ?>"><?= $p->NamaProduk ?> - Harga :
											<?= $p->Harga ?>
											- Stok : <?= $p->Stok ?>
										</option>
										<?php
                                        endforeach;
                                        ?>
									</select>
								</div>
								<div class="mb-3">
									<label> Jumlah </label>
									<input type="number" class="form-control" min="1" required name="JumlahProduct">
								</div>

								<?php $penjualanID = $this->uri->segment(3);
                                ?>

								<input type="hidden" name="PenjualanID" value="<?= $penjualanID ?>">

								<div class="mt-5">
									<button type="submit" class="btn btn-primary">Tambah</button>
								</div>
							</form>

						</div>
						<h3>
							Rp. <?= number_format($TotalHarga->Subtotal) ?>
						</h3>

						<?php
                        if ($detail):
                            ?>
						<button class="btn btn-success" data-toggle="modal" data-target="#BayarModal">
							Bayar
						</button>
						<?php endif ?>
					</div>
				</div>

				<!-- /.col -->
				<div class="col-md-6">

					<div class="card mb-4">
						<div class="card-header">
							<h3 class="card-title">Produk</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 10px">#</th>
										<th>Nama Produk</th>
										<th>Harga</th>
										<th>Jumlah</th>
										<th>Subtotal</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                    $i = 1;
                                    foreach ($detail as $p):
                                        ?>
									<tr class="align-middle">
										<td><?= $i ?></td>
										<td><?= $p->NamaProduk ?></td>
										<td>Rp. <?= number_format($p->Harga) ?></td>
										<td><?= number_format($p->JumlahProduk) ?></td>
										<td>Rp. <?= number_format($p->Subtotal) ?></td>
										<td>
											<a onclick="confirm('Apakah Anda Ingin Mengapus Data Produk')"
												href="<?= base_url('Penjualan/HapusDetail/' . $p->DetailID) ?>">
												<button class="btn btn-danger">Hapus</button>
											</a>
										</td>
									</tr>
									<?php $i++; endforeach ?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!--end::Row-->

			<!-- MODAL  -->

			<div class="modal fade" id="BayarModal" tabindex="-1" aria-labelledby="BayarModalLabels" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable ">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title fs-5" id="BayarModalLabels">Pembayaran</h5>
							<?php if ($this->session->flashdata('error')): ?>
							<div class="col-12">
								<div class="callout callout-danger">
									<?= $this->session->flashdata('error'); ?>
								</div>
							</div>
							<?php endif ?>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="card-body">
								<form action="<?= base_url('Penjualan/Bayar/' . $penjualanID) ?>" method="post">

									<div class="mb-3">
										<label>Total Harga</label>
										<input type="text" class="form-control" readonly
											value="Rp. <?= $TotalHarga->Subtotal ?>">
										<input type="hidden" name="TotalHarga" value="<?= $TotalHarga->Subtotal ?>">
									</div>

									<div class="mb-4">
										<label>Pembayaran</label>
										<input type="number" min="<?= $TotalHarga->Subtotal ?>" name="Pembayaran"
											class="form-control">
									</div>

									<div class="mb-3">
										<button type="submit" class="btn btn-success">Bayar</button>
									</div>

								</form>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
		<!--end::Container-->
	</div>
	<!-- Page-header end -->
</div>
