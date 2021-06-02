

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <?php $this->load->view('adminPage/header.php') ?>
    <!-- Left Panel -->
    <?php $this->load->view('adminPage/sidebar.php') ?> 
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php $this->load->view('adminPage/topbar.php') ?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row col-12 justify-content-center">
                    <h2>Hasil Pemilihan Osis</h2>
                    <div class="col-12 justify-content-center">
                        <canvas id="hasilVoting" class="w-100" height="500">
                            
                        </canvas>
                    </div>
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <!-- /.site-footer -->
    </div>
    <?php foreach ($suara as $psrt){
        $nama[] = $psrt['nama'];
        $jumlah_suara[] = $psrt['hasil'];
    }
    ?>

     <script>
         var ctx = document.getElementById('hasilVoting');
         var myChart = new Chart(ctx, {
            type: 'bar',
            data:{
                labels: <?= json_encode($nama)?>,
                datasets: [{
                    data: <?=json_encode($jumlah_suara)?>,
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth : 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
         });
     </script>
    <?php $this->load->view('adminPage/header.php') ?>

    <!-- /#right-panel -->

    <!-- Scripts -->
    

    <!--Local Stuff-->
    