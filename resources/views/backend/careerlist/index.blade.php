@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Career</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Career</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('careerlist.store') }}" method="POST">
                @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Department</label>
                            <input type="text" name="department" class="form-control form-control-sm @error('department') is-invalid @enderror" value="{{ old('department') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Position</label>
                            <input type="text" name="post" class="form-control form-control-sm @error('post') is-invalid @enderror" value="{{ old('post') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Vacancy</label>
                            <input type="number" name="vacancy" class="form-control form-control-sm @error('vacancy') is-invalid @enderror" value="{{ old('vacancy') }}">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <div class="btn-box">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xxl-8 col-md-7">
        <div class="panel">
            <div class="panel-header">
                <h5>All Career</h5>
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
                            <th>Department</th>
                            <th>Position</th>
                            <th>Vacancy</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($careerlists as $careerlist)
                            <tr>
                                <td><span class="table-dscr">{{ $careerlist->department }}</span></td>
                                <td><span class="table-dscr">{{ $careerlist->post }}</span></td>
                                <td><span class="table-dscr">{{ $careerlist->vacancy }}</span><br></td>
                                <td>
                                    <div class="btn-box">
                                        <form action="{{ route('careerlist.destroy',  $careerlist->id) }}" method="POST">
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
