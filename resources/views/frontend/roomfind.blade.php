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
						<h4>Find Room</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>Find Room</li>
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
<!-- Start Royella Find Room Area -->
<!--==================================================-->
<div class="find-room-area">
	<div class="container">
		<div class="row">
            <div class="col-md-12 text-center">
				<div class="section-title center inner">
					<h1>Check Availibity</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<form action="{{route('search.rooms')}}" method="POST" id="search_input">
                @csrf
                <div class="row add-bg align-items-center">
                    <div class="booking-input-box">
                        <h4>Check In</h4>
                        <input type="date" class="check_in" name="check_in" required>
                    </div>
                    <div class="booking-input-box">
                        <h4>Check Out</h4>
                        <input type="date" class="check_out" name="check_out" required>
                    </div>
                    <div class="booking-input-box">
                        <h4>Rooms</h4>
                        <select name="rooms" class="rooms">
                            @foreach ($rooms as $room)
                                <option value="{{$room->id}}">{{$room->room_number}} Rooms</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="booking-input-box upper">
                        <h4>Guests</h4>
                        <select name="guests" class="guests">
                            @foreach ($rooms as $room)
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
		<div class="row align-items-center">
            @foreach ($rooms as $room)
		    <div class="col-lg-4 col-md-6">
				<div class="room-single-box" data-cue="zoomIn">
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
                    		<span><img src="assets/images/home-1/room-bottom-icon.png" alt="">{{$room->interior}}</span>
                    	</div>

                    </div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella End Room Area -->
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

