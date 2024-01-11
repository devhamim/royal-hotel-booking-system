@extends('frontend.layout.app')

@section('content')

<!--==================================================-->
<!-- Start Royella Hero Area -->
<!--==================================================-->
<div class="hero-slider owl-carousel">
    @foreach ($banners as $banner)
	<div class="hero-area home-1 align-items-center d-flex" style="background: url('{{ asset('uploads/banner') }}/{{ $banner->image }}')">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="hotel-rating">
						<ul>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
						</ul>
					</div>
					<div class="hero-content">
						<h4>{{ $banner->description }}</h4>
						<h1> {{ $banner->title }}
                        </h1>
					</div>
					<div class="luxury-button">
						<a href="{{route('room.finds')}}">Discover More</a>
					</div>
					{{-- <div class="hero-contact">
						<a href="#"><i class="bi bi-telephone-fill"></i>+980 123 4567 890</a>
					</div> --}}
				</div>
			</div>
		</div>
	</div>
    @endforeach
</div>
<!--==================================================-->
<!-- End Royella Hero Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start Royella Booking Area -->
<!--==================================================-->
<div class="booking-area home-1">
	<div class="container">
		<form action="{{route('search.rooms')}}" method="POST" id="search_input">
            @csrf
			<div class="row add-bg align-items-center">
				<div class="booking-input-box">
					<h4>Check In</h4>
					<input type="date" class="check_in" name="check_in" required>
                    <div>
                        @error('check_in')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    </div>
				</div>
				<div class="booking-input-box">
					<h4>Check Out</h4>
					<input type="date" class="check_out" name="check_out" required>
                    <div>
                        @error('check_out')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
				</div>
				<div class="booking-input-box">
					<h4>Rooms</h4>
					<select name="rooms">
                        <option value="1">1 Rooms</option>
                        <option value="2">2 Rooms</option>
                        <option value="3">3 Rooms</option>
                        <option value="4">4 Rooms</option>
                        <option value="5">5 Rooms</option>
                    </select>
				</div>
				<div class="booking-input-box upper">
					<h4>Guests</h4>
					<select name="guests" class="guests">
                        @foreach ($rooms_gest->take(4) as $room)
                            <option value="{{$room->id}}">{{$room->adult}} Adult, {{$room->childreen}}  Child</option>
                        @endforeach
                    </select>
				</div>
			    <div class="booking-button">
					<button type="submit">SEARCH</button>
				</div>
		    </div>
		</form>
		<div id="status"></div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Booking Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Royella Room Area -->
<!--==================================================-->
<div class="room-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center" data-cue="zoomIn">
					<div class="section-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/section-shape1.png" alt="">
					</div>
					<h1>FULL MOON’S ROOMS & SUITES</h1>
					<p class="section-desc-1">Full Moon's Room and Suites Elegant retreat with luxurious amenities, captivating design, breathtaking views, ensuring an enchanting and memorable stay.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--room-area-->
