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
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, odio dolor et a deleniti impedit molestias in nam neque totam ut explicabo. Excepturi accusantium, modi cupiditate maiores assumenda quas hic ullam a, ad voluptatum quod consectetur eligendi praesentium asperiores consequatur ducimus rerum distinctio dignissimos corporis voluptatibus eos dolor! Ut officia nulla amet dolorem! Cumque voluptatum assumenda, mollitia atque sapiente alias minima. Dignissimos tempora, ullam ex dolorem delectus, ad ut sapiente eum earum sunt sed dolorum eos cupiditate architecto placeat exercitationem modi aut vitae, dolores sit doloribus cum dicta porro obcaecati. Explicabo alias culpa pariatur! Placeat itaque eaque minus assumenda adipisci.</p>
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
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Vacancy</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($careerlists as $careerlist)
                                    <tr>
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
