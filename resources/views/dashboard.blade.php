<x-app-layout>
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="py-3 app-container container-fluid d-flex flex-lg-column py-lg-6">

      <!--begin::Page title-->
      <div class="gap-1 page-title d-flex align-items-center me-3" data-kt-swapper="true"
        data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
        data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
        <!--begin::Title-->
        <span class="text-gray-900 fw-bolder fs-2x">
          Hello
        </span>
        <!--end::Title-->
      </div>
      <!--end::Page title-->

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

          <h1>Hello Admin</h1>

          <!--end::Statements-->
        </div>
        <!--end::Content container-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
  </div>
</x-app-layout>
