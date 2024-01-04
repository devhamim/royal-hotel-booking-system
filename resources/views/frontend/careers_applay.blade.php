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
	<div class="careerlist">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 m-auto text-center">
                    <h2>Application Form {{$careerlists->post}} Position</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Application Form
                        </div>
                        <div class="card-body">
                            <form action="{{route('career.applay.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Uplode your Updated resume <span class="text-danger">*</span></label>
                                        <input type="file" name="resume" class="form-control" placeholder="Resume" required>
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Number <span class="text-danger">*</span></label>
                                        <div class="row mx-1">
                                            <div class="col-lg-3 p-0">
                                                <select name="country_code" id="" class="form-control py-2 rounded-0" required>
                                                        <option value="">-- Select Option --</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->phonecode }}">+{{ $country->phonecode }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-9 p-0">
                                                <input type="number" name="number" class="form-control m-0 py-2 rounded-0" placeholder="Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-3 col-lg-4">
                                        <label for="" class="form-label">Legal First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="fast_name" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="my-3 col-lg-4">
                                        <label for="" class="form-label">Middle Name</label>
                                        <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                                    </div>
                                    <div class="my-3 col-lg-4">
                                        <label for="" class="form-label">Legal Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>


                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Country <span class="text-danger">*</span></label>
                                        <select name="country_name" id="" class="form-control py-2 mt-2" required>
                                            <option value="">-- Select Option --</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                                        <input type="text" name="address_one" class="form-control" placeholder="Address Line 1" required>
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Address Line 2</label>
                                        <input type="text" name="address_two" class="form-control" placeholder="Address Line 2">
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" class="form-control" placeholder="City" required>
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Street</label>
                                        <input type="text" name="street" class="form-control" placeholder="Street">
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Postal Code </label>
                                        <input type="number" name="post_code" class="form-control" placeholder="Postal Code">
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Gender <span class="text-danger">*</span></label>
                                        <select name="gender" class="form-control" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="not_specified">Not specified</option>
                                        </select>
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">How did you hear about us?</label>
                                        <input type="text" name="hear_about_us" class="form-control" placeholder="How did you hear about us?">
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Desired Salary (minimum pay) </label>
                                        <input type="text" name="desired_salary" class="form-control" placeholder="Desired Salary">
                                    </div>
                                    <div class="my-3">
                                        <h3>Add Work History</h3>
                                    </div>
                                    <div class="my-3 col-lg-4">
                                        <label for="" class="form-label">Job Title</label>
                                        <input type="text" name="job_title" class="form-control" placeholder="Job Title">
                                    </div>
                                    <div class="my-3 col-lg-4">
                                        <label for="" class="form-label">Start Date</label>
                                        <input type="date" name="start_date" class="form-control mt-2" placeholder="Start Date">
                                    </div>
                                    <div class="my-3 col-lg-4">
                                        <label for="" class="form-label">End Date</label>
                                        <input type="date" name="end_date" class="form-control mt-2" placeholder="End Date">
                                    </div>
                                    <div class="my-3">
                                        <h3>Add Education</h3>
                                    </div>
                                    <div class="my-3 col-lg-4">
                                        <label for="" class="form-label">Education Level</label>
                                        <input type="text" name="edu_level" class="form-control" placeholder="Education Level">
                                    </div>
                                    <div class="my-3 col-lg-4">
                                        <label for="" class="form-label">Educational Institution</label>
                                        <input type="text" name="edu_institution" class="form-control" placeholder="Educational Institution">
                                    </div>
                                    <div class="my-3 col-lg-4">
                                        <label for="" class="form-label">Graduation Year</label>
                                        <input type="date" name="gradu_year" class="form-control mt-2" placeholder="Graduation Year">
                                    </div>
                                    <div class="my-3">
                                        <h3>SUPPORTING DOCUMENTS AND URLS</h3>
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">DROP COVER LETTER HERE</label>
                                        <input type="file" name="cover_later" class="form-control mt-2" placeholder="COVER LETTER">
                                    </div>
                                    <div class="my-3 col-lg-6">
                                        <label for="" class="form-label">Link</label>
                                        <input type="text" name="link" class="form-control" placeholder="Link">
                                    </div>
                                </div>
                                <input type="hidden" name="career_id" value="{{$careerlists->id}}">
                                <div class="my-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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

