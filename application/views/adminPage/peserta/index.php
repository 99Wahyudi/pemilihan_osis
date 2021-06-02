</head>

<body>
    <!-- Left Panel -->
    <?php $this->load->view('adminPage/sidebar.php') ?> 
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php $this->load->view('adminPage/topbar.php') ?>

        <!-- Modal upload new -->
        <div class="modal fade bd-example-modal-lg" id="tambahPeserta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-5 justify-content-center">
                    <h3>Tambah Peserta</h3>
                    <?php echo form_open_multipart('Peserta/insertPeserta'); ?>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Nama Peserta</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>" required="">
                            <?= form_error('nama_oleh2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="<?= set_value('kelas') ?>" required="">
                            <?= form_error('nama_oleh2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="foto" name="foto" required value="<?= set_value('foto') ?>" required="">
                            <label class="custom-file-label" for="image">Foto Peserta</label>
                            <?= form_error('foto_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Visi</label>
                            <textarea class="form-control" id="visi" name="visi" rows="3"><?= set_value('visi') ?></textarea>
                            <?= form_error('visi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Misi</label>
                            <textarea class="form-control" id="misi" name="misi" rows="3"><?= set_value('misi') ?></textarea>
                            <?= form_error('deskripsi_oleh2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary mx-auto" value="Upload">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="content">
            <!-- Button trigger modal -->
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12 m-0 p-0">
                        <div class="card bg-light shadow">
                            <div class="card-header bg-light">
                                <div class="row p-2">
                                    <strong class="card-title mt-3 ">Peserta</strong>

                                    <button type="button" class="btn btn-outline-primary ml-auto py-2 shadow" data-toggle="modal" data-target="#tambahPeserta"> <i class="fa fa-upload mr-2"></i> Tambah Peserta</button>

                                    <!-- <a href="<?= base_url('Barang/uploudProduk') ?>" class="btn p-3 btn-blue-gradient ml-auto">
Add new product
</a> -->
                                </div>
                            </div>
                            <div class="card-body col-12 m-0 p-0" style="overflow-x:">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id Peserta</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Foto</th>
                                            <th>Visi</th>
                                            <th>Misi</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php foreach ($peserta as $psrt) : ?>
                                        <tr>
                                            <td><?= $psrt['id_peserta'] ?></td>
                                            <td><?= $psrt['nama'] ?></td>
                                            <td><?= $psrt['kelas']?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="" class="nav-link" data-toggle="modal" data-target="#myFoto<?= $psrt['id_peserta'] ?>">
                                                    Click
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="myFoto<?= $psrt['id_peserta'] ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Foto <?= $psrt['nama'] ?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="<?=base_url('foto_peserta/'.$psrt['foto'])?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="" class="nav-link" data-toggle="modal" data-target="#visi<?= $psrt['id_peserta'] ?>">
                                                    Click
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="visi<?= $psrt['id_peserta'] ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Visi <?= $psrt['nama'] ?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p><?=nl2br($psrt['visi'])?></p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="" class="nav-link" data-toggle="modal" data-target="#misi<?= $psrt['id_peserta'] ?>">
                                                    Click
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="misi<?= $psrt['id_peserta'] ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Misi <?= $psrt['nama'] ?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p><?=nl2br($psrt['misi'])?></p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="m-auto justify-content-center">
                                                <div class="m-auto justify-content-center text-center">
                                                    <a href="<?= base_url('Peserta/delete') ?>?id=<?= $psrt['id_peserta'] ?>" class="badge  text-danger mx-auto"><i class="fa-2x fa fa-trash"></i></a>

                                                    <a href="" class="badge  text-primary mx-auto" data-toggle="modal" data-target="#myEditModal<?= $psrt['id_peserta'] ?>"><i class="fa-2x fa fa-edit"></i></a>

                                                    <!-- <a href="<?= base_url('Barang/edit/') . $data['id_barang'] ?>" class="badge  text-dark mx-auto"><i class="fa-2x fa fa-edit"></i></a> -->
                                                </div>
                                            </td>
                                            <!-- modal target to edit data -->

                                            <div class="modal fade" id="myEditModal<?= $psrt['id_peserta'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content m-auto p-5">
                                                        <div class="modal-header ">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h3>Edit Peserta</h3>
                                                        </div>
                                                        <div class="modal-body ">
                                                            <?php echo form_open_multipart('Peserta/edit'); ?>
                                                            <input type="hidden" name="id" id="id_peserta" value="<?= $psrt['id_peserta'] ?>">

                                                            <div class="row mb-2 mt-3">
                                                                <div class="col-12">
                                                                    <div class="form-group mb-3">
                                                                        <label for="exampleFormControlInput1">Nama</label>
                                                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $psrt['nama'] ?>" required="">
                                                                        <?= form_error('nam', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-2 mt-3">
                                                                <div class="col-12">
                                                                    <div class="form-group mb-3">
                                                                        <label for="exampleFormControlInput1">Kelas</label>
                                                                        <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $psrt['kelas'] ?>" required="">
                                                                        <?= form_error('nam', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-2">
                                                                <div class="col-lg-5 col-sm-10">
                                                                    <label>Foto</label>
                                                                    <img src="<?= base_url('foto_peserta/') . $psrt['foto'] ?>">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-4">
                                                                <div class="col-12">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="foto" name="foto">
                                                                        <label class="custom-file-label" for="image">Foto baru</label>
                                                                        <?= form_error('foto_oleh2', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            
                                                            <div class="row mb-3 mt-4">
                                                                <div class="col-12">
                                                                    <div class="form-group mb-3">
                                                                        <label for="exampleFormControlTextarea1">Visi</label>
                                                                        <textarea class="form-control" id="visi" name="visi" rows="3"><?=nl2br($psrt['visi'])?></textarea>
                                                                        <?= form_error('deskripsi_oleh2', '<small class="text-danger pl-3">', '</small>'); ?> 
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3 mt-4">
                                                                <div class="col-12">
                                                                    <div class="form-group mb-3">
                                                                        <label for="exampleFormControlTextarea1">Misi</label>
                                                                        <textarea class="form-control" id="misi" name="misi" rows="3"><?=nl2br($psrt['misi'])?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 right-0">
                                                                    <input type="submit" name="submit" class="m-2 float-right btn btn-dark mx-auto" value="Update">
                                                                    <button type="button" class="m-2 float-right btn btn-outline-dark" data-dismiss="modal">batal edit</button>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>