@extends('frontend.layout.app')

@section('content')

<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="breacumb-content">
					<div class="breadcum-title">
						<h4>Service</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>Service</li>
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
<!-- Start Royella Facilities Area -->
<!--==================================================-->
<div class="facilities-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="section-title two" data-cue="zoomIn">
					<h4>Facilities</h4>
					<h2>RESOTE’S EXTRA FACILITIES FOR LUXURIOUS LIFE</h2>
				</div>
			</div>
		</div>
		<div class="row add-boder">
			<div class="col-lg-6 col-md-6">
				<div class="single-facilities-images-box" data-cue="zoomIn">
					<div class="facilities-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/facilities-thumb-1.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-facilities-box" data-cue="zoomIn">
					<div class="facilities-content">
						<h4>Fitness</h4>
					    <h2>Gym Grounds</h2>
						<p>Indulge in our state-of-the-art gym facilities at our Canadian hotel and resort. Equipped with cutting-edge fitness equipment, our gym offers a rejuvenating space for your workout routine. Enjoy panoramic views as you engage in a holistic fitness experience. Whether you prefer cardio, strength training, or group classes, our facilities cater to all fitness enthusiasts, ensuring a refreshing and invigorating wellness journey during your stay.</p>
						{{-- <a class="facilities-button" href="services-details.html"><i class="bi bi-arrow-right"></i></a> --}}
					</div>
					<div class="facilities-number">
						<h1>01</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="row add-boder">
			<div class="col-lg-6 col-md-6">
				<div class="single-facilities-box two" data-cue="zoomIn">
					<div class="facilities-content">
						<h4>Swimming</h4>
					    <h2>Indoor Swimming Pool</h2>
						<p>Discover relaxation in our luxury hotel's indoor swimming pool. Encased in sleek design and ambient lighting, the pool offers a tranquil retreat. Immerse yourself in its inviting waters and enjoy a serene escape with impeccable service in a refined setting.</p>
						{{-- <a class="facilities-button" href="services-details.html"><i class="bi bi-arrow-right"></i></a> --}}
					</div>
					<div class="facilities-number two" data-cue="zoomIn">
						<h1>02</h1>
					</div>

				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-facilities-images-box" data-cue="zoomIn">
					<div class="facilities-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/facilities-thumb-2.jpg" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="row add-boder">
			<div class="col-lg-6 col-md-6">
				<div class="single-facilities-images-box" data-cue="zoomIn">
					<div class="facilities-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/facilities-thumb-3.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-facilities-box" data-cue="zoomIn">
					<div class="facilities-content">
						<h4>Restaurent</h4>
					    <h2>The Restaurent Center</h2>
						<p>Nestled within our luxury hotel in Canada, the Restaurant Center offers a culinary journey blending local flavors and global cuisine. Immerse in elegant ambiance, exceptional service, and a diverse, exquisite menu.</p>
						{{-- <a class="facilities-button" href="services-details.html"><i class="bi bi-arrow-right"></i></a> --}}
					</div>
					<div class="facilities-number">
						<h1>03</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row add-boder">
			<div class="col-lg-6 col-md-6">
				<div class="single-facilities-box two" data-cue="zoomIn">
					<div class="facilities-content">
						<h4>SPA</h4>
					    <h2>SPA and Parlor Center</h2>
						<p>Experience unparalleled tranquility at our luxury hotel's Spa and Parlor Center in Canada. Indulge in rejuvenating treatments, personalized wellness services, and opulent relaxation, curated to enhance your overall sense of well-being.</p>
						{{-- <a class="facilities-button" href="services-details.html"><i class="bi bi-arrow-right"></i></a> --}}
					</div>
					<div class="facilities-number two">
						<h1>04</h1>
					</div>

				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-facilities-images-box" data-cue="zoomIn">
					<div class="facilities-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/facilities-thumb-4.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Facilities Area -->
<!--==================================================-->
@endsection
