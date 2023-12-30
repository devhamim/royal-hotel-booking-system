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
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi qui consequatur ad tempora rerum vel ut sequi iure esse dolorum impedit, perferendis dignissimos praesentium obcaecati in! Expedita id aspernatur ipsum dignissimos deleniti ducimus.</p>
            <a href="{{url('/')}}" class="btn btn-dark">Home</a>
        </div>

       </div>
    </div>
</div>

<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->
@endsection

