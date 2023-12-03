<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Admin Dashboard">
  <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}">

  {{-- JQuery CDN --}}
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
  <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
  <!--end::Global Stylesheets Bundle-->

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
  data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
  data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"
  class="app-default">
  <!--begin::Theme mode setup on page load-->
  <script>
    var defaultThemeMode = "light";
    var themeMode;

    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
      } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
          themeMode = localStorage.getItem("data-bs-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }

      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
      }

      document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
  </script>
  <!--end::Theme mode setup on page load-->

  <!--begin::App-->
  <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

      <!--begin::Header-->
      <div id="kt_app_header" class="app-header" data-kt-sticky="true"
        data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
        data-kt-sticky-offset="{default: '200px', lg: '300px'}" data-kt-sticky-animation="false">

        <!--begin::Header container-->
        <div class="app-container container-fluid d-flex align-items-stretch flex-stack" id="kt_app_header_container">
          <!--begin::Sidebar toggle-->
          <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
            <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary w-35px h-35px me-1"
              id="kt_app_sidebar_mobile_toggle">
              <i class="ki-duotone ki-abstract-14 fs-2"><i class="path1"></i><i class="path2"></i></i>
            </div>

            <!--begin::Logo image-->
            <a href="{{ route('dashboard') }}">
              <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}" class="h-30px">
            </a>
            <!--end::Logo image-->
          </div>
          <!--end::Sidebar toggle-->
          <!--begin::Navbar-->
          <x-navbar />
          <!--end::Navbar-->
        </div>
        <!--end::Header container-->
      </div>
      <!--end::Header-->
      <!--begin::Wrapper-->
      <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <x-sidebar />

        <div class="main">
          {{ $slot }}
        </div>
      </div>
      <!--end:::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::App-->
  <!--end::Engage toolbar--><!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up"><i class="path1"></i><i class="path2"></i></i>
  </div>
  <!--end::Scrolltop-->

  <!--begin::Javascript-->
  <script>
    var hostUrl = "/open-html-pro/assets/";
  </script>

  <!--begin::Global Javascript Bundle(mandatory for all pages)-->
  <!-- include jquery css/js -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
  <!--end::Global Javascript Bundle-->
  <!--end::Custom Javascript-->

  {{-- TinyMCE Editor --}}
  <script src="https://cdn.tiny.cloud/1/mo8bvv5vkd78rtmx71jxpdyrijr124kqc3rrqbg0ors80254/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>

  <!--end::Javascript-->
  @stack('modals')

  @livewireScripts

  @yield('scripts')

  <script>
    @if ($errors->any())
      @foreach ($errors->all() as $error)
        toastr.error("{{ $error }}");
      @endforeach
    @endif
  </script>

  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>

</body>
<!--end::Body-->

</html>
