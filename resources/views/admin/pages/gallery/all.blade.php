@extends('admin.pages.master')

@section('content')
  <div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
      <!--begin::Title-->
      <div class="card-title">
        <h3 class="m-0 text-gray-800">Galleries</h3>
      </div>
      <!--end::Title-->

      <!--begin::Toolbar-->
      <div class="m-0 card-toolbar">
        <!--begin::Tab nav-->
        <ul class="border-transparent nav nav-stretch fs-5 fw-semibold nav-line-tabs" role="tablist">
          <li role="presentation">
            <a href="{{ route('gallery.create') }}" class="btn btn-primary btn-sm">Add new</a>
          </li>
        </ul>
        <!--end::Tab nav-->
      </div>
      <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Tab Content-->
    <div id="kt_referred_users_tab_content" class="tab-content">
      <!--begin::Tab panel-->
      <div id="kt_referrals_1" class="p-0 card-body tab-pane fade show active" role="tabpanel">
        <div class="table-responsive">
          <!--begin::Table-->
          <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
            <!--begin::Thead-->
            <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
              <tr>
                <th class="min-w-175px ps-9">S.N</th>
                <th class="min-w-150px">Image</th>
                <th class="min-w-150px">Name</th>
                <th class="min-w-125px">Published</th>
                <th class="text-center min-w-200px">Action</th>
              </tr>
            </thead>
            <!--end::Thead-->

            <!--begin::Tbody-->
            <tbody class="text-gray-600 fs-6 fw-semibold">
              @foreach ($galleries as $gallery)
                <tr>
                  <td class="ps-9">{{ $gallery->id }}</td>
                  <td class="ps-2"><img width="60px" height="60px" src="{{ asset($gallery->image) }}" alt="">
                  </td>
                  <td class="ps-2">{{ $gallery->name }}</td>
                  <td class="text-success">
                    <label class="switch">
                      <input type="checkbox" id="is_published" class="form-control" name="is_published"
                        value="{{ $gallery->is_published }}" {{ $gallery->is_published == 'on' ? 'checked' : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td class="gap-2 d-flex">
                    <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('gallery.destroy', $gallery->id) }}"
                        onclick="e.preventDefault();this.closest('form').submit();"
                        class="btn btn-sm btn-danger">Delete</a>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <!--end::Tbody-->
          </table>
          <!--end::Table-->
        </div>
      </div>
      <!--end::Tab panel-->
      <!--end::Tab panel-->
    </div>
    <!--end::Tab Content-->
  </div>
@endsection
