@extends('admin.articles.master')

@section('content')
  <div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
      <!--begin::Title-->
      <div class="card-title">
        <h3 class="m-0 text-gray-800">Articles</h3>
      </div>
      <!--end::Title-->

      <!--begin::Toolbar-->
      <div class="card-toolbar m-0">
        <!--begin::Tab nav-->
        <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent" role="tablist">
          <li class="nav-item" role="presentation">
            <a id="kt_referrals_year_tab" class="nav-link text-active-gray-800 active" data-bs-toggle="tab" role="tab"
              href="#kt_referrals_1">
              All
            </a>
          </li>

          <li class="nav-item" role="presentation">
            <a id="kt_referrals_2019_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab"
              href="#kt_referrals_2">
              Trashed </a>
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
                <th class="min-w-150px">Title</th>
                <th class="min-w-150px">Category</th>
                <th class="min-w-125px">Published</th>
                <th class="min-w-200px text-center">Action</th>
              </tr>
            </thead>
            <!--end::Thead-->

            <!--begin::Tbody-->
            <tbody class="fs-6 fw-semibold text-gray-600">
              @foreach ($articles as $article)
                <tr>
                  <td class="ps-9">{{ $article->id }}</td>
                  <td class="ps-2"><img width="60px" height="60px" src="{{ asset($article->image) }}" alt="">
                  </td>
                  <td class="ps-2">{{ $article->title }}</td>
                  <td class="ps-2">
                    @foreach ($article->categories as $category)
                      <span class="badge bg-primary text-white">{{ $category->name }}</span>
                    @endforeach
                  </td>
                  <td class="text-success">
                    <label class="switch">
                      <input type="checkbox" id="is_published" class="form-control" name="is_published"
                        value="{{ $article->is_published }}" {{ $article->is_published == 'on' ? 'checked' : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td class="d-flex gap-2">
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('article.destroy', $article->id) }}"
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
      <!--begin::Tab panel-->
      <div id="kt_referrals_2" class="card-body tab-pane fade p-0" role="tabpanel">
        <div class="table-responsive">
          <!--begin::Table-->
          <table class="table-row-bordered table-row-solid gy-4 gs-9 table align-middle">
            <!--begin::Thead-->
            <thead class="fs-5 fw-semibold bg-lighten border-gray-200">
              <tr>
                <th class="min-w-175px ps-9">S.N</th>
                <th class="min-w-150px">Image</th>
                <th class="min-w-150px">Title</th>
                <th class="min-w-150px">Category</th>
                <th class="min-w-125px">Published</th>
                <th class="min-w-200px text-center">Action</th>
              </tr>
            </thead>
            <!--end::Thead-->

            <!--begin::Tbody-->
            <tbody class="fs-6 fw-semibold text-gray-600">
              @foreach ($trashedArticles as $article)
                <tr>
                  <td class="ps-9">{{ $article->id }}</td>
                  <td class="ps-2"><img width="60px" height="60px" src="{{ asset($article->image) }}"
                      alt="">
                  </td>
                  <td class="ps-2">{{ $article->title }}</td>
                  <td class="ps-2">
                    @foreach ($article->categories as $category)
                      <span class="badge bg-primary text-white">{{ $category->name }}</span>
                    @endforeach
                  </td>
                  <td class="text-success">
                    <label class="switch">
                      <input type="checkbox" id="is_published" class="form-control" name="is_published"
                        value="{{ $article->is_published }}" {{ $article->is_published == 'on' ? 'checked' : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td class="d-flex gap-2">
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('article.destroy', $article->id) }}"
                        onclick="e.preventDefault();this.closest('form').submit();"
                        class="btn btn-sm btn-danger">Delete</a>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            </tbody>
            <!--end::Tbody-->
          </table>
          <!--end::Table-->
        </div>
      </div>
      <!--end::Tab panel-->
    </div>
    <!--end::Tab Content-->
  </div>
@endsection
