@extends('admin.pages.master')

@section('content')
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h4>Edit Slider</h4>
      <a href="{{ route('slider.index') }}" class="btn btn-sm btn-primary">Back</a>
    </div>

    <div class="card-body">
      <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="form-group">
              <label for="name">Name <span class="text-danger">*</span></label>
              <input id="name" class="form-control rounded-md" type="text" name="name"
                value="{{ $slider->name }}" required />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="form-group">
              <label for="description">Descrption <span class="text-danger">*</span></label>
              <textarea id="description" class="form-control" name="description" rows="4">{{ $slider->description }}</textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="image">Image <span class="text-danger">*</span></label>
              <input id="image" class="mb-5" type="file" class="form-control" name="image" />
              <img class="ml-3" src="{{ asset($slider->image) }}" width="150">
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="">Publish</label>
            </div>
            <label class="switch">
              <input type="checkbox" class="is_published" name="is_published"
                {{ $slider->is_published == 'on' ? 'checked' : '' }}>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 d-flex justify-end">
            <button type="submit" class="btn btn-primary">Update Record</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
