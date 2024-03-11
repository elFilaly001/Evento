{{-- @dd($reservations) --}}
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
					<form method="POST" action="{{route("search")}}">
						@csrf
						<div class="row g-0 custom-search-input-2 w-auto">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" name="event" placeholder="Event">
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
									<select class="w-100" id="guestsSelect" name="category">
										<option value="">Ctegories</option>
										
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
        <div class="container container-custom margin_80_0 mb-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Event</th>
                <th scope="col">date</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($reservations as $res)
              <tr>
                <th>{{$res->id}}</th>
                <th>{{$res->Event->title}}</th>
                <th>{{$res->Event->date}}</th>
                <th>
                    <form action="{{route('DownloadTickets')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$res->id}}" name="id">
                        <button type="submit" class="btn btn-danger">Download</button>
                    </form>
                </th>
              </tr>
              @endforeach
            </tbody>
          </table>
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
	
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	@include('Componants.scripts')
	<!-- DATEPICKER  -->
	
</body>

<!-- Mirrored from www.ansonika.com/panagea/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 08:52:30 GMT -->
</html>