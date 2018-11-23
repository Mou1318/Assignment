<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style type="text/css">
	    body {
			font-family: 'Varela Round', sans-serif;
		}
		.modal-login {
			color: #636363;
			width: 350px;
		}
		.modal-login .modal-content {
			padding: 20px;
			border-radius: 5px;
			border: none;
		}
		.modal-login .modal-header {
			border-bottom: none;
			position: relative;
			justify-content: center;
		}
		.modal-login h4 {
			text-align: center;
			font-size: 26px;
		}
		.modal-login  .form-group {
			position: relative;
		}
		.modal-login i {
			position: absolute;
			left: 13px;
			top: 11px;
			font-size: 18px;
		}
		.modal-login .form-control {
			padding-left: 40px;
		}
		.modal-login .form-control:focus {
			border-color: #00ce81;
		}
		.modal-login .form-control, .modal-login .btn {
			min-height: 40px;
			border-radius: 3px; 
		}
		.modal-login .hint-text {
			text-align: center;
			padding-top: 10px;
		}
		.modal-login .close {
	        position: absolute;
			top: -5px;
			right: -5px;
		}
		.modal-login .btn {
			background: #00ce81;
			border: none;
			line-height: normal;
		}
		.modal-login .btn:hover, .modal-login .btn:focus {
			background: #00bf78;
		}
		.modal-login .modal-footer {
			background: #ecf0f1;
			border-color: #dee4e7;
			text-align: center;
			margin: 0 -20px -20px;
			border-radius: 5px;
			font-size: 13px;
			justify-content: center;
		}
		.modal-login .modal-footer a {
			color: #999;
		}
		.trigger-btn {
			display: inline-block;
			margin: 100px auto;
		}
	</style>
</head>
<body>

<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" hidden="hidden" class="trigger-btn" data-toggle="modal">Click to Open Login Modal</a>
</div>

<!-- Modal Login -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{ URL::to('loginStore') }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<i class="fas fa fa-envelope"></i>
						<input name="email" type="text" class="form-control" placeholder="Email" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa fa-key"></i>
						<input name="password" type="password" class="form-control" placeholder="Password" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
					</div>
				</form>				
			</div>
			<div class="modal-footer">
				<a data-toggle="modal" data-target="#mysignModal" href="#">Create An Account</a>
			</div>
		</div>
	</div>
</div>
<!--# Modal Login-->
<!-- Modal Signup -->
<div id="mysignModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Signup</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{ URL::to('signupStore') }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input name="name" type="text" class="form-control" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<i class="fas fa fa-envelope"></i>
						<input name="email" type="email" class="form-control" placeholder="Email" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-location-arrow"></i>
						<input name="address" type="text" class="form-control" placeholder="Address" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-mobile"></i>
						<input name="phone" type="text" class="form-control" placeholder="Phone" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-key"></i>
						<input name="password" type="password" class="form-control" placeholder="Password" required="required">	
					</div>
					<div class="form-group">
						<i class="fa fa fa-key"></i>
						<input name="confirmpassword" type="password" class="form-control" placeholder="Confirm Password" required="required">	
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Register" data-toggle="modal" data-target="#myModal">
					</div>
				</form>				
				
			</div>
			<div class="modal-footer">
				<a href="{{ URL::to('/') }}">Already Have An Account? Click Here</a>
			</div>
		</div>
	</div>
</div>
<!--#Modal Signup-->


<script>
$("#myModal").modal("show");
</script>
</body>
</html>