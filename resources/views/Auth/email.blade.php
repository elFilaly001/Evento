<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/panagea/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 08:53:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>

    @include('Componants.links')
    <!-- ALTERNATIVE COLORS CSS -->
    <link href="#" id="colors" rel="stylesheet">

</head>

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			  <form action="{{route('login')}}" method="POST">
				@csrf
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Login with Facebook</a>
					<a href="#0" class="social_bt google">Login with Google</a>
					<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
				</div>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email">
					<i class="icon_mail_alt"></i>
				</div>
				<button type="submit" class="btn_1 rounded full-width">send email</button>
				<div class="text-center add_top_10">New to Evento? <strong><a href="{{route('register_index')}}">Sign up!</a></strong></div>
			</form>
		</aside>
	</div>
	<!-- /login -->	

	@include('Componants.scripts')
  
</body>

<!-- Mirrored from www.ansonika.com/panagea/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 08:53:12 GMT -->
</html>