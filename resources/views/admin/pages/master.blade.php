<x-app-layout>
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-lg-column py-lg-6 py-3">

      <!--begin::Page title-->
      <div class="page-title d-flex align-items-center me-3 gap-1" data-kt-swapper="true"
        data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
        data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
        <!--begin::Title-->
        <span class="fw-bolder fs-2x text-gray-900">
          Pages
        </span>
        <!--end::Title-->
      </div>
      <!--end::Page title-->
      <!--begin::Navs-->
      <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x fs-5 fw-bold border-transparent">
        <!--begin::Nav item-->
        <li class="nav-item mt-2">
          <a class="nav-link text-active-primary me-lg-8 pt-lg-4 pb-lg-5 me-5 ms-0 pb-3 pt-2"
            href="{{ route('page.index') }}">
            All </a>
        </li>
        <!--end::Nav item-->
        <!--begin::Nav item-->
        <li class="nav-item mt-2">
          <a class="nav-link text-active-primary me-lg-8 pt-lg-4 pb-lg-5 me-5 ms-0 pb-3 pt-2" href="">
            Add page</a>
        </li>
        @foreach ($categories as $category)
          <li class="nav-item mt-2">
            <a class="nav-link text-active-primary me-lg-8 pt-lg-4 pb-lg-5 me-5 ms-0 pb-3 pt-2"
              href="{{ route($category->slug . '.index') }}">{{ $category->name }}</a>
          </li>
        @endforeach
        <!--end::Nav item-->
      </ul>
      <!--begin::Navs-->

      <!--begin::Separator-->
      <div class="app-toolbar-container-separator separator d-none d-lg-flex"></div>
      <!--end::Separator-->
    </div>
    <!--end::Toolbar container-->
  </div>
  <!--end::Toolbar-->

  <!--begin::Main-->
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

      <!--begin::Content-->
      <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
          <!--begin::Statements-->

          @yield('content')

          <!--end::Statements-->
        </div>
        <!--end::Content container-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
  </div>
</x-app-layout>
