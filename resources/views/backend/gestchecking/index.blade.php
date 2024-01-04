@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Gest Checking</h2>
</div>
<div class="row g-4">

    <div class="col-xxl-12 col-md-12">
        <div class="panel">
            <div class="panel-header">
                <h5>All Gest Checking</h5>
                <div class="btn-box d-flex gap-2">
                    <div id="tableSearch"></div>
                    <div class="digi-dropdown dropdown">

                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-filter-option">
                    <div class="row justify-content-between g-3">
                        <div class="col-xxl-4 col-6 col-xs-12">

                        </div>
                        <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                            <div id="productTableLength"></div>
                        </div>
                    </div>
                </div>
                <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                    <thead>
                        <tr>
                            <th>Room</th>
                            <th>Checkin Date</th>
                            <th>Checkout Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Zip</th>
                            <th>Payment Method</th>
                            <th>Transaction Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gestcheckings as $gestchecking)
                            <tr>
                                <td><span class="table-dscr">{{ $gestchecking->room_id }}</span></td>
                                <td><span class="table-dscr">{{ $gestchecking->rel_to_gestroom->checkin }}</span></td>
                                <td><span class="table-dscr">{{ $gestchecking->rel_to_gestroom->checkout }}</span></td>
                                <td><span class="table-dscr">{{ $gestchecking->fast_name }} {{ $gestchecking->last_name }}</span></td>
                                <td><span class="table-dscr">{{ $gestchecking->email }}</span></td>
                                <td><span class="table-dscr">{{ $gestchecking->number }}</span></td>
                                <td><span class="table-dscr">{{ $gestchecking->address }}</span></td>
                                <td><span class="table-dscr">{{ $gestchecking->country }}</span></td>
                                <td><span class="table-dscr">{{ $gestchecking->city }}</span></td>
                                <td><span class="table-dscr">{{ $gestchecking->zip }}</span></td>
                                <td>
                                    <span class="table-dscr">
                                        @if ($gestchecking->paypal)
                                            Paypal
                                        @elseif ($gestchecking->stripe)
                                            Stripe
                                        @else
                                            Debit
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    <span class="table-dscr">
                                        @if ($gestchecking->paypal)
                                            {{$gestchecking->paypal_mail}} <br>
                                            {{$gestchecking->transaction_id}}
                                        @elseif ($gestchecking->stripe)
                                            {{$gestchecking->st_card_holder}} <br>
                                            {{$gestchecking->st_card_number}} <br>
                                            {{$gestchecking->st_expire_month}} <br>
                                            {{$gestchecking->st_expire_year}} <br>
                                            {{$gestchecking->st_cvc}}
                                        @else
                                            {{$gestchecking->card_holder}} <br>
                                            {{$gestchecking->card_number}} <br>
                                            {{$gestchecking->expire_month}} <br>
                                            {{$gestchecking->expire_year}} <br>
                                            {{$gestchecking->cvc}}
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-box">
                                        <form action="{{ route('gestchecking.destroy',  $gestchecking->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" border-0 mr-2">
                                                <i class="fa-light fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>
@endsection
