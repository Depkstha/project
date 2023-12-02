@extends('admin.pages.master')

@section('content')
  <div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
      <!--begin::Title-->
      <div class="card-title">
        <h3 class="m-0 text-gray-800">Sliders</h3>
      </div>
      <!--end::Title-->

      <!--begin::Toolbar-->
      <div class="card-toolbar m-0">
        <!--begin::Tab nav-->
        <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent" role="tablist">
          <li role="presentation">
            <a href="{{ route('slider.create') }}" class="btn btn-primary btn-sm">Add new</a>
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
      <div id="kt_referrals_1" class="card-body tab-pane fade show active p-0" role="tabpanel">
        <div class="table-responsive">
          <!--begin::Table-->
          <table class="table-row-bordered table-row-solid gy-4 gs-9 table align-middle">
            <!--begin::Thead-->
            <thead class="fs-5 fw-semibold bg-lighten border-gray-200">
              <tr>
                <th class="min-w-175px ps-9">S.N</th>
                <th class="min-w-150px">Image</th>
                <th class="min-w-150px">Name</th>
                <th class="min-w-125px">Published</th>
                <th class="min-w-200px text-center">Action</th>
              </tr>
            </thead>
            <!--end::Thead-->

            <!--begin::Tbody-->
            <tbody class="fs-6 fw-semibold text-gray-600">
              @foreach ($sliders as $slider)
                <tr>
                  <td class="ps-9">{{ $slider->id }}</td>
                  <td class="ps-2"><img width="60px" height="60px" src="{{ asset($slider->image) }}" alt="">
                  </td>
                  <td class="ps-2">{{ $slider->name }}</td>
                  <td class="text-success">
                    <label class="switch">
                      <input type="checkbox" id="is_published" class="form-control" name="is_published"
                        value="{{ $slider->is_published }}" {{ $slider->is_published == 'on' ? 'checked' : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td class="d-flex gap-2">
                    <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('slider.destroy', $slider->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('slider.destroy', $slider->id) }}"
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
