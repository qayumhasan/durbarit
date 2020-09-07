<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="{{asset('public/assets/images/favicon.png')}}" >
		<!--Page title-->
		<title>Admin DIT</title>
		<!--bootstrap-->
		<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
		<!--font awesome-->
		<link rel="stylesheet" href="{{asset('public/assets/css/all.min.css')}}">
		<!--Custom CSS-->
		<link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
	</head>
	<body id="page-top">
		<!-- preloader -->
		<div class="preloader">
			<img src="assets/images/preloader.gif" alt="">
		</div>
		<!-- wrapper -->
		<div class="wrapper without_header_sidebar">
			<!-- contnet wrapper -->
			<div class="content_wrapper">
					<!-- page content -->
					<div class="login_page center_container" style="background: url('{{asset('public/assets/images/inventory-bg.jpg')}}');">
						<div class="center_content">
							<div class="logo">
								<!-- <img src="assets/images/logo.png" alt="" class="img-fluid"> -->
								<h3>RESET PASSWORD FORM</h3>
								<div class="admin">
									<span class="display-3 text-white"><i class="fas fa-lock"></i></span>
									<p class="text-left">Fill with your mail to receive instructions on how to reset your password.</p>
								</div>
							</div>
							<form action="{{route('admin.validate.password')}}" method="post" class="d-block">
                                @csrf
								<div class="form-group icon_parent">
									<input type="text" placeholder="E-mail" name="email" id="email" class="form-control bg-transparent border-0 pl-5">
									<span class="icon_soon_bottom_left"><i class="fas fa-envelope"></i></span>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-blue btn-block border-0">Forget Password</button>
								</div>
							</form>
							<div class="container">
								<div class="row">
									<div class="col-6 form-group">
										<a href="{{route('admin.login.page')}}" class="text-white fs-14">Login</a>
									</div>
									<div class="col-6 form-group">
										<a href="{{route('admin.register.form')}}" class="text-white fs-14 float-right">Create an account</a>
									</div>
								</div>
							</div>
							<div class="footer">
								<p>Copyright &copy; 2019 <a href="https://durbarit.com/">Durbar IT</a>. All rights reserved.</p>
							</div>
							
						</div>
					</div>
			</div><!--/ content wrapper -->
		</div><!--/ wrapper -->
		<!-- jquery -->
		<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
		<!-- popper Min Js -->
		<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
		<!-- Bootstrap Min Js -->
		<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
		<!-- Fontawesome-->
		<script src="{{asset('public/assets/js/all.min.js')}}"></script>
		<!-- Main js -->
		<script src="{{asset('public/assets/js/main.js')}}"></script>

	</body>
</html>