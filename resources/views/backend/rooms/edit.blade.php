@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Room</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit Room</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('rooms.update', $rooms->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $rooms->id }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" class="form-control form-control-sm @error('category') is-invalid @enderror" value="{{ $rooms->category }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" value="{{ $rooms->title }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Subtitle</label>
                            <input type="text" name="subtitle" class="form-control form-control-sm @error('subtitle') is-invalid @enderror" value="{{ $rooms->subtitle }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Interior</label>
                            <input type="text" name="interior" class="form-control form-control-sm @error('interior') is-invalid @enderror" value="{{ $rooms->interior }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Room</label>
                            <input type="text" name="room_number" class="form-control form-control-sm @error('room_number') is-invalid @enderror" value="{{ $rooms->room_number }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Adult</label>
                            <input type="text" name="adult" class="form-control form-control-sm @error('adult') is-invalid @enderror" value="{{ $rooms->adult }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Childreen</label>
                            <input type="text" name="childreen" class="form-control form-control-sm @error('childreen') is-invalid @enderror" value="{{ $rooms->childreen }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control form-control-sm @error('price') is-invalid @enderror" value="{{ $rooms->price }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="3" id="summernote" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror">{{ $rooms->description }}</textarea>
                        </div>
                        <div class="col-12">
                            <div class="upload-category-thumbnail">
                                <label class="form-label" id="addCatThumb">Image</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="thumbUpload" value="{{ $rooms->image }}">
                            </div>
                            <div class="my-3">
                                <img width="100" id="blah" src="{{ asset('uploads/rooms') }}/{{ $rooms->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control form-control-sm" id="">
                                <option value="1" {{ $rooms->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $rooms->status == 2 ? 'selected' : '' }}>Deactive</option>
                            </select>
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

</div>
@endsection
