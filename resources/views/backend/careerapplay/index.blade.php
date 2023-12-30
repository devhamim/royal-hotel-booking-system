@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Career Applay</h2>
</div>
<div class="row g-4">

    <div class="col-xxl-12 col-md-12">
        <div class="panel">
            <div class="panel-header">
                <h5>All Career Applay</h5>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Code</th>
                            <th>Number</th>
                            <th>Country Name</th>
                            <th>Address 1</th>
                            <th>Address 2</th>
                            <th>City</th>
                            <th>Post Code</th>
                            <th>Street</th>
                            <th>Hear About</th>
                            <th>Desired Salary</th>
                            <th>Job Title</th>
                            <th>Start Date</th>
                            <th>Start End</th>
                            <th>edu Level</th>
                            <th>edu Institution</th>
                            <th>Gradu Year</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($careerapplays as $careerapplay)
                            <tr>
                                <td><span class="table-dscr">{{ $careerapplay->fast_name }} {{ $careerapplay->middle_name }} {{ $careerapplay->last_name }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->email }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->gender }}</span></td>
                                <td><span class="table-dscr">+{{$careerapplay->country_code}}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->number }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->country_name }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->address_one }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->address_two }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->city }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->post_code }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->street }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->hear_about_us }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->desired_salary }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->job_title }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->start_date }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->end_date }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->edu_level }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->edu_institution }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->gradu_year }}</span></td>
                                <td><span class="table-dscr">{{ $careerapplay->link }}</span></td>
                                <td>
                                    <div class="btn-box">
                                        <form action="{{ route('careerapplay.destroy',  $careerapplay->id) }}" method="POST">
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
