<div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
  <div class="app-navbar-item d-flex align-items-center flex-lg-grow-1 me-lg-0 me-2">

    <!--begin::Search-->
    <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-350px" data-kt-search-keypress="true"
      data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu"
      data-kt-search-responsive="true" data-kt-menu-trigger="auto" data-kt-menu-permanent="true"
      data-kt-menu-placement="bottom-end">

      <!--begin::Tablet and mobile search toggle-->
      <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
        <div class="d-flex">
          <i class="ki-duotone ki-magnifier fs-1"><i class="path1"></i><i class="path2"></i></i>
        </div>
      </div>
      <!--end::Tablet and mobile search toggle-->

      <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
      <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-lg-0 mb-5"
        autocomplete="off">
        <!--begin::Hidden input(Added to disable form autocomplete)-->
        <input type="hidden">
        <!--end::Hidden input-->

        <!--begin::Icon-->
        <i
          class="ki-duotone ki-magnifier search-icon fs-2 position-absolute top-50 translate-middle-y ms-5 text-gray-500"><i
            class="path1"></i><i class="path2"></i></i> <!--end::Icon-->

        <!--begin::Input-->
        <input type="text" class="search-input form-control rounded-1 ps-13" name="search" value=""
          placeholder="Search..." data-kt-search-element="input">
        <!--end::Input-->

        <!--begin::Spinner-->
        <span class="search-spinner position-absolute top-50 translate-middle-y lh-0 d-none end-0 me-5"
          data-kt-search-element="spinner">
          <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
        </span>
        <!--end::Spinner-->

        <!--begin::Reset-->
        <span
          class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 translate-middle-y lh-0 d-none end-0 me-4"
          data-kt-search-element="clear">
          <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><i class="path1"></i><i class="path2"></i></i>
        </span>
        <!--end::Reset-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Search-->
  </div>
</div>
