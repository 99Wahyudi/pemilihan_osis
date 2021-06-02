<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/mycss/osis.css')?>">
	<script src="<?=base_url('assets/sweetalert/package/dist/sweetalert2.all.min.js')?>"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css" media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap');
    	.circle-thing{
    		background-color: #007bff;
    		position: fixed;
    		width: 70vw;
    		height: 70vw;
	    	border-radius: 5%;
    		top: 60%;
    		left: 50%;
    		z-index: -1;
	    	transform: rotate(20deg);
	    	box-shadow: 0 0 10px rgba(0, 123, 255, 0.6);

    	}
    	@media(max-width: 660px){
    		.circle-thing{
	    		background-color: #007bff;
	    		position: fixed;
	    		width: 70vh;
	    		height: 70vh;
	    		top: 50%;
	    		left: 55%;
	    		z-index: -1;
    		}	
    	}
    </style>
</head>
<body style="">



	<div class="container">

		<h1 class="text-center mt-5 mb-3 text-dark" style="font-family: 'Open Sans', sans-serif;">Tentukan Pilihan Anda</h1>

		<div class="row justify-content-around">
		<?php foreach ($peserta as $psrt ): ?>
			<div class="col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 100px">
				<div class="card-osis" style="box-shadow: 2px 2px 8px rgba(0,0,0,0.6)">
					<div class="card-osis-header">
						<img src="<?=base_url('foto_peserta/'.$psrt['foto'])?>" class="img-osis">
					</div>
					<div class="card-osis-body">
						<div class="container">
							<h3 class="text-center"><?=$psrt['nama']?></h3>
							Kelas : <strong><?=$psrt['kelas']?></strong>	<br>
							Jurusan : <strong><?=$psrt['jurusan']?></strong>	
						</div>
					</div>
					<div class="card-osis-footer ">
						<div class="container pb-2">
							<div class="row col-12 mx-auto p-0 " style="width: 100%; border-radius: 15px!important">
								<div class="col-6 m-0">
									<button class="btn btn-outline-primary mx-auto" data-toggle="modal" data-target="#visiMisi<?= $psrt['id_peserta']?>" style="width: 100%">Visi-Misi</button>

									<!-- modal -->
									<div class="modal fade" id="visiMisi<?= $psrt['id_peserta'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row col-12 mb-3">
														<div class="col-12">
															<strong>Visi</strong>
														</div>
														<div class="col-12">
															<?=nl2br($psrt['visi'])?>
														</div>
													</div>
													<div class="row col-12">
														<div class="col-12">
															<strong>Misi</strong>
														</div>
														<div class="col-12">
															<?=nl2br($psrt['misi'])?>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>
									<!-- end moda; -->
								</div>
								<div class="col-6 m-0">
									<a href="<?=base_url('Pilih/pilih')?>?id=<?=$psrt['id_peserta']?>" class="btn btn-primary mx-auto pilih" style="display: inline-block !important; width: 100%">Pilih</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
		</div>

		<div class="circle-thing"></div>

	</div>






	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script> 
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<!-- <script type="text/javascript" src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>  -->

	<script type="text/javascript">
		$('.pilih').on('click', function(e){

			e.preventDefault();
			const href = $(this).attr('href'); 

			Swal.fire({
			  title: 'Anda Yakin ?',
			  text: "Apakah anda yakin dengan pilihan anda?",
			  icon: 'question',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Pilih'
			}).then((result) => {
			  if (result.value) {
			    Swal.fire(
			      'Terimakasih',
			      'Terimakasih telah berpartisipasi',
			      'success'
			    );
			    setTimeout(function(){
			  		document.location.href=href;
			    },3000);
			  }
			});
		})
	</script>
</body>
</html>