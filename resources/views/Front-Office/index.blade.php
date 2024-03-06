
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>

	@include('Componants.links')

</head>

<body class="datepicker_mobile_full"><!-- Remove this class to disable datepicker full on mobile -->
		
	<div id="page">
		
		<!-- header -->
		@include('Componants.F_header')
	<main>
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3><i>EVENTO</i></h3>
					<p>Expolore Events from all over the word </p>
					<form>
						<div class="row g-0 custom-search-input-2 w-auto">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Hotel, City...">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<input class="form-control" type="text" name="dates" placeholder="When..">
									<i class="icon_calendar"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="text-center">
									<select class="w-100" id="guestsSelect" name="guestsSelect">
										<option value="">aaaaaaaaaaaaaaaaaaa</option>
										<!-- Add more options as needed -->
									</select>
								</div>
							</div>
							<div class="col-lg-2">
								<input type="submit" class="btn_search" value="Search">
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->

		<div class="container container-custom margin_80_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Our New Events</h2>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme" data-cue="zoomIn">
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="tour-detail.html"><img src="img/tour_1.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							<small>Historic</small>
						</figure>
						<div class="wrapper">
							<h3><a href="tour-detail.html">Arc Triomphe</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<span class="price">From <strong>$54</strong> /per person</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
			</div>
			<!-- /carousel -->
			<p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">View all Tours</a></p>
			<hr class="large">
		</div>
		<!-- /container -->
		
		<div class="container container-custom margin_30_95">
			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>Popular Events</h2>
				</div>
				<div class="row" data-cues="slideInUp">
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="hotel-detail.html" class="grid_item">
							<figure>
								<div class="score"><strong>8.9</strong></div>
								<img src="img/hotel_1.jpg" class="img-fluid" alt="">
								<div class="info">
									<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3>Mariott Hotel</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<!-- /grid_item -->
				</div>
				<!-- /row -->
				<a href="hotels-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
			</section>
			<!-- /section -->
			
			
			<div class="banner mb-0" data-cue="zoomIn">
				<div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
					<div>
						<small>Adventure</small>
						<h3>Your Perfect<br>Advenure Experience</h3>
						<p>Activities and accommodations</p>
						<a href="adventure.html" class="btn_1">Read more</a>
					</div>
				</div>
				<!-- /wrapper -->
			</div>
			<!-- /banner -->

		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h3>News and Events</h3>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
				<div class="row" data-cues="slideInUp">
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="img/news_home_1.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Mark Twain</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Pri oportere scribentur eu</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="img/news_home_2.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Jhon Doe</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Duo eius postea suscipit ad</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="img/news_home_3.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Luca Robinson</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Elitr mandamus cu has</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="img/news_home_4.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Paula Rodrigez</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Id est adhuc ignota delenit</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
				</div>
				<!-- /row -->
				<p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->

		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-end wow position-relative" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>Enjoy a GREAT travel with us</h3>
							<p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
							<a href="#0" class="btn_1 rounded">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->

	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-5 col-md-12 pe-5">
					<p><img src="img/logo.svg" width="150" height="36" alt=""></p>
					<p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
					<div class="follow_us">
						<ul>
							<li>Follow us</li>
							<li><a href="#0"><i class="bi bi-facebook"></i></a></li>
							<li><a href="#0"><i class="bi bi-twitter-x"></i></a></li>
							<li><a href="#0"><i class="bi bi-instagram"></i></a></li>
							<li><a href="#0"><i class="bi bi-tiktok"></i></a></li>
							<li><a href="#0"><i class="bi bi-whatsapp"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ms-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="about.html">About</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="blog.html">News &amp; Events</a></li>
						<li><a href="contacts.html">Contacts</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> info@Panagea.com</a></li>
					</ul>
					<div id="newsletter">
					<h6>Newsletter</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="https://www.ansonika.com/panagea/phpmailer/newsletter_template_email.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
							<input type="submit" value="Submit" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<ul id="footer-selector">
						<li>
							<div class="styled-select" id="lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select" id="currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="img/cards_all.svg" alt=""></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© Panagea</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-start">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-end mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	@include('Componants.scripts')
	<!-- DATEPICKER  -->
	<script>
	$(function() {
	  'use strict';
	  $('input[name="dates"]').daterangepicker({
		  autoUpdateInput: false,
		  minDate:new Date(),
		  locale: {
			  cancelLabel: 'Clear'
		  }
	  });
	  $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
		  $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
	  });
	  $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
		  $(this).val('');
	  });
	});
	</script>
</body>

<!-- Mirrored from www.ansonika.com/panagea/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 08:52:30 GMT -->
</html>