<!--==================================================-->
<!-- Start Royella Header Area -->
<!--==================================================-->
<div class="header-area" id="sticky-header">
	<div class="container-fulid">
		<div class="row align-items-center">
			<div class="col-lg-2">
				<div class="header-logo">
					<a href="{{url('/')}}">
                        @if ($setting->first()->logo != null)
                            <img width="90" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
                        @endif
                    </a>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="header-menu">
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{route('room.finds')}}">Room</a></li>
						<li><a href="{{route('services')}}">Service</a></li>
						<li><a href="{{route('gallerys')}}">Gallery</a></li>
                        <li><a href="{{route('about_us')}}">About</a></li>
						<li><a href="{{route('career')}}">Career</a></li>
                        <li><a href="{{route('our.blog')}}">Blog</a></li>
						<li><a href="{{route('contect')}}">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="header-button text-right">
					<a href="{{route('room.finds')}}">Booking</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Header Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Main Menu Area -->
<!--==================================================-->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
	<div class="mobile-menu mean-container mean-bar">
        <div class="logo">
            <a href="{{url('/')}}">
                <img width="60" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="">
            </a>
        </div>
		<nav class="header-menu">
			<ul class="nav_scroll">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{route('room.finds')}}">Room</a></li>
                <li><a href="{{route('services')}}">Service</a></li>
                <li><a href="{{route('gallerys')}}">Gallery</a></li>
                <li><a href="{{route('about_us')}}">About</a></li>
                <li><a href="{{route('career')}}">Career</a></li>
                <li><a href="{{route('our.blog')}}">Blog</a></li>
                <li><a href="{{route('contect')}}">Contact</a></li>
			</ul>
		</nav>
	</div>
</div>
<!--==================================================-->
<!-- End Main Menu Area -->
<!--==================================================-->
