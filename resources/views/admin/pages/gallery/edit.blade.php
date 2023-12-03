@extends('admin.pages.master')

@section('content')
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h4>Edit Gallery</h4>
      <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-primary">Back</a>
    </div>

    <div class="card-body">
      <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="form-group">
              <label for="name">Name <span class="text-danger">*</span></label>
              <input id="name" class="form-control rounded-md" type="text" name="name"
                value="{{ $gallery->name }}" required />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="image">Image <span class="text-danger">*</span></label>
              <input id="image" class="mb-5" type="file" class="form-control" name="image" />
              <img class="ml-3" src="{{ asset($gallery->image) }}" width="150">
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="">Publish</label>
            </div>
            <label class="switch">
              <input type="checkbox" class="is_published" name="is_published"
                {{ $gallery->is_published == 'on' ? 'checked' : '' }}>
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
