@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Rooms</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Rooms</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" class="form-control form-control-sm @error('category') is-invalid @enderror" value="{{ old('category') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" value="{{ old('title') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Sub Title</label>
                            <input type="text" name="subtitle" class="form-control form-control-sm @error('subtitle') is-invalid @enderror" value="{{ old('subtitle') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Interior</label>
                            <input type="text" name="interior" class="form-control form-control-sm @error('interior') is-invalid @enderror" value="{{ old('interior') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Room Number</label>
                            <input type="number" name="room_number" class="form-control form-control-sm @error('room_number') is-invalid @enderror" value="{{ old('room_number') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Adult</label>
                            <input type="number" name="adult" class="form-control form-control-sm @error('adult') is-invalid @enderror" value="{{ old('adult') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Childreen</label>
                            <input type="number" name="childreen" class="form-control form-control-sm" value="{{ old('childreen') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control form-control-sm @error('price') is-invalid @enderror" value="{{ old('price') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm @error('image') is-invalid @enderror" value="{{ old('image') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="3" id="summernote" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
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
                <h5>All Rooms</h5>
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
                            <th class="no-sort">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="markAllProduct">
                                </div>
                            </th>
                            <th>Subtitle</th>
                            <th>Category</th>
                            <th>Interior</th>
                            <th>Room Number</th>
                            <th>Adult</th>
                            <th>Childreen</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr>
                                <td>
                                    <div class="table-category-card">
                                        <div class="part-icon">
                                            <span><img src="{{ asset('uploads/rooms') }}/{{ $room->image }}" alt=""></span>
                                        </div>
                                        <div class="part-txt" style="width: 120px">
                                            <span class="category-name">{{ $room->title }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="table-dscr">{{ $room->subtitle }}</span></td>
                                <td><span class="table-dscr">{{ $room->category }}</span></td>
                                <td><span class="table-dscr">{{ $room->interior }}</span></td>
                                <td><span class="table-dscr">{{ $room->room_number }}</span></td>
                                <td><span class="table-dscr">{{ $room->adult }}</span></td>
                                <td><span class="table-dscr">{{ $room->childreen }}</span></td>
                                <td><span class="table-dscr">{{ $room->price }}</span></td>
                                <td><span class="table-dscr">{{ Str::limit($room->description, 20,'...') }}</span></td>
                                <td>
                                    @if ($room->status == 1)
                                        <span class="table-dscr text-success">Active</span>
                                    @else
                                        <span class="table-dscr text-warning">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-box">
                                        <a href="{{ route('rooms.edit', $room->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                                        <form action="{{ route('rooms.destroy',  $room->id) }}" method="POST">
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
