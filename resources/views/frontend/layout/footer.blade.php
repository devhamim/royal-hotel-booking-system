<!--==================================================-->
<!-- Start Royella Brand Area -->
<!--==================================================-->
<div class="brand-area" data-cue="zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-8">
				<div class="row">
					<div class="brand-list owl-carousel">
					    <div class="col-lg-12">
						    <div class="single-brand-box">
							    <div class="brand-thumb">
							    	<img src="{{asset('frontend')}}/assets/images/home-1/brand-1.png" alt="">
							    </div>
						    </div>
					    </div>
					    <div class="col-lg-12">
						    <div class="single-brand-box">
							    <div class="brand-thumb">
							    	<img src="{{asset('frontend')}}/assets/images/home-1/brand-2.png" alt="">
							    </div>
						    </div>
					    </div>
					    <div class="col-lg-12">
						    <div class="single-brand-box">
							    <div class="brand-thumb">
							    	<img src="{{asset('frontend')}}/assets/images/home-1/brand-3.png" alt="">
							    </div>
						    </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Brand Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Royella Footer Area -->
<!--==================================================-->
<div class="footer-area" data-cue="zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="footer-widget-contact">
					<div class="footer-widget-logo">
						@if ($setting->first()->footer_logo != null)
                            <a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt=""></a>
                        @endif
					</div>
					<div class="footer-widget-content">
						<div class="footer-widget-title">
							<h4>Contact Info</h4>
						</div>
						<div class="footer-widget-contact-info">
							<ul>
                                @if ($setting->first()->number != null)
                                    <li><i class="bi bi-telephone-fill"></i> <span>Phone : </span>{{ $setting->first()->number }}</li>
                                @endif
                                @if ($setting->first()->email != null)
                                    <li><i class="bi bi-envelope"></i><span>Email : </span>{{ $setting->first()->email }}</li>
                                @endif
                                @if ($setting->first()->address != null)
                                    <li><i class="bi bi-geo-alt-fill"></i> <span>Address : </span>{{ $setting->first()->address }}</li>
                                @endif
							</ul>
						</div>
					</div>
					<div class="footer-widget-social-icon">
						<ul>
							<li><a href="{{ $setting->first()->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="{{ $setting->first()->twitter }}"><i class="fab fa-twitter"></i></a></li>
							<li><a href="{{ $setting->first()->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="{{ $setting->first()->instagram }}"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="footer-widget-content upper">
					<div class="footer-widget-title">
						<h4>Useful Links</h4>
					</div>
					<div class="footer-widget-menu">
                        <ul>
                         	<li><a href="{{route('about_us')}}">About</a></li>
                         	<li><a href="{{route('career')}}">Career</a></li>
                         	<li><a href="{{ route('gallerys') }}">Gallerys</a></li>
                         	<li><a href="{{ route('our.blog') }}">Blog</a></li>
                         	<li><a href="{{route('contect')}}">Contact</a></li>
                        </ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Gallery</h4>
					</div>
					<div class="footer-widget-gallery">
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend')}}/assets/images/home-1/gallery-1.jpg"><img src="{{asset('frontend')}}/assets/images/home-1/gallery-1.jpg" alt=""></a>
                         <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend')}}/assets/images/home-1/gallery-2.jpg"><img src="{{asset('frontend')}}/assets/images/home-1/gallery-2.jpg" alt=""></a>
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend')}}/assets/images/home-1/gallery-3.jpg"><img src="{{asset('frontend')}}/assets/images/home-1/gallery-3.jpg" alt=""></a>
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend')}}/assets/images/home-1/gallery-4.jpg"><img src="{{asset('frontend')}}/assets/images/home-1/gallery-4.jpg" alt=""></a>
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend')}}/assets/images/home-1/gallery-5.jpg"><img src="{{asset('frontend')}}/assets/images/home-1/gallery-5.jpg" alt=""></a>
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend')}}/assets/images/home-1/gallery-6.jpg"><img src="{{asset('frontend')}}/assets/images/home-1/gallery-6.jpg" alt=""></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>About</h4>
					</div>
					@if ( $setting->first()->about != null)
                        <p>{{ $setting->first()->about }}</p>
                    @endif
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Footer Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Royella Footer Bottom Area -->
<!--==================================================-->
<div class="footer-bottom-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="footer-bottom-content">
					<h4>{{ $setting->first()->footer }}</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Footer Bottom Area -->
<!--==================================================-->
