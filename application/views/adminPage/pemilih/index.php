</head>

<body>
    <!-- Left Panel -->
    <?php $this->load->view('adminPage/sidebar.php') ?>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php $this->load->view('adminPage/topbar.php') ?>




        <div class="content">
            <!-- Button trigger modal -->
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12 m-0 p-0">
                        <div class="card bg-light shadow">
                            <div class="card-header bg-light">
                                <div class="row p-2">
                                    <strong class="card-title mt-3 ">Daftar Pemilih</strong>

                                    <button type="button" class="btn btn-outline-primary ml-auto py-2 shadow" data-toggle="modal" data-target="#tambahPeserta"> <i class="fa fa-upload mr-2"></i> Tambah Pemilih Otomatis</button>

                                    <!-- <a href="<?= base_url('Barang/uploudProduk') ?>" class="btn p-3 btn-blue-gradient ml-auto">
Add new product
</a> -->
                                </div>
                                <div class="row p-2">
                                    <a href="<?=base_url('Pemilih/printExcel')?>" target="_blank" class="btn btn-outline-success">Cetak Data</a>
                                </div>
                            </div>
                                <div class="modal fade" id="tambahPeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Masukkan Jumlah Pemilih</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form method="post" action="<?=base_url('Pemilih/autoInsert')?>">
                                      <div class="modal-body">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="jumlah" min="1">
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                            <div class="card-body col-12 m-0 p-0">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Status</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php foreach ($pemilih as $pmlh) : ?>
                                            <tr>
                                                <td class="text-center"><?= $pmlh['username'] ?></td>
                                                <td class="text-center"><?= $pmlh['password'] ?></td>
                                                <td class="text-center">
                                                    <?php if ($pmlh['status']==0) { ?>
                                                    <p class="text-center text-danger">Nonaktif</p>
                                                    <?php } else{ ?>
                                                    <p class="text-center text-success">Aktif</p>
                                                    <?php } ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?=base_url('Pemilih/delete')?>?un=<?=$pmlh['username']?>" class="badge text-danger">
                                                        <i class="fa fa-trash fa-2x"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <form method="post" action="<?=base_url('Pemilih/insertPemilih')?>">
                                            <td class="text-center"><input class="text-center" type="text" name="username" placeholder="Username" max="10" style="background: none; border: none"></td>
                                            <td class="text-center"><input class="text-center" type="text" name="password" placeholder="Password" max="8" style="background: none; border: none"></td>
                                            <td class="text-center"><strong>?</strong></td>
                                            <td class="text-center"><input type="submit" name="submit" class="btn btn-primary m-auto" value="Tambah"></td>
                                            </form>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>