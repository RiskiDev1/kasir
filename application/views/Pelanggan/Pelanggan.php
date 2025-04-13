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
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#!">Pelanggan</a></li>
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
                                <h5>Pelanggan</h5>
                                <button class="btn btn-mat waves-effect waves-light btn-primary " data-toggle="modal" data-target="#PelangganModal">Tambah Pelanggan</button>
                            </div>
                        </div>

                        <div class="modal fade" id="PelangganModal" tabindex="-1" role="dialog" aria-labelledby="PelangganModalLabels" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="PelangganModalLabels">Tambah Pelanggan</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= base_url('Pelanggan/ProsesCreate') ?>">
                                            <div class="form-group">
                                                <label class="col-form-label">Nama Pelanggan</label>
                                                <input type="text" class="form-control" name="NamaPelanggan" required> 
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Alamat</label>
                                                <input type="text" class="form-control" name="Alamat">
												
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Nomor Telpon</label>
                                                <input type="text" class="form-control" name="NomorTelpon">

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
                                            <th>Nama Pelanggan</th>
                                            <th>Alamat</th>
                                            <th>Nomor Telpon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach($pelanggan as $p): ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $p->NamaPelanggan ?></td>
                                            <td><?= $p->Alamat ?></td>
                                            <td><?= $p->NomorTelpon ?></td>
                                            <td>
                                                <button class="btn btn-mat waves-effect waves-light btn-primary" data-toggle="modal" data-target="#PelangganModal<?= $p->PelangganID ?>">Edit</button>
                                                <a onclick="return confirm('Apakah Anda Ingin Menghapus Data Tersebut')" href="<?= base_url('Pelanggan/Hapus/' . $p->PelangganID) ?>">
                                                    <button class="btn btn-mat waves-effect waves-light btn-danger">Hapus</button>
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="PelangganModal<?= $p->PelangganID ?>" tabindex="-1" aria-labelledby="ProdukModalLabels" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ProdukModalLabels">Edit Pelanggan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="<?= base_url('Pelanggan/ProsesEdit') ?>">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nama Pelanggan</label>
                                                                <input type="text" class="form-control" value="<?= $p->NamaPelanggan ?>" name="NamaPelanggan">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Alamat</label>
                                                                <input type="text" class="form-control" name="Alamat" value="<?= $p->Alamat ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nomor Telpon</label>
                                                                <input type="text" class="form-control" name="NomorTelpon" value="<?= $p->NomorTelpon ?>">
                                                            </div>
                                                            <input type="hidden" value="<?= $p->PelangganID ?>" name="id">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

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
