      <!--begin::Sidebar-->
      <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="300px"
        data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


        <!--begin::Header-->
        <div class="app-sidebar-header flex-column mx-10 pt-8" id="kt_app_sidebar_header">
          <!--begin::Brand-->
          <div class="d-flex flex-stack d-none d-lg-flex mb-13">
            <!--begin::Logo-->
            <a href="index.htm.html?page=index" class="app-sidebar-logo">
              <img alt="Logo" src="{{ asset('assets/media/logos/default.svg') }}"
                class="h-30px app-sidebar-logo-default">
            </a>
            <!--end::Logo-->

            <!--begin::Chat-->
            <div
              class="d-flex align-items-center <br /> <b>Warning</b>: Undefined variable $itemClass in <b>/var/www/preview.keenthemes.com/kt-products/open/releases/2023-03-01-140756-pro/themes/open/html/dist/view/layout/partials/sidebar/_header.php</b> on line <b>18</b><br />">
              <!--begin::Menu wrapper-->
              <div class="btn btn-icon w-15px h-15px w-lg-20px h-lg-20px btn-color-success position-relative"
                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                data-kt-menu-placement="bottom-start">
                <i class="fonticon-stats fs-2"></i>

                <span
                  class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle animation-blink mb-3 ms-7">
                </span>
              </div>
              <!--end::Menu wrapper-->
            </div>
            <!--end::Chat-->
          </div>
          <!--end::Brand-->

          <!--begin::User-->
          <div class="d-flex btn btn-outline btn-custom align-items-center w-200 mb-2"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-start">
            <!--begin::User-->
            <div class="symbol symbol-35px symbol-lg-40px ms-n2 me-3 cursor-pointer">
              <img class="" src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="user">
            </div>
            <!--end::User-->

            <!--begin:Info-->
            <div class="d-flex flex-column align-items-start flex-grow-1">
              <a href="#" class="btn-title fs-6 fw-bold">Admin</a>
            </div>
            <!--end:Info-->

            <i class="ki-duotone ki-icons/duotune/general/gen033.svg btn-icon fs-2 me-n2"></i>
          </div>


          <!--begin::User account menu-->
          <div
            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px py-4"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
              <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                  <img alt="Logo" src="{{ asset('assets/media/avatars/300-3.jpg') }}">
                </div>
                <!--end::Avatar-->

                <!--begin::Username-->
                <div class="d-flex flex-column">
                  <div class="fw-bold d-flex align-items-center fs-5">
                    Admin
                  </div>
                </div>
                <!--end::Username-->
              </div>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->
            <div class="menu-item px-5">
              <a href="{{ url('/user/profile') }}" class="menu-link px-5">
                My Profile
              </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
              data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
              <a href="#" class="menu-link px-5">
                <span class="menu-title position-relative">
                  Mode

                  <span class="position-absolute translate-middle-y top-50 end-0 ms-5">
                    <i class="ki-duotone ki-night-day theme-light-show fs-2"><i class="path1"></i><i
                        class="path2"></i><i class="path3"></i><i class="path4"></i><i class="path5"></i><i
                        class="path6"></i><i class="path7"></i><i class="path8"></i><i class="path9"></i><i
                        class="path10"></i></i> <i class="ki-duotone ki-moon theme-dark-show fs-2"><i
                        class="path1"></i><i class="path2"></i></i> </span>
                </span>
              </a>

              <!--begin::Menu-->
              <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold fs-base w-150px py-4"
                data-kt-menu="true" data-kt-element="theme-mode-menu">
                <!--begin::Menu item-->
                <div class="menu-item my-0 px-3">
                  <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                    <span class="menu-icon" data-kt-element="icon">
                      <i class="ki-duotone ki-night-day fs-2"><i class="path1"></i><i class="path2"></i><i
                          class="path3"></i><i class="path4"></i><i class="path5"></i><i class="path6"></i><i
                          class="path7"></i><i class="path8"></i><i class="path9"></i><i class="path10"></i></i>
                    </span>
                    <span class="menu-title">
                      Light
                    </span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item my-0 px-3">
                  <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                    <span class="menu-icon" data-kt-element="icon">
                      <i class="ki-duotone ki-moon fs-2"><i class="path1"></i><i class="path2"></i></i> </span>
                    <span class="menu-title">
                      Dark
                    </span>
                  </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item my-0 px-3">
                  <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                    <span class="menu-icon" data-kt-element="icon">
                      <i class="ki-duotone ki-screen fs-2"><i class="path1"></i><i class="path2"></i><i
                          class="path3"></i><i class="path4"></i></i>
                    </span>
                    <span class="menu-title">
                      System
                    </span>
                  </a>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu-->

            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-5">
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"
                  class="menu-link px-5">
                  Log Out
                </a>
              </form>
            </div>
            <!--end::Menu item-->
          </div>
          <!--end::User account menu-->

          <!--end::User-->
        </div>
        <!--end::Header-->

        <!--begin::Navs-->
        <div class="app-sidebar-navs flex-column-fluid pb-6" id="kt_app_sidebar_navs">
          <div id="kt_app_sidebar_navs_wrappers" class="hover-scroll-y my-2" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs"
            data-kt-scroll-offset="5px">

            <!--begin::Sidebar menu-->
            <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
              class="menu menu-column menu-rounded menu-sub-indention menu-active-bg mb-7">

              <!--begin:Menu item-->
              <div class="menu-item pt-5"><!--begin:Menu content-->
                <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-5">Dashboards</span>
                </div>
                <!--end:Menu content-->
              </div><!--end:Menu item--><!--begin:Menu item-->
              <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                  href="{{ route('article.index') }}"><span class="menu-icon"><i
                      class="ki-duotone ki-element-11 fs-1"><i class="path1"></i><i class="path2"></i><i
                        class="path3"></i><i class="path4"></i></i></span><span
                    class="menu-title">Article</span></a><!--end:Menu link--></div>
              <!--end:Menu item--><!--begin:Menu item-->
              <div class="menu-item pt-7"><!--begin:Menu content-->
                <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-5">Pages</span></div>
                <!--end:Menu content-->
              </div><!--end:Menu item--><!--begin:Menu item-->
              <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                      class="ki-duotone ki-colors-square fs-1"><i class="path1"></i><i class="path2"></i><i
                        class="path3"></i><i class="path4"></i></i></span><span
                    class="menu-title">Pages</span><span
                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                  <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                      href="{{ route('page.index') }}"><span class="menu-bullet"><span
                          class="bullet bullet-dot"></span></span><span class="menu-title">All
                        pages</span></a><!--end:Menu link--></div>
                  <!--end:Menu item--><!--begin:Menu item-->
                  <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                      href="index.htm-8.html?page=pages/user-profile/projects"><span class="menu-bullet"><span
                          class="bullet bullet-dot"></span></span><span class="menu-title">Add
                        pages</span></a><!--end:Menu link--></div>
                </div><!--end:Menu sub-->
              </div><!--end:Menu item-->
            </div>
            <!--end::Sidebar menu-->
          </div>
        </div>
        <!--end::Navs-->

      </div>
      <!--end::Sidebar-->
