@extends('admin.pages.master')

@section('content')
  <div class="row">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h4>Create Service</h4>
      <a href="{{ route('services.index') }}" class="btn btn-sm btn-primary">Back</a>
    </div>
    <div class="card-body">
      <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="form-group">
              <label for="name">Name <span class="text-danger">*</span></label>
              <input id="name" class="form-control rounded-md" type="text" name="name" required />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="form-group">
              <label for="description">Description <span class="text-danger">*</span></label>
              <textarea id="description" class="form-control rounded-sm" type="text" name="description"></textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="form-group">
              <label for="image">Image <span class="text-danger">*</span></label>
              <input id="image" type="file" class="form-control" name="image" required />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="">Publish</label>
            </div>
            <label class="switch">
              <input type="checkbox" class="is_published" name="is_published">
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 d-flex justify-end">
            <button type="submit" class="btn btn-primary">Save Record</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
