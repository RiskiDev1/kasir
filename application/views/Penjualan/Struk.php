<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description"
		content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
	<meta name="author" content="codedthemes" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url('assets')?>/images/favicon.ico" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
	<!-- waves.css -->
	<link rel="stylesheet" href="<?= base_url('assets')?>/pages/waves/css/waves.min.css" type="text/css" media="all">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/css/bootstrap/css/bootstrap.min.css">
	<!-- waves.css -->
	<link rel="stylesheet" href="<?= base_url('assets')?>/pages/waves/css/waves.min.css" type="text/css" media="all">
	<!-- themify icon -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/icon/themify-icons/themify-icons.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/icon/font-awesome/css/font-awesome.min.css">
	<!-- scrollbar.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/css/jquery.mCustomScrollbar.css">
	<!-- am chart export.css -->
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
		media="all" />
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/css/style.css">
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="">
    <!-- BEGIN STRUK -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Struk Pembayaran</h3>
                        <hr>

                        <!-- Nama Pelanggan -->
                        <div class="mb-3">
                            <label><strong>Nama Pelanggan:</strong></label>
                            <p><?= $penjualan->NamaPelanggan ?></p>
                        </div>

                        <!-- Tanggal Penjualan -->
                        <div class="mb-3">
                            <label><strong>Tanggal Penjualan:</strong></label>
                            <p><?= $penjualan->TanggalPenjualan ?></p>
                        </div>

                        <hr>

                        <!-- Produk yang dibeli -->
                        <div class="mb-3">
                            <h5><strong>Produk yang Dibeli:</strong></h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($detail as $p): ?>
                                        <tr>
                                            <td><?= $p->NamaProduk ?></td>
                                            <td>Rp. <?= number_format($p->Harga) ?></td>
                                            <td><?= number_format($p->JumlahProduk) ?></td>
                                            <td>Rp. <?= number_format($p->Subtotal) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <hr>

                        <!-- Total Harga -->
                        <div class="mb-3">
                            <label><strong>Total Harga:</strong></label>
                            <p>Rp. <?= number_format($penjualan->TotalHarga) ?></p>
                        </div>

                        <!-- Pembayaran -->
                        <div class="mb-3">
                            <label><strong>Pembayaran:</strong></label>
                            <p>Rp. <?= number_format($penjualan->TotalPembayaran) ?></p>
                        </div>

                        <!-- Kembalian -->
                        <div class="mb-3">
                            <label><strong>Kembalian:</strong></label>
                            <p>Rp. <?= number_format($penjualan->TotalPembayaran - $penjualan->TotalHarga) ?></p>
                        </div>

                        <hr>

                        <!-- Footer -->
                        <p class="text-center"><strong>Terima Kasih atas Pembelian Anda!</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Print -->
    <div class="text-center mt-4">
        <button onclick="window.print()" class="btn btn-primary">Cetak Struk</button>
    </div>

	<div class="text-center mt-4">
        <button onclick="window.history.back()" class="btn btn-primary">Back</button>
    </div>

    <!-- END STRUK -->

	<script type="text/javascript" src="<?= base_url('assets')?>/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets')?>/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="<?= base_url('assets')?>/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets')?>/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="<?= base_url('assets')?>/pages/widget/excanvas.js "></script>
    

</body>
<!--end::Body-->

</html>
