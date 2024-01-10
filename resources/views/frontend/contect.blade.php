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
						<h4>Contact</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>Contact</li>
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
<!-- Start Royella Contact Style Two inner Area -->
<!--==================================================-->
<div class="contact-area style-two inner">
	<div class="container">
		<div class="row add-backgroun">
			<div class="col-lg-6">
				<div class="section-title two">
					<h4>Contact us</h4>
					<h1>Contact With Us</h1>
					<p class="section-desc-2">We value your inquiries and feedback. Our dedicated team is ready to assist you.
					</p>
				</div>
				<div class="single-contact-box">
					<div class="contact-icon">
						<i class="bi bi-telephone-fill"></i>
					</div>
					<div class="contact-title">
						<h4>Call Us Now</h4>
                        @if ($settings->first()->number != null)
							<p>{{ $settings->first()->number }}</p>
						@endif
					</div>
				</div>
				<div class="single-contact-box">
					<div class="contact-icon">
						<i class="bi bi-envelope"></i>
					</div>
					<div class="contact-title">
						<h4>Sent Email</h4>
                        @if ($settings->first()->email != null)
                            <p>{{ $settings->first()->email }}</p>
                        @endif
					</div>
				</div>
				<div class="single-contact-box">
					<div class="contact-icon">
						<i class="bi bi-geo-alt-fill"></i>
					</div>
					<div class="contact-title">
						<h4>Our Locations</h4>
						@if ($settings->first()->address != null)
							<p>{{ $settings->first()->address }}</p>
						@endif
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<form action="{{ route('customerMessage.store') }}" method="POST" id="dreamit-form">
                    @csrf
					<div class="single-contact-form">
						<div class="contact-content">
							<h4>Get In Touch</h4>
						</div>
						<div class="single-input-box">
							<input type="text" name="name" placeholder="Your Name" required="">
						</div>
						<div class="single-input-box">
							<input type="number" name="phone" placeholder="Enter Your Phone" required="">
						</div>
						<div class="single-input-box">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
						</div>
                        <div class="single-input-box">
                            <input type="text" name="subject" placeholder="Enter Your Subject" required="">
						</div>
						<div class="single-input-box">
							<textarea name="message" id="Message" placeholder="Write Message"></textarea>
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
{{-- <div class="google-map">
	<div class="row">
		<div class="col-md-12">
			<div class="google-map-content">
				
			</div>
		</div>
	</div>
</div> --}}
<!--==================================================-->
<!-- End Royella Google Map Area -->
<!--==================================================-->


@endsection
