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
						<h4>Room Details</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>Room Details</li>
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
<!-- Start Royella Room Details Area -->
<!--==================================================-->
<div class="room-details">
	<div class="container">
		<div class="row">
            <div class="col-lg-12 my-5">
                <form action="{{route('gest.room.book')}}" method="POST" id="dreamit-form">
                @csrf
                <input type="hidden" name="room_id" value="{{$rooms->first()->id}}">
                    <div class="row add-bg align-items-center">
                        <div class="booking-input-box">
                            <h4>Check In</h4>
                            <input type="date" name="checkin" required>
                        </div>
                        <div class="booking-input-box">
                            <h4>Check Out</h4>
                            <input type="date" name="checkout" required>
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
                            <select name="gest">
                                @foreach ($rooms as $room)
                                    <option value="{{$room->id}}">{{$room->adult}} Adult, {{$room->childreen}}  Child</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="booking-button">
                            <button type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
			<div class="col-lg-8">
				<div class="row">
					<div class="room-details-list owl-carousel">
					    <div class="col-lg-12">
					    	<div class="room-detils-thumb">
					    		<img src="{{asset('uploads/rooms')}}/{{$rooms->first()->image}}" alt="">
					    	</div>
					    </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="room-details-content">
							<h4>{{$rooms->first()->category}}</h4>
							<h1>{{$rooms->first()->title}}</h1>
							<p class="room-detils-desc" data-cue="zoomIn">
                                {!! $rooms->first()->description !!}
                            </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-12">
						<div class="booking-list">
							<div class="booking-list-content">
								<h4>Booking</h4>
							</div>
							<div class="booking-item">
								<ul>
									<li><strong>Interior -</strong>{{$rooms->first()->interior}}</li>
									<li><strong>Adult -</strong>{{$rooms->first()->adult}}</li>
									<li><strong>Childreen -</strong>{{$rooms->first()->childreen}}</li>
									<li><strong>Price - </strong> ${{$rooms->first()->price}}</li>
								</ul>
							</div>

                            {{-- <a href="{{route('room.gest.book',$rooms->first()->slug)}}" class="btn btn-primary" style="background: #c19d68">Book Now</a> --}}

						</div>
						<div class="room-details-amenities">
							<div class="room-details-amenities-content">
								<h4>Amenities</h4>
							</div>
							<div class="room-amenities-item">
								<ul>
                                    @php
                                        $gest = $rooms->first()->adult+$rooms->first()->childreen;
                                    @endphp
									<li><img src="assets/images/inner/room-amenities-1.png" alt="">{{$rooms->first()->adult}} - {{$gest}} Persons</li>
									<li><img src="assets/images/inner/room-amenities-2.png" alt="">Free WiFi Available</li>
									<li><img src="assets/images/inner/room-amenities-3.png" alt="">Swimingpools</li>
									<li><img src="assets/images/inner/room-amenities-4.png" alt="">Breakfast</li>
									<li><img src="assets/images/inner/room-amenities-5.png" alt="">{{$rooms->first()->subtitle}}</li>
									<li><img src="assets/images/inner/room-amenities-6.png" alt="">Gym facilities</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Room Details Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Royella Room Area -->
<!--==================================================-->
{{-- <div class="room-area inner two">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center" data-cue="zoomIn">
					<div class="section-thumb">
						<img src="assets/images/home-1/section-shape1.png" alt="">
					</div>
					<h1>Royella’s Rooms & Suites</h1>
					<p class="section-desc-1">Proactively morph optimal infomediaries rather than accurate expertise. Intrinsicly
                     progressive resources rather than resource-leveling</p>
				</div>
			</div>
		</div>
		<div class="row" data-cue="zoomIn">
			<div class="room_list owl-carousel">
			    <div class="col-lg-12">
					<div class="room-single-box">
						<div class="room-thumb">
							<img src="assets/images/home-1/room-1.jpg" alt="">
							<div class="room-details-button">
								<a href="#">View Details<i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
						<div class="room-pricing">
							<span class="dolar">$560</span>
							<span>Night</span>
						</div>
	                    <div class="room-content">
	                    	<h4>Luxury Room</h4>
	                    	<a href="#">Delux Family Rooms</a>
	                    	<p>1500 SQ.FT/Rooms</p>
	                    </div>
	                    <div class="room-bottom">
	                    	<div class="room-bottom-icon">
	                    		<span><img src="assets/images/home-1/room-bottom-icon.png" alt="">2 King Bed</span>
	                    	</div>
	                    	<div class="coustomar-rating">
	                    		<ul>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-half"></i></li>
	                    		</ul>
	                    	</div>
	                    </div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="room-single-box">
						<div class="room-thumb">
							<img src="assets/images/home-1/room-2.jpg" alt="">
							<div class="room-details-button">
								<a href="#">View Details<i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
						<div class="room-pricing">
							<span class="dolar">$560</span>
							<span>Night</span>
						</div>
	                    <div class="room-content">
	                    	<h4>Luxury Room</h4>
	                    	<a href="#">Doubble Suite Rooms</a>
	                    	<p>1500 SQ.FT/Rooms</p>
	                    </div>
	                    <div class="room-bottom">
	                    	<div class="room-bottom-icon">
	                    		<span><img src="assets/images/home-1/room-bottom-icon.png" alt="">2 King Bed</span>
	                    	</div>
	                    	<div class="coustomar-rating">
	                    		<ul>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    		</ul>
	                    	</div>
	                    </div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="room-single-box">
						<div class="room-thumb">
							<img src="assets/images/home-1/room-3.jpg" alt="">
							<div class="room-details-button">
								<a href="#">View Details<i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
						<div class="room-pricing">
							<span class="dolar">$560</span>
							<span>Night</span>
						</div>
	                    <div class="room-content">
	                    	<h4>Luxury Room</h4>
	                    	<a href="#">Suprior Bed Rooms</a>
	                    	<p>1500 SQ.FT/Rooms</p>
	                    </div>
	                    <div class="room-bottom">
	                    	<div class="room-bottom-icon">
	                    		<span><img src="assets/images/home-1/room-bottom-icon.png" alt="">2 King Bed</span>
	                    	</div>
	                    	<div class="coustomar-rating">
	                    		<ul>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star"></i></li>
	                    		</ul>
	                    	</div>
	                    </div>
					</div>
				</div>
			  <div class="col-lg-12">
					<div class="room-single-box">
						<div class="room-thumb">
							<img src="assets/images/home-1/room-1.jpg" alt="">
							<div class="room-details-button">
								<a href="#">View Details<i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
						<div class="room-pricing">
							<span class="dolar">$560</span>
							<span>Night</span>
						</div>
	                    <div class="room-content">
	                    	<h4>Luxury Room</h4>
	                    	<a href="#">Delux Family Rooms</a>
	                    	<p>1500 SQ.FT/Rooms</p>
	                    </div>
	                    <div class="room-bottom">
	                    	<div class="room-bottom-icon">
	                    		<span><img src="assets/images/home-1/room-bottom-icon.png" alt="">2 King Bed</span>
	                    	</div>
	                    	<div class="coustomar-rating">
	                    		<ul>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-fill"></i></li>
	                    			<li><i class="bi bi-star-half"></i></li>
	                    		</ul>
	                    	</div>
	                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> --}}
<!--==================================================-->
<!-- End Royella Room Area -->
<!--==================================================-->

@endsection