<div class="room-area">
	<div class="container">
		<div class="row margin-top" data-cue="zoomIn">
			<div class="room_list owl-carousel">
                @foreach ($rooms as $room)
                    <div class="col-lg-12">
                        <div class="room-single-box">
                            <div class="room-thumb">
                                <a href="{{route('room.details',$room->slug)}}">
                                    <img src="{{asset('uploads/rooms')}}/{{$room->image}}" alt="">
                                </a>
                                <div class="room-details-button">
                                    <a href="{{route('room.details',$room->slug)}}">View Details<i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="room-pricing">
                                <span class="dolar">${{$room->price}}</span>
                            </div>
                            <div class="room-content">
                                <h4>{{$room->category}}</h4>
                                <a href="{{route('room.details',$room->slug)}}">{{$room->title}}</a>
                                <p>{{$room->subtitle}}</p>
                            </div>
                            <div class="room-bottom">
                                <div class="room-bottom-icon">
                                    <span><img src="{{asset('frontend')}}/assets/images/home-1/room-bottom-icon.png" alt="">{{$room->interior}}</span>
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
<!-- End Royella Room Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Royella About Area -->
<!--==================================================-->
<div class="about-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="row" data-cue="zoomIn">
	                <div class="about_list owl-carousel">
	                 	<div class="col-md-12">
	                 		<div class="about-thumb">
					           <img src="{{asset('frontend')}}/assets/images/home-1/about-thumb.png" alt="">
			            	</div>
	                 	</div>
	                 	<div class="col-md-12">
	                 		<div class="about-thumb">
					           <img src="{{asset('frontend')}}/assets/images/home-1/about-thumb-2.jpg" alt="">
			            	</div>
	                 	</div>
	                </div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12  upper">
				<div class="section-title two" data-cue="zoomIn">
					<h4>Luxury Hotel And Restaurant</h4>
					<h2>FULL MOON - The Best Luxury Hotel in Canada</h2>
					<p class="section-desc-2">Welcome to our premier restaurant Full Moon in Canada, where breathtaking landscapes meet unrivaled luxury. As a distinguished hospitality haven, we offer an immersive escape into natural beauty coupled with exquisite amenities. Our commitment to exceptional service ensures an unparalleled retreat, inviting you to experience the epitome of tranquility and indulgence.</p>
				</div>
				<div class="about-conuter-box" data-cue="zoomIn">
					<div class="about-counter-content">
						<h4 class="counter">650</h4>
						<span>+</span>
						<p>Luxury Rooms</p>
					</div>
				</div>
				<div class="about-conuter-box" data-cue="zoomIn">
					<div class="about-counter-content">
						<h4 class="counter">4.9</h4>
						<p>Coustomer Ratings</p>
					</div>
				</div>
				<div class="animation-bar" data-cue="zoomIn">
				</div>
				<div class="luxury-button" data-cue="zoomIn">
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
<!-- Start Royella Feature Area -->
<!--==================================================-->
<div class="feature-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center" data-cue="zoomIn">
					<div class="section-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/section-shape1.png" alt="">
					</div>
					<h1>Hotel’S Facilities</h1>
					<p class="section-desc-1">Immerse yourself in the lap of luxury with our state-of-the-art facilities. From lavishly appointed rooms and suites that offer breathtaking views to world-class dining that tantalizes the taste buds, every detail is crafted to enhance your stay. Our restaurant features a rejuvenating spa, recreational amenities, and event spaces that cater to both leisure and business travelers.</p>
				</div>
			</div>
		</div>
		<div class="row"  data-cue="zoomIn">
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-one">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-1.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Room Services</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-two">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-2.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Wi-Fi Internet</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-three">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-3.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Smart Key</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-fore">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-4.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Breakfast</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-five">
					<div class="feature-icon">
						<img src="{{asset('frontend')}}/assets/images/home-1/feature-5.png" alt="">
					</div>
					<div class="feature-content">
						<h4>Swimming Pool</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<div class="single-feature-box before-two">
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
<!-- Start Royella Call Do Action Area -->
<!--==================================================-->
<div class="call-do-action-area">
	<div class="container">
		<div class="row align-items-center call-do-action-bg">
			<div class="col-lg-6 col-md-12">
				<div class="section-title two" data-cue="zoomIn">
					<h4>Manager</h4>
					<h2>The Best Luxury Hotel in Canada</h2>
					<p class="section-desc-2">Welcome to Full Moon hotel and restaurant! Meet our dedicated manager, Mr. Kennet L. Wall, a seasoned professional committed to ensuring your stay exceeds expectations. With a passion for hospitality, Mr. Kennet L. Wall and the entire team are here to curate a personalized and unforgettable experience, blending opulence with the natural beauty that surrounds us.</p>
				</div>
				<div class="call-do-action-text" data-cue="zoomIn">
					<a>“ Your comfort and satisfaction are at the forefront of our service philosophy. Should you require anything or have special requests, our team is here to make your experience truly exceptional. ”</a>
				</div>
				<div class="call-do-action-author" data-cue="zoomIn">
					<div class="call-do-action-author-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/call-do-action-img.png" alt="">
					</div>
					<div class="call-do-action-content">
						<h4>Mr. Kennet L. Wall</h4>
						<p>Associate for Admission and Minority Affairs</p>
                        <a href="https://www.linkedin.com/in/mr-kennet-l-wall-8b28502a9Thank">Follow</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="call-do-action-video" data-cues="zoomIn">
					<a class="my-video-links" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=aD2anRT9TDk"><i class="bi bi-play"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Call Do Action Area -->
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
					<h2>The Full Moon Canada hotel and restaurant for enjoy your luxurious life</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="luxury-button" data-cue="zoomIn">
					<a href="{{route('services')}}">View More item</a>
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
					    <h1>Gym Grounds</h1>
						<p>Indulge in our state-of-the-art gym facilities at our Canadian hotel and restaurant. Equipped with cutting-edge fitness equipment, our gym offers a rejuvenating space for your workout routine. Enjoy panoramic views as you engage in a holistic fitness experience. Whether you prefer cardio, strength training, or group classes, our facilities cater to all fitness enthusiasts, ensuring a refreshing and invigorating wellness journey during your stay.</p>
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
					    <h1>Indoor Swimming Pool</h1>
						<p>Enjoy a relaxing swim in our indoor pool at the Canadian hotel. The pool is comfortably heated, and our inviting surroundings make it the perfect place to unwind. Whether you're looking for a refreshing dip or a leisurely swim, our indoor pool is here for your enjoyment. So, grab your swimsuit, and take a dip to enhance your stay with us!</p>
						{{-- <a class="facilities-button" href="services-details.html"><i class="bi bi-arrow-right"></i></a> --}}
					</div>
					<div class="facilities-number two">
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
					    <h1>The Buffet Restaurant</h1>
						<p>Savor exquisite dining at our Canadian hotel and restaurant. Our restaurant offers a diverse menu, from hearty breakfasts to gourmet dinners. With a cozy ambiance and attentive staff, it's the perfect spot to enjoy delicious meals. Whether you're here for a leisurely brunch or a romantic dinner, our restaurant provides a delightful culinary experience for a memorable stay.</p>
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
					    <h1>Indoor SPA</h1>
						<p>Full Moon Canada's luxury spa with calming massages and rejuvenating facials. Our spa features serene spaces, expert therapists, and a peaceful atmosphere. Treat yourself to a day of relaxation – you'll leave feeling refreshed and revitalized, ready to make the most of your stay with us.</p>
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



