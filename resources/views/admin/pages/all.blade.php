@extends('admin.pages.master')

@section('content')
  <div class="card">
    <!--begin::Header-->
    <div class="col-xl-6 col-lg-6">
      <div class="card">
        <div class="card-body">
          <div class="justify-content-between d-flex align-items-center mb-4">
            <h4 class="card-title">Carousel with Controls</h4>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
              @isset($carousels)
                @foreach ($sliders as $slider)
                  <div class="carousel-item">
                    <img class="d-block img-fluid mx-auto" src="assets/images/small/img-4.jpg" alt="First slide">
                  </div>
                @endforeach
              @endisset
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div><!-- end card body -->
      </div><!-- end card -->
    </div><!-- end col -->
    <!--end::Header-->
  </div>
@endsection
