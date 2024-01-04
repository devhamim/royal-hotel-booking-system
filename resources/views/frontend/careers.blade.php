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
						<h4>Careers</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>Careers</li>
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
<!-- start career list Area -->
<!--==================================================-->
<div class="about-area inner">
    <div class="container">
        <h2>Careers List</h2>
        <p>Full Moon Hotel and Restaurant takes real pride in welcoming fresh and new talent to our increasing dynamic workforce. In addition to Canada nationals, our team comprises of expatriates from various other nationalities. Your career can be pursued in the following departments.</p>

            <p>Our passionate workforce offers our customers with quality service that is trusted, treasured and experienced repeatedly. For any inquiries related to job vacancies, feel free to contact our recruitment team, career@fullmooncanada.com</p>
    </div>
</div>
<div class="about-area inner">
	<div class="careerlist">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Careers List
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No.</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Vacancy</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($careerlists as $sl=>$careerlist)
                                    <tr>
                                        <td>{{$sl+1}}</td>
                                        <td>{{ $careerlist->department }}</td>
                                        <td>{{ $careerlist->post }}</td>
                                        <td>{{ $careerlist->vacancy }}</td>
                                        <td>
                                            <a href="{{route('careers.applay',$careerlist->id)}}" class="btn btn-primary">Apply Now</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->



@endsection
