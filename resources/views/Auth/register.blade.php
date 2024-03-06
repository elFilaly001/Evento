<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/panagea/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 08:53:12 GMT -->
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

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<form action="{{route('register')}}" method="POST">
				@csrf
				<div class="form-group">
					<label>Your Full Name</label>
					<input class="form-control" type="text"  name="name" placeholder="Full Name">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Your Email</label>
					<input class="form-control" type="email" name="email" placeholder="Email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Your password</label>
					<input class="form-control" type="password" id="password1" name="password" placeholder="Password">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<label>Confirm password</label>
					<input class="form-control" type="password" id="password2" name="password_confirmation" placeholder="Confirm Password">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="User" checked>
					<label class="form-check-label" for="flexRadioDefault1">
					  Utilisateur
					</label>
				  </div>
				  <div class="form-check">
					<input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="Organizer" >
					<label class="form-check-label" for="flexRadioDefault2">
					  Organisateur
					</label>
				  </div>
				<div id="pass-info" class="clearfix"></div>
				<button type="submit" class="btn_1 rounded full-width add_top_30">Register Now!</button>
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="{{route("login_index")}}">Sign In</a></strong></div>
			</form>
		</aside>
	</div>
    @include('Componants.scripts')
</body>

</html>