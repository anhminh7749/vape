<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{asset('css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/input-select.css')}}">
<!-- //pignose css -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<!-- <script type="{{asset('text/javascript')}}" src="js/jquery-2.1.4.min.js"></script> -->
<!-- //js -->
<!-- cart -->
	<script src="{{asset('js/simpleCart.min.js')}}"></script>

	<script src="{{asset('js/abc.js')}}"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="{{asset('text/javascript')}}" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
</head>
<body>

<!-- header-bot -->
@include('pages.header')
<!-- //header-bot -->
<!-- banner -->
@include('pages.nav')
<!-- //banner-top -->
<!-- banner -->

<!-- //banner -->
<!-- content -->
@yield('content')

<!-- //content-bottom -->
<!-- product-nav -->


<!-- footer -->
@include('pages.footer')
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Đăng ký</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Mật khẩu :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Nhập lại mật khẩu :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="Đăng ký" >
											</div>
											
										</form>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									
									<div class="login-right">
										<h3>Đăng nhập</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Mật khẩu :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Quên mật khẩu?</a>
											</div>
											<div class="single-bottom">

												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Nhớ mật khẩu.</label>
												
												<a class="signIn" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#signIn">Đăng ký</a>

												
											</div>
											<div class="single-bottom">
												
											</div>
											<div class="sign-in">
												<input type="submit" value="Đăng Nhập" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
</body>
</html>
