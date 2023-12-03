<section>
  <div>
    <nav class="navbar navbar-expand-md bg-light bsb-navbar bsb-navbar-hover bsb-navbar-caret">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="Logo" width="135" height="44">
        </a>
        <button class="border-0 navbar-toggler" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#!">Home</a>
              </li>
              @foreach ($categories as $category)
                @if ($category->subcategories()->count() > 0)
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#!" id="categoryDropdown{{ $category->id }}"
                      role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ $category->name }}
                    </a>
                    <ul class="border-0 shadow dropdown-menu bsb-zoomIn"
                      aria-labelledby="categoryDropdown{{ $category->id }}">
                      @foreach ($category->subcategories as $subcategory)
                        <li><a class="dropdown-item" href="#">{{ $subcategory->name }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                @else
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#!">{{ $category->name }}</a>
                  </li>
                @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</section>
