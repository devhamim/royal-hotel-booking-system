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
						<h4>Blog Details</h4>
					</div>
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li>/</li>
						<li>Blog Details</li>
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
<!-- Start Royella Blog Details Area -->
<!--==================================================-->
<div class="blog-details-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="blog-details-thumb">
							<img src="{{ asset('uploads/blog') }}/{{ $blogs->first()->image }}" alt="">
						</div>
						<div class="blog-details-content">
							<div class="meta-blog" data-cue="zoomIn">
								<ul>
									<li>{{ $blogs->first()->created_at->format('d-M-Y') }}</li>
								</ul>
							</div>
							<div class="blog-details-title" data-cue="zoomIn">
								<a>{{ $blogs->first()->title }}</a>
							</div>
							<div class="blog-details-desc" data-cue="zoomIn">
								<p>
                                    {!! $blogs->first()->description !!}
                                </p>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="blog-details-comment-title" data-cue="zoomIn">
										<h4>‘{{ $blog_comment_count }}’ Comments</h4>
									</div>
                                    @foreach ($blog_comment as $comment)
                                        <div class="blog-details-comment" data-cue="zoomIn">
                                            <div class="blog-details-comment-reply">
                                                <a href="#">Reply</a>
                                            </div>
                                            <div class="blog-details-comment-thumb">
                                                <img src="assets/images/inner/blog-details-author-1.png" alt="">
                                            </div>
                                            <div class="blog-details-comment-content">
                                            <h2>{{ $comment->name }}</h2>
                                            <span>{{ $comment->created_at->format('d-M-Y') }}</span>
                                            <p>
                                                {{$comment->message}}
                                            </p>
                                            </div>
                                        </div>
                                    @endforeach
								</div>
							</div>
							<div class="blog-details-contact">
								<div class="blog-details-contact-title" data-cue="zoomIn">
									<h4>Leave A Comments</h4>
								</div>
								<form name="contact_form" class="comment-form" action="{{ route('blog.comment') }}" method="POST">
                                    @csrf
									<div class="row" data-cue="zoomIn">
										<div class="col-lg-6">
											<div class="contact-input-box">
												<input name="name" type="text" placeholder="Your Name*" required>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="contact-input-box">
                                                <input name="email" type="email" placeholder="Your Email*" required>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="contact-input-box">
												<textarea name="message" id="comment-message" placeholder="Your Comment"></textarea>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-check-box">
										      <input type="checkbox">
											     <span>Save your email info in the browser for next comments.</span>
											  </div>
										</div>
										<div class="col-lg-12">
                                            <input name="blogs_id" class="form-control" type="hidden" value="{{ $blogs->first()->id }}" />
											<div class="blog-details-submi-button">
												<button type="submit">Submit Now</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-12">
				    	<div class="widget-categories-box">
							<!-- categories title -->
							<div class="categories_title">
								<h4>Recent Post </h4>
							</div>
                            @foreach ($latest_blogs->take(6) as $latest)
                                <div class="sidber-widget-recent-post">
                                    <div class="recent-widget-thumb">
                                        <a href="{{route('our.blog.details',$latest->slug)}}">
                                            <img width="100px" src="{{asset('uploads/blog')}}/{{$latest->image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-widget-content">
                                        <a href="{{route('our.blog.details',$latest->slug)}}">{{$latest->title}}</a>
                                        <p> {{$latest->created_at->format('d,M,Y')}}</p>
                                    </div>
                                </div>
                            @endforeach
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Blog Details Area -->
<!--==================================================-->


@endsection
