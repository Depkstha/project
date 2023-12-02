<x-app-layout>
  <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

      <!--begin::Content-->
      <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
          <!--begin::Statements-->
          <div class="card">
            <x-slot name="header">
              <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Profile') }}
              </h2>
            </x-slot>

            <div>
              <div class="mx-auto max-w-7xl py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                  @livewire('profile.update-profile-information-form')

                  <x-section-border />
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                  <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                  </div>

                  <x-section-border />
                @endif

                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                  <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                  </div>

                  <x-section-border />
                @endif

                <div class="mt-10 sm:mt-0">
                  @livewire('profile.logout-other-browser-sessions-form')
                </div>

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                  <x-section-border />

                  <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
