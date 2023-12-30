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
						<h4>About Us</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>About</li>
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
					<h4>Luxury Hotel And Resort</h4>
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
					<a href="{{route('about_us')}}">About More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella About Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Royella Call Do Action Area -->
<!--==================================================-->
<div class="call-do-action-area inner">
	<div class="container">
		<div class="row align-items-center call-do-action-bg">
			<div class="col-lg-6 col-md-12">
				<div class="call-do-action-video" data-cue="zoomIn">
					<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=e6R6VsgD8yQ&amp;t=179s"><i class="bi bi-play"></i></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 matha-ta-ghurlo" data-cue="zoomIn">
				<div class="section-title two">
					<h4>Manager</h4>
					<h1>Luxury Best Hotel In</h1>
					<h1>Californta, Usa</h1>
					<p class="section-desc-2">Rapidiously myocardinate cross-platform intellectual capital after
                    model. Appropriately create interactive infrastructures after main
                    Holisticly facilitate stand-alone inframe.</p>
				</div>
				<div class="call-do-action-text">
					<a href="#">“ Model. Appropriately create interactive infrastructures after main
                     Holisticly facilitate stand-alone inframe of the world ”</a>
				</div>
				<div class="call-do-action-author">
					<div class="call-do-action-author-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/call-do-action-img.png" alt="">
					</div>
					<div class="call-do-action-content">
						<h4>John D. Alexon</h4>
						<p>Manger</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Call Do Action Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Royella Feature Area -->
<!--==================================================-->
<div class="feature-area inner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center inner" data-cue="zoomIn">
					<div class="section-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/section-shape1.png" alt="">
					</div>
					<h1>Hotel’S Facilities</h1>
					<p class="section-desc-1">Proactively morph optimal infomediaries rather than accurate expertise. Intrinsicly
                     progressive resources rather than resource-leveling</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-1.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Room Services</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-2.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Wi-Fi Internet</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-3.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Smart Key</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-4.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Breakfast</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-5.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Swimming Pool</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-2.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Wi-Fi Internet</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Feature Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Royella inner Testimonail Area -->
<!--==================================================-->
<div class="testimonial-area inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="section-title two" data-cue="zoomIn">
					<h4>Luxury Hotel And Resort</h4>
					<h1>resote clients feedback</h1>
					<h1>about services</h1>
				</div>
			</div>
		</div>
		<div class="row border-add" data-cue="zoomIn">
			<div class="testi-list-inner owl-carousel">
                @foreach ($customerSays as $customer)
                    <div class="col-md-12">
                        <div class="single-testimonial-box">
                        <div class="testimonial-content">
                            <p>“{!!$customer->description!!}”
                            </p>
                            <div class="testi-reating">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testi-quote">
                                <img src="assets/images/inner/testi-quote.png" alt="">
                            </div>
                        </div>
                        <div class="testi-author">
                            <div class="testi-thumb">
                                <img src="{{asset('uploads/customersay')}}/{{$customer->image}}" alt="">
                            </div>
                            <div class="testi-title">
                                <h4>{{$customer->name}}</h4>
                                <p>{{$customer->post}}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- Start Royella inner Testimonail Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Royella Blog Area -->
<!--==================================================-->
<div class="blog-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center inner" data-cue="zoomIn">
					<div class="section-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/section-shape1.png" alt="">
					</div>
					<h1>Latest post from blog</h1>
					<p class="section-desc-1">Proactively morph optimal infomediaries rather than accurate expertise. Intrinsicly
                     progressive resources rather than resource-leveling</p>
				</div>
			</div>
		</div>
		<div class="row">
            @foreach ($blogs->take(3) as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-box" data-cue="zoomIn">
                        <div class="single-blog-thumb">
                            <a href="{{route('our.blog.details',$blog->slug)}}">
                                <img src="{{asset('uploads/blog')}}/{{$blog->image}}" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                        <div class="meta-blog">
                            <span>{{$blog->created_at->format('d,M,Y')}}</span>
                        </div>
                            <a href="{{route('our.blog.details',$blog->slug)}}">{{$blog->title}}</a>
                        </div>
                        <div class="blog-button">
                            <a href="{{route('our.blog.details',$blog->slug)}}">Read More<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            @endforeach
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Blog Area -->
<!--==================================================-->

@endsection
