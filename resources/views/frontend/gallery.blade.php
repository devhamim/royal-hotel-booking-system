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
						<h4>Gallery</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>Gallery</li>
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
<!-- Start Royella Gallery Area -->
<!--==================================================-->
<div class="team-area">
	<div class="container">

		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center inner" data-cue="zoomIn">
					<div class="section-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/section-shape1.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
            @foreach ($gallerys as $gallery)
			<div class="col-lg-3 col-md-4">
                <div class="single-team-box" data-cue="zoomIn">
                    <div class="team-thumb">
                        <a class="my-image-links" data-gall="gallery01" href="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"><img src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"></a>
					</div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Gallery Area -->
<!--==================================================-->

@endsection

