<!DOCTYPE html>
<html>
<head>
	<title>Pemilihan Ketua Osis</title>
	<!-- <style type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>"></style> -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/mycss/login.css')?>">
	<style type="text/css">
		.btn-login{
			background-color: #143D67;
			color: #f5f5f5;
		}
		.btn-login:hover{
			color: #f5f5f5 !important;
			background-color: #1E5D9A;
		}
	</style>
	
</head>
<body>
	
	

	<div style="width: 100vw; height: 100vh; margin: 0; padding: 0; overflow: hidden;">
		<div class="bg-login">
		</div>
		<div class="row col-xl-10 col-lg-10 col-sm-12 mx-auto" style="position: relative; top: 50%; transform: translateY(-50%);">
			<div class="col-md-6">
				<h1 class="text-center mb-2 title-login">Pemilihan Ketua Osis</h1>
				<img src="<?=base_url('assets/photo/undraw_selection_92i4 (1).svg')?>" class="mt-2 img-login">
			</div>
			<div class="col-md-6">
				<form class="mx-auto form-login" method="post" action="<?=base_url('Login/loginUser')?>">
					<div style="position: relative; top: 50%; transform: translateY(-50%);">
					<h2 class="text-center mb-4">Silahkan Login</h2>
						<div class="form-group" >
							<label for="exampleInputEmail1">Username</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="username">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
						</div>
						<button class="btn btn-login px-5 mt-3" type="submit">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script> 
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>