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
					<div class="login_page center_container" style="background: url('{{asset('public/assets/images/inventory-bg.jpg')}}');">
						<div class="center_content">
							<div class="logo">
								<!-- <img src="assets/images/logo.png" alt="" class="img-fluid"> -->
								<h3>Registion</h3>
								<div class="admin">
								<span class="display-3 text-white"><i class="fas fa-key"></i></span>
								<p class="text-left">Fill with your mail to receive instructions on how to reset your password.</p>
							</div>
                            </div>
                            


                    <form action="{{route('admin.register')}}" method="post">
                            @csrf
                        <div class="form-group icon_parent">
                            <input type="text" placeholder="Name" value="{{old('name')}}" class="form-control bg-transparent border-0 pl-5" name="name" value="">
                            <span class="icon_soon_bottom_left"><i class="fas fa-user"></i></span>
                        </div>
                        <span class="d-block p-0" role="alert">
                            @error('name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </span>
                        <div class="form-group icon_parent">
                            <input type="text" placeholder="User Name" value="{{old('username')}}" class="form-control bg-transparent border-0 pl-5" name="username" value="">
                            <span class="icon_soon_bottom_left"><i class="fas fa-user"></i></span>
                        </div>
                        <span class="d-block p-0" role="alert">
                            @error('name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </span>
                        

                        <div class="form-group icon_parent">
                            <input type="email" placeholder="E-mail" value="{{old('email')}}" class="form-control bg-transparent border-0 pl-5" name="email" value="">
                            <span class="icon_soon_bottom_left"><i class="fas fa-envelope"></i></span>
                        </div>
                        <span class="d-block p-0" role="alert">
                            @error('email')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </span>


                        <div class="form-group icon_parent">
                            <input type="text" placeholder="Pnone" value="{{old('phone')}}" class="form-control bg-transparent border-0 pl-5" name="phone" value="">
                            <span class="icon_soon_bottom_left"><i class="fas fa-envelope"></i></span>
                        </div>

                        <span class="d-block p-0" role="alert">
                            @error('phone')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </span>



                        <div class="form-group icon_parent">
                            <input type="password" class="form-control bg-transparent border-0 pl-5" placeholder="Password" name="password">
                            <span class="icon_soon_bottom_left"><i class="fas fa-unlock"></i></span>
                        </div>
                        <span class="d-block p-0" role="alert">
                            @error('password')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </span>


                        <div class="form-group icon_parent">
                            <input type="password" class="form-control bg-transparent border-0 pl-5" placeholder="Re-type Password" name="password_confirmation">
                            <span class="icon_soon_bottom_left"><i class="fas fa-unlock"></i></span>
                        </div>
                        <div class="form-group">
                            <label class="chech_container fs-14">I agree with <a href="#" class="text-white">terms of
                                    service</a>
                                <input type="checkbox">
                                <span class="checkmark bg-transparent"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-blue btn-block border-0">Register</button>
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