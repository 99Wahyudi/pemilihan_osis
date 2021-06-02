<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if (isset($_SESSION['dashboard'])) {
                                echo 'active';
                            } ?>">
                    <a href="<?= base_url() ?>Admin"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                </li>
                <li class="menu-title">Manage</li><!-- /.menu-title -->

                
            
            <li class="<?php if (isset($_SESSION['peserta'])) {
                            echo 'active';
                        } ?>">
                <a href="<?= base_url('admin/peserta') ?>"><i class="menu-icon fa fa-user"></i>Peserta</a>
            </li>
            <li class="<?php if (isset($_SESSION['pemilih'])) {
                            echo 'active';
                        } ?>">
                <a href="<?= base_url('Admin/pemilih') ?>"><i class="menu-icon fa fa-users"></i>Pemilih</a>
            </li>
            <li class="<?php if (isset($_SESSION['hasil'])) {
                            echo 'active';
                        } ?>">
                <a href="<?= base_url('Admin/hasil') ?>"><i class="menu-icon fas fa-chart-bar"></i>Hasil</a>
            </li>
            </li>
           


           

            <li class="">
                <a class="" href="<?= base_url('Login/Logout') ?>"><i class="menu-icon fas fa-sign-out-alt"></i>Logout</a>
            </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>