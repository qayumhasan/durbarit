<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/images/favicon.png" >
		<!--Page title-->
		<title>Admin DIT</title>
		
		<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
		<!--font awesome-->
		<link rel="stylesheet" href="{{asset('public/assets/css/all.css')}}">
		<!-- metis menu -->
		<link rel="stylesheet" href="{{asset('public/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css')}}">
        <!-- chart -->
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
		<!-- donut-chart -->
        <link rel="stylesheet" href="{{asset('public/assets/plugins/donut-chart/dist/style.css')}}">
		<!--Custom CSS-->
		<link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
		<link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        
        
	</head>
	<body id="page-top">
		<!-- preloader -->
		<div class="preloader">
			<img src="{{asset('public/assets/images/preloader.gif')}}" alt="">
		</div>
		<!-- wrapper -->
		<div class="wrapper" id="app">
        @include('admin.include.header_top')    
		@include('admin.include.menu') 

            <!-- content wrpper -->
			<div class="content_wrapper">
				<!--middle content wrapper-->
				<div class="middle_content_wrapper">
					<!-- counter_area -->
                    
                    
                    @yield('contents')


					<!-- 
						<div class="panel">
							<div class="panel_header">
								<div class="panel_title">
								<span class="panel_icon">icon1</span>
								<span>title</span>
							</div>
							</div>
							<div class="panel_body">
								
							</div>
						</div> 
					-->

					
				</div><!--/middle content wrapper-->
			</div><!--/ content wrapper -->
			<footer>
				<div class="row">
					<div class="col-md-6">
						<p>Copyright &copy; 2019 Durbar IT. All rights reserved.</p>
					</div>
					<div class="col-md-6">
						<span class="my-0 developby"><span>Develop by:</span><a href="https://www.durbarit.com" target="_blank"> Durbar IT</a></span>
					</div>
				</div>
			</footer>
		</div><!--/ wrapper -->

		<!-- jquery -->
		<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
		
		<script src="{{asset('public/js/app.js')}}"></script>
		
		<!-- popper Min Js -->
		<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
		<!-- Bootstrap Min Js -->
		<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
		<!-- Fontawesome-->
		<script src="{{asset('public/assets/js/all.min.js')}}"></script>
		<!-- metis menu -->
		<script src="{{asset('public/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js')}}"></script>
        <script src="{{asset('public/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js')}}"></script>
		<!-- nice scroll bar -->
		<script src='{{asset('public/assets/plugins/scrollbar/jquery.nicescroll.min.js')}}'></script>
		<script src="{{asset('public/assets/plugins/scrollbar/scroll.active.js')}}"></script>
		<!-- counter -->
		<script src="{{asset('public/assets/plugins/counter/js/counter.js')}}"></script>
		<!-- chart -->
		<script src="{{asset('public/assets/plugins/chartjs-bar-chart/Chart.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/chartjs-bar-chart/chart.js')}}"></script>
	
		
		<!-- pie chart -->
		<!-- <script src="assets/plugins/pie_chart/chart.loader.js"></script> -->
		<!-- <script src="assets/plugins/pie_chart/pie.active.js"></script> -->
		<!-- basic-donut-chart -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
		  <script  src="{{asset('public/assets/plugins/basic-donut-chart/dist/script.js')}}"></script>
		  <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

		
  		<!-- <script  src="assets/plugins/donut-chart/dist/script.js"></script> -->






		<!-- Main js -->
		<script src="{{asset('public/assets/js/main.js')}}"></script>

		<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
         <script>

		

        @if (Session:: has('messege'))
        var type = "{{Session::get('alert-type','info')}}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
        @endif
    </script>




	</body>
</html>