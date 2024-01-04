@extends('frontend.layout.app')

@section('content')


<!--==================================================-->
<!-- start career list Area -->
<!--==================================================-->
<div class="about-area inner py-5" style="background: #000">
    <div class="container ">
    </div>
</div>

<div class="about-area inner">
    <div class="container">
       <div class="row">
        <div class="col-lg-8 m-auto text-center">
            <h4 class="text-success">Success</h4>
            <img width="100px" src="{{asset('frontend/assets/images/home-1/success.png')}}" alt="">
            <p>Thank you for submitting your application at Full Moon. We have successfully received your application.

                Your interest in joining our team is appreciated. Our hiring team will now review your application and qualifications. If your skills and experience align with our needs, we will contact you for the next steps in the hiring process.

                Please note that due to the volume of applications we receive, this process may take some time. We appreciate your patience.

                If you have any questions or need further assistance, feel free to contact our Human Resources department.

                Thank you again for considering your potential employer. We wish you the best of luck in your job search.</p>
            <a href="{{url('/')}}" class="btn btn-dark">Home</a>
        </div>

       </div>
    </div>
</div>

<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->
@endsection

