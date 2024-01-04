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
						<h4>Checking</h4>
					</div>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>/</li>
						<li>Checking</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Breadcumb Area -->
<!--==================================================-->

<!-- ======================= Product Detail ======================== -->
<section class="middle">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="text-center d-block mb-5">
                    <h2>Payment Gateway</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-12 col-lg-7 col-md-12 m-auto">
                <form method="POST" action="{{route('booking.payment.store')}}">
                    @csrf
                    <input type="hidden" name="gestcheckout_id" value="{{$checkoutdata}}">

                    <h5 class="mb-4 ft-medium">Payments</h5>

                    <nav>
                        <div class="nav nav-tabs d-flex" id="nav-tab" role="tablist">
                          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">PayPal</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Debit Or Credit</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="form-group">
                                <label class="text-dark">PayPal Email</label>
                                <input type="text" class="form-control simple" name="paypal_mail" placeholder="paypal@gmail.com">
                                @error('paypal_mail')
                                    <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Password</label>
                                <input type="password" class="form-control simple" name="transaction_id" placeholder="Password">
                                @error('transaction_id')
                                    <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                <input type="hidden" name="paypal" value="Paypal">
                                <button type="submit" name="btn" value="1" class="btn btn-dark btm-md full-width">Pay {{$checkouts->first()->rel_to_room->price}} USD</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-dark">Card Holder Name *</label>
                                        <input type="text" class="form-control" name="card_holder" placeholder="Card Holder Name" />
                                        @error('card_holder')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-dark">Card Number *</label>
                                        <input type="text" class="form-control" name="card_number" placeholder="7589 6356 8547 9120" />
                                        @error('card_number')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark">Expire Month *</label>
                                        <select class="form-select" name="expire_month">
                                            <option value="january" selected="">January</option>
                                            <option value="february">February</option>
                                            <option value="march">March</option>
                                            <option value="april">April</option>
                                            <option value="may">May</option>
                                            <option value="june">June</option>
                                            <option value="july">July</option>
                                            <option value="august">August</option>
                                            <option value="September">September</option>
                                            <option value="october">October</option>
                                            <option value="november">November</option>
                                            <option value="december">December</option>
                                        </select>
                                        @error('expire_month')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark">Expire Year *</label>
                                        <select class="form-select" name="expire_year">
                                            <option value="2022" selected="">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select>
                                        @error('expire_year')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-dark">CVC *</label>
                                        <input type="text" class="form-control" name="cvc" placeholder="CVC*" />
                                        @error('cvc')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <input type="hidden" name="debit" value="Debit">
                                    <button type="submit" name="btn" value="3" class="btn btn-dark btm-md full-width">Pay {{$checkouts->first()->rel_to_room->price}} USD</button>
                                </div>
                            </div>
                        </div>
                      </div>

                </form>
            </div>

        </div>

    </div>
</section>
<!-- ======================= Product Detail End ======================== -->
@endsection
