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
					<h4>Luxury Hotel And Restaurant</h4>
					<h2>FULL MOON - The Best Luxury Hotel in Canada</h2>
					<p class="section-desc-2">Welcome to our distinguished hotel and restaurant in Canada, an enclave where luxury meets the splendor of nature. Nestled in the heart of breathtaking landscapes, our establishment is designed to provide a seamless blend of opulence and serenity. Our offerings include lavish accommodations, exceptional dining experiences, and a range of world-class amenities, such as a rejuvenating spa, recreational facilities, and versatile event spaces. With a commitment to impeccable service and attention to detail, our dedicated team ensures that every guest experiences a stay marked by comfort and indulgence. Whether you're seeking a tranquil retreat or a venue for special occasions, our hotel and restaurant stands as an embodiment of Canadian hospitality, offering an unparalleled escape. Choose us for an immersive experience where the beauty of the surroundings harmonizes with luxurious comforts, promising an extraordinary stay that reflects our commitment to excellence in hospitality. Welcome to a haven where every detail is crafted to elevate your experience, providing a memorable journey in the heart of Canada.</p>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-6">
                <p><strong>Mission:</strong> Our mission is to provide an exceptional and unforgettable experience to our guests. We strive to create a haven where comfort, adventure, and indulgence converge. By delivering unparalleled service and embracing the natural wonders around us, we aim to exceed the expectations of our discerning guests.</p>
            </div>
            <div class="col-lg-6">
                <p><strong>Vision:</strong> Our vision is to be the epitome of refined living, offering an unparalleled escape that harmoniously integrates opulence with the pristine beauty of the Canadian landscape. We aspire to be a beacon of luxury that sets new standards in hospitality.</p>
            </div>
            <div class="col-lg-12">
                <p><strong>Why Choose Us:</strong> Choose us for an unrivaled synthesis of sophistication and natural beauty. We pride ourselves on personalized service, attention to detail, and a commitment to sustainability. Whether you seek a tranquil retreat, a memorable event venue, or an adventure-filled getaway, our hotel and restaurant is the ultimate choice. We offer more than accommodation; we offer an immersive experience where every moment is tailored to create lasting memories. Discover the allure of our haven, where the extraordinary is the standard.</p>
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
					{{-- <a class="my-video-links" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=aD2anRT9TDk"><i class="bi bi-play"></i></a> --}}
				</div>
			</div>
			<div class="col-lg-6 col-md-12 matha-ta-ghurlo" data-cue="zoomIn">
				<div class="section-title two">
					<h4>Manager</h4>
					<h2>The Best Luxury Hotel in Canada</h2>
					<p class="section-desc-2">Welcome to Full Moon hotel and restaurant! Meet our dedicated manager, Mr. Kennet L. Wall, a seasoned professional committed to ensuring your stay exceeds expectations. With a passion for hospitality, Mr. Kennet L. Wall and the entire team are here to curate a personalized and unforgettable experience, blending opulence with the natural beauty that surrounds us.</p>
				</div>
				<div class="call-do-action-text">
					<a href="#">“ Your comfort and satisfaction are at the forefront of our service philosophy. Should you require anything or have special requests, our team is here to make your experience truly exceptional. ”</a>
				</div>
				{{-- <div class="call-do-action-author">
					<div class="call-do-action-author-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/call-do-action-img.png" alt="">
					</div>
					<div class="call-do-action-content">
						<h4>Mr. Kennet L. Wall</h4>
						<p>Associate for Admission and Minority Affairs</p>
                        <a class="btn btn-primary" target="_blank" href="https://www.linkedin.com/in/mr-kennet-l-wall-8b28502a9Thank">Follow Linkedin</a>
					</div>
				</div> --}}
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
					<h1>Full Moon Canada Facilities</h1>
					<p class="section-desc-1">Immerse yourself in the lap of luxury with our state-of-the-art facilities. From lavishly appointed rooms and suites that offer breathtaking views to world-class dining that tantalizes the taste buds, every detail is crafted to enhance your stay. Our restaurant features a rejuvenating spa, recreational amenities, and event spaces that cater to both leisure and business travelers.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-one" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-1.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Room Services</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-two" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-2.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Wi-Fi Internet</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-three" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-3.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Smart Key</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-fore" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-4.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Breakfast</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-five" data-cue="zoomIn">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-5.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Swimming Pool</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-two" data-cue="zoomIn">
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
					<h2 class="text-white">GUEST TESTIMONIALS</h2>
					<p>Customers speak volumes about their unforgettable experiences at Full Moon. Exceptional service, luxurious amenities, and personalized attention make us their top choice for creating lasting memories.</p>
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
					<p class="section-desc-1">Discover opulent escapes and exclusive offerings in our luxury hotel's latest blog post. Elevate your stay with insider tips and captivating tales.

                    </p>
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
