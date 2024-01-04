@extends('frontend.layout.app')
@section('content')
<!-- breadcrumb-area -->
<div class="breadcumb-area d-flex align-items-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="breacumb-content">
					<div class="breadcum-title">
						<h4>Privacy Policy</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>Privacy Policy</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb-area-end -->

<!-- Team Section -->
<div class="container">
	<div class="row">
		<div class="team-block col-lg-12 col-md-12 col-sm-12 wow fadeInUp">
			<div class="inner-box">
				@if ($privacyPolicy->first()->id != null)
				<p>{!! $privacyPolicy->first()->description !!}</p>
				@endif
			</div>
		</div>
	</div>
</div>
<!-- End Team Section -->
@endsection
