<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Penjualan</h5>
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
	<!-- Page-header end -->

	<div class="pcoded-inner-content">
		<!-- Main-body start -->
		<div class="main-body">
			<div class="page-wrapper">
				<!-- Page-body start -->
				<div class="page-body">
					<!-- Basic table card start -->
					<div class="card">
						<div class="card-header">
							<div class="d-flex justify-content-between">
								<h5>Penjualan</h5>
								<button class="btn waves-effect waves-light btn-primary btn-square" data-toggle="modal"
									data-target="#PenjualanModal">Tambah</button>
							</div>
						</div>

						<div class="modal fade" id="PenjualanModal" tabindex="-1" aria-labelledby="PenjualanModalLabels"
							aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title fs-5" id="PenjualanModalLabels">Tambah Penjualan</h5>
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Close</button>
									</div>
									<div class="modal-body">
										<div class="card-body">

											<table class="table table-bordered">
												<thead>
													<tr>
														<th style="width: 10px">#</th>
														<th>Nama Pelanggan</th>
														<th>Alamat</th>
														<th>Nomor Telpon</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
                                        $i = 1;
                                        foreach ($pelanggan as $p):
                                            ?>
													<tr class="align-middle">
														<td><?= $i ?></td>
														<td><?= $p->NamaPelanggan ?></td>
														<td><?= $p->PelangganID ?></td>
														<td><?= $p->NomorTelpon ?></td>
														<td>
															<a
																href="<?= base_url('Penjualan/ProsesPenjualan/' . $p->PelangganID) ?>">
																<button class="btn btn-primary">Pilih</button>
															</a>
														</td>
													</tr>
													<?php $i++; endforeach ?>
												</tbody>
											</table>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="card-block table-border-style">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Pelanggan</th>
											<th>Tanggal Transaksi</th>
											<th>Total Transaksi</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; foreach($penjualan as $p): ?>
										<tr>
											<td><?= $i ?></td>
											<td><?= $p->NamaPelanggan ?></td>
											<td><?= $p->TanggalPenjualan ?></td>
											<td>Rp. <?= number_format($p->TotalHarga) ?></td>

											<?php if ($p->TotalHarga == 0) { ?>
											<td>
												<a href="<?= base_url('Penjualan/Detail/' . $p->PenjualanID) ?>">
													<button class="btn btn-primary">Detail</button>
												</a>
												<a onclick="confirm('Apakah Anda Ingin Mengapus Data Produk')"
													href="<?= base_url('Penjualan/HapusPenjualan/' . $p->PenjualanID) ?>">
													<button class="btn btn-danger">Hapus</button>
												</a>
											</td>
											<?php } else { ?>
											<td>
												<a href="<?= base_url('Penjualan/Struk/' . $p->PenjualanID) ?>">
													<button class="btn btn-primary">Struk</button>
												</a>
											</td>
											<?php } ?>
										</tr>

										<?php $i++; endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Basic table card end -->
				</div>
			</div>
		</div>
		<!-- Main-body end -->
	</div>
</div>
