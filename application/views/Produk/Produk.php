<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Pelanggan</h5>
                        <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Pelanggan</a>
                        </li>
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
                                <h5>Produk</h5>
                                <button class="btn waves-effect waves-light btn-primary btn-square" data-toggle="modal" data-target="#ProdukModal">Tambah</button>
                            </div>
                        </div>

                        <div class="modal fade" id="ProdukModal" tabindex="-1" role="dialog" aria-labelledby="ProdukModalLabels" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ProdukModalLabels">Tambah Produk</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= base_url('Produk/ProsesCreate') ?>">
                                            <div class="form-group">
                                                <label class="col-form-label">Nama Produk</label>
                                                <input type="text" class="form-control" name="NamaProduk">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Harga Produk</label>
                                                <input type="text" class="form-control" name="Harga">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Jumlah Stok</label>
                                                <input type="text" class="form-control" name="Stok">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach($produk as $p): ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $p->NamaProduk ?></td>
                                            <td>Rp. <?= number_format($p->Harga) ?></td>
                                            <td><?= number_format($p->Stok) ?></td>
                                            <td>
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#EditProdukModal<?= $p->ProdukID ?>">Edit</button>
                                                <a onclick="return confirm('Apakah Anda Ingin Mengapus Data Produk')" href="<?= base_url('Produk/Hapus/' . $p->ProdukID) ?>">
                                                    <button class="btn btn-danger">Hapus</button>
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="EditProdukModal<?= $p->ProdukID ?>" tabindex="-1" role="dialog" aria-labelledby="EditProdukModalLabels<?= $p->ProdukID ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="EditProdukModalLabels<?= $p->ProdukID ?>">Edit Produk</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="<?= base_url('Produk/ProsesEdit') ?>">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nama Produk</label>
                                                                <input type="text" class="form-control" name="NamaProduk" value="<?= $p->NamaProduk ?>">
                                                                <input type="hidden" class="form-control" name="id" value="<?= $p->ProdukID ?>">
																
															</div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Harga Produk</label>
                                                                <input type="text" class="form-control" name="Harga" value="<?= $p->Harga ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Jumlah Stok</label>
                                                                <input type="text" class="form-control" name="Stok" value="<?= $p->Stok ?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Edit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i ++; endforeach ?>
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
