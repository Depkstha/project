@extends('admin.articles.master')

@section('content')
  <div>
    <form id="form" method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="title" class="form-label text-bold">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control rounded" name="title" placeholder="">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label text-bold">Description <span
                    class="text-danger">*</span></label>
                <div>
                  <textarea name="description" class="editor w-full rounded"></textarea>
                </div>
              </div>
              <div class="d-flex mb-3 justify-end">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="image" class="form-label tex-bold">Categories <span class="text-danger">*</span></label>
                <div class="d-flex flex-column">
                  @foreach ($categories as $category)
                    <div class="d-flex">
                      <input type="checkbox" class="form-control rounded" name="categories[]"
                        placeholder="Select category" value="{{ $category->id }}"><span
                        class="ml-3">{{ $category->name }}</span>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-5">
            <div class="card-body">
              <div class="mb-3">
                <label for="image" class="form-label text-bold">Image <span class="text-danger">*</span></label>
                <input type="file" class="form-control rounded" name="image" placeholder="">
              </div>

              <div class="mt-5">
                <div class="mb-3">
                  <label for="">Publish</label>
                </div>
                <label class="switch">
                  <input type="checkbox" class="is_published" name="is_published">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>

          <div class="card mt-5">
            <div class="card-body">
              <label for="tags" class="form-label text-bold">Tags <span class="text-danger">*</span></label>
              <input type="text" class="form-control rounded" name="tags" placeholder="ex: html,css,javascript">
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection

