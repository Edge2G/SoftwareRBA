<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>Ingreso al Sistema - RBA </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
body {
	font-family: 'Roboto', sans-serif;
	background: url(assets/img/login/barquillos.jpg) no-repeat center center fixed;
	background-size: cover;
}
.main-section{
	margin: 0 auto;
	margin-top: 100px ;
	padding: 0;
}
.modal-content{
	background-color: #D8D9DA;
	opacity: .95;
	padding: 0 18px;
	box-shadow: 0px 0px 3px #1002fc;
}
.user-img{
	margin-top: -50px;
	margin-bottom:  30px;
}
.user-img img{
	height: 100px;
	width: 100px;
	border-radius: 5px;
	box-shadow: 0px 0px 3px #1002fc;
}
.form-group{
	margin-bottom: 25px;
}
.form-group input{
	height: 42px;
	border-radius: 5px;
	border: 0;
	font-size: 15px;
	padding-left: 10px;
}
.button{
	width: 40%;
	margin: 5px 0 25px;
	margin-bottom: 10px;
}
.btn{
	background-color: #8680f2;
	margin-bottom: 20px;
	color: #fff;
}
</style>

</head>
<body>
	<div class="modal-dialog text-center"> 
		<div class="col-sm-8 main-section"> 
			<div class="modal-content">

				<div class="col-12 user-img">
					<img src="assets/img/login/login_imagen.png">
				</div>

				<form class="col-12" action="<?php echo base_url();?>index.php/Login/login" method="POST">
	
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Usuario">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>

					<button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i> Ingresar </button>

				</form>
				
			</div>
		</div>			
	</div>
			
		
	

</body>
</html>