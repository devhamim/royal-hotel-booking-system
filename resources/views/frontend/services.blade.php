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
					<h1>Enjoy Complete & Best</h1>
					<h1>Quality Facilities</h1>
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
					    <h1>Gym Training Grounds</h1>
						<p>Rapidiously myocardinate cross-platform intellectual capital after
						model. Appropriately create interactive infrastructures after are
						Holisticly facilitate stand-alone</p>
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
						<h4>Fitness</h4>
					    <h1>Indoor Swimming Pool</h1>
						<p>Rapidiously myocardinate cross-platform intellectual capital after
						model. Appropriately create interactive infrastructures after are
						Holisticly facilitate stand-alone</p>
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
						<h4>Fitness</h4>
					    <h1>The Restaurent Center</h1>
						<p>Rapidiously myocardinate cross-platform intellectual capital after
						model. Appropriately create interactive infrastructures after are
						Holisticly facilitate stand-alone</p>
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
						<h4>Fitness</h4>
					    <h1>SPA and Parlor Center</h1>
						<p>Rapidiously myocardinate cross-platform intellectual capital after
						model. Appropriately create interactive infrastructures after are
						Holisticly facilitate stand-alone</p>
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
