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
			<img src="{{asset('public/assets/images/preloader.gif')}}" alt="">
		</div>
		<!-- wrapper -->
		<div class="wrapper without_header_sidebar">
			<!-- contnet wrapper -->
			<div class="content_wrapper">
					<!-- page content -->

					@if ($message = Session::get('successMsg'))
						<div class="alert alert-success alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>	
								<strong>{{ $message }}</strong>
						</div>
						@endif


					<div class="login_page center_container" style="background: url('{{asset('public/assets/images/inventory-bg.jpg')}}');">
						<div class="center_content">
							<div class="logo">
								<!-- <img src="assets/images/logo.png" alt="" class="img-fluid"> -->
								<h3>LOGIN TO YOUR ACCOUNT</h3>
								<div class="admin">
								<span class="display-3 text-white"><i class="fas fa-key"></i></span>
								<p class="text-left">Fill with your mail to receive instructions on how to reset your password.</p>
							</div>
							</div>
							<form action="{{route('admin.login')}}" method="post" class="d-block">
								@csrf
								<div class="form-group icon_parent">
									<input type="text" placeholder="E-mail" value="{{old('username')}}" name="username" id="email" class="form-control bg-transparent border-0 pl-5">
									<span class="icon_soon_bottom_left"><i class="fas fa-envelope"></i></span>
								</div>

								<span class="d-block p-0" role="alert">
									@error('username')
										<strong class="text-danger">{{$message}}</strong>
									@enderror
                        		</span>
								<div class="form-group icon_parent">
									<input type="password" name="password" id="password" class="form-control bg-transparent border-0 pl-5" placeholder="Password">
									<span class="icon_soon_bottom_left"><i class="fas fa-unlock"></i></span>
								</div>
								<span class="d-block p-0" role="alert">
									@error('password')
										<strong class="text-danger">{{$message}}</strong>
									@enderror
                        		</span>
								<div class="row">
									<div class="col-6 form-group">
										<label class="chech_container fs-14">Remember me
											<input type="checkbox" >
											<span class="checkmark bg-transparent"></span>
										</label>
									</div>
									<div class="col-6 form-group">
										<a href="forget.html" class="text-white fs-14 float-right">Forget Password</a>
									</div>
								</div>
								

								<div class="form-group">
									<button type="submit" class="btn btn-blue btn-block border-0">Login</button>
								</div>
							</form>
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