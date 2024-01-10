@extends('frontend.layout.app')
@section('content')

<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<!--==================================================-->
<div class="breadcumb-area d-flex align-items-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="breacumb-content">
					<div class="breadcum-title">
						<h4>Location</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>Location</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Breadcumb Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Royella About Area -->
<!--==================================================-->
<div class="about-area inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
         		<div class="about-thumb">
		           <img src="{{asset('frontend')}}/assets/images/inner/about-thumb.jpg" alt="">
            	</div>
			</div>
			<div class="col-lg-6  upper">
				<div class="section-title two">
					<h4>Luxury Hotel And Restaurant</h4>
					<h1>Luxury Best Hotel In City</h1>
					<h1>Californta, Usa</h1>
					<p class="section-desc-2">Rapidiously myocardinate cross-platform intellectual capital after marketing
						model. Appropriately create interactive infrastructures after maintainable are
						Holisticly facilitate stand-alone inframe
					</p>
					<p class="about-inner-desc">Rapidiously myocardinate cross-platform intellectual capital after marketing
                     model. Appropriately create interactive infrastructures after</p>
				</div>
				<div class="about-address">
					<p>102/B, Dream Street, New Elephant Road, Resote Dhanmondi, Dhaka - 1212</p>
				</div>
				<div class="luxury-button">
					<a href="#">About More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella About Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Royella Contact Style Two inner Area -->
<!--==================================================-->
<div class="contact-area style-two inner">
	<div class="container">
		<div class="row add-backgroun">
			<div class="col-lg-6">
				<div class="section-title two">
					<h4>Contact us</h4>
					<h1>Contact With Us</h1>
					<p class="section-desc-2">Rapidiously myocardinate cross-platform intellectual capital after the
                       model. Appropriately create interactive infrastructures after maintance
                       Holisticly facilitate stand-alone
					</p>
				</div>
				<div class="single-contact-box">
					<div class="contact-icon">
						<i class="bi bi-telephone-fill"></i>
					</div>
					<div class="contact-title">
						<h4>Call Us Now</h4>
						<p>+980 123 (4567) 890</p>
					</div>
				</div>
				<div class="single-contact-box">
					<div class="contact-icon">
						<i class="bi bi-envelope"></i>
					</div>
					<div class="contact-title">
						<h4>Sent Email</h4>
						<p>example@gmail.com</p>
					</div>
				</div>
				<div class="single-contact-box">
					<div class="contact-icon">
						<i class="bi bi-geo-alt-fill"></i>
					</div>
					<div class="contact-title">
						<h4>Our Locations</h4>
						<p>New elephant Road, Dhanmondi<br>Dhaka - 1212</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
					<div class="single-contact-form">
						<div class="contact-content">
							<h4>Get In Touch</h4>
						</div>
						<div class="single-input-box">
							<input type="text" name="Name" placeholder="Your Name" required="">
						</div>
						<div class="single-input-box">
							<input type="text" name="Email" placeholder="Enter Your Email" required="">
						</div>
						<div class="single-input-box">
					        <select name="Subject" id="Subject">
					        	<option value="saab">select Subject</option>
					        	<option value="opel">Luxury Hotel</option>
					        	<option value="audi">Room</option>
					        	<option value="audi">Hottel</option>
					        </select>
						</div>
						<div class="single-input-box">
							<textarea name="Message" id="Message" placeholder="Write Message"></textarea>
						</div>
						<div class="single-input-box">
							<button type="submit">Sent Message</button>
						</div>
					</div>
				</form>
				<div id="status"></div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- Start Royella Contact Style two Inner Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start Royella Google Map Area -->
<!--==================================================-->
<div class="google-map">
	<div class="row">
		<div class="col-md-12">
			<div class="google-map-content">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.0662009102393!2d-73.96815832342757!3d40.78255873329212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral%20Park!5e0!3m2!1sen!2sbd!4v1697123394994!5m2!1sen!2sbd"></iframe>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Google Map Area -->
<!--==================================================-->


@endsection