<!--==================================================-->
<!-- Start Royella Offers Area -->
<!--==================================================-->
<div class="offers-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
	    	    <div class="section-title two" data-cue="zoomIn">
				    <h4>Offers</h4>
				    <h2>Full Moon Provide Best Offers</h2>
			    </div>
			</div>
		</div>
		<div class="row" data-cue="zoomIn">
			<div class="offers-list owl-carousel">
                @foreach ($rooms->take(8) as $room)
			    <div class="col-md-12">
				    <div class="single-offers-box">
					    <div class="offers-thumb">
						    <img src="{{asset('uploads/rooms')}}/{{$room->image}}" alt="">
					    </div>
					    <div class="offers-content">
					     	<a href="{{route('room.details',$room->slug)}}">{{$room->title}}</a>
					    </div>
					    <div class="offers-dollar">
						   <h4>25% off</h4>
					    </div>
				    </div>
			    </div>
                @endforeach
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Offers Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Royella Testimonial Area -->
<!--==================================================-->
<div class="testimonial-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center" data-cue="zoomIn">
					<div class="section-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/section-shape1.png" alt="">
					</div>
					<h1>Guest Testimonials</h1>
					<p class="section-desc-1">Customers speak volumes about their unforgettable experiences at Full Moon. Exceptional service, luxurious amenities, and personalized attention make us their top choice for creating lasting memories.</p>
				</div>
			</div>
		</div>
		<div class="row" data-cue="zoomIn">
			<div class="testi-list owl-carousel">
                @foreach ($customerSays as $customer)
                    <div class="col-lg-12">
                        <div class="single-testi-box">
                            <div class="testi-quote-icon">
                                <img src="{{asset('frontend')}}/assets/images/home-1/testi-quote.png" alt="">
                            </div>
                            <div class="testi-rating">
                                <ul>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star"></i></li>
                                </ul>
                            </div>
                            <div class="testi-content">
                                <p>{!!$customer->description!!}</p>
                            </div>
                            <div class="testi-author">
                                <div class="testi-author-thumb">
                                    <img width="50px" src="{{asset('uploads/customersay')}}/{{$customer->image}}" alt="">
                                </div>
                                <div class="testi-author-title">
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
<!-- End Royella Testimonial Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Royella Blog Area -->
<!--==================================================-->
<div class="blog-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center" data-cue="zoomIn">
				<div class="section-title center">
					<div class="section-thumb">
						<img src="{{asset('frontend')}}/assets/images/home-1/section-shape1.png" alt="">
					</div>
					<h1>Latest post from blog</h1>
					<p class="section-desc-1">Discover opulent escapes and exclusive offerings in our luxury hotel's latest blog post. Elevate your stay with insider tips and captivating tales.</p>
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
<script>
$(document).ready(function () {
    $('#search_input').submit(function (e) {
        e.preventDefault();

        var check_in = $('.check_in').val();
        var check_out = $('.check_out').val();
        var rooms = $('.rooms').val();
        var guests = $('.guests').val();

        var link = "{{ route('search.rooms') }}" + "?check_in=" + check_in + "&check_out=" + check_out + "&rooms=" + rooms + "&guests=" + guests;
        window.location.href = link;
    });
});
</script>

