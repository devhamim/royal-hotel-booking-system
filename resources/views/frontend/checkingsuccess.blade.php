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
            <h4 class="text-danger">Payment Failed</h4>
            <img width="80px" src="{{asset('frontend/assets/images/home-1/error.png')}}" alt="">
            <p class="pt-3">payment transaction was not successful for some reason. The reasons for payment failures can vary, including insufficient funds, technical issues, incorrect payment information, or security measures.</p>
            <a href="{{url('/')}}" class="btn btn-dark">Home</a>
        </div>

       </div>
    </div>
</div>

<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->
@endsection

