@extends('admin.pages.master')

@section('content')
  <div class="row">
    <!--begin::Header-->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="mb-4 justify-content-between d-flex align-items-center">
            <h4 class="card-title">Carousel with Controls</h4>
          </div>
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              @isset($sliders)
                @foreach ($sliders as $slider)
                  <div class="carousel-item active">
                    <img src="{{ asset($slider->image) }}" class="d-block w-100" alt="slide">
                  </div>
                @endforeach
              @endisset
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div><!-- end card body -->
      </div><!-- end card -->
    </div><!-- end col -->
    <!--end::Header-->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="mb-4 justify-content-between d-flex align-items-center">
            <h4 class="card-title">Gallery Preview</h4>
          </div>
          <div class="row gallery-wrapper">
            @isset($galleries)
              @foreach ($galleries as $gallery)
                <div class="element-item col-xl-4 col-sm-6 project designing development">
                  <div class="gallery-box card">
                    <div class="gallery-container">
                      <a class="image-popup" href="{{ asset($gallery->image) }}" title="">
                        <img class="mx-auto gallery-img img-fluid" src="{{ asset($gallery->image) }}" alt="" />
                        <div class="gallery-overlay"></div>
                      </a>
                    </div>
                  </div>

                  <div class="box-content p-3">
                    <h5 class="title">{{ $gallery->name }}</h5>
                    <p class="post">by <a href="" class="text-body">Scott Finch</a></p>
                  </div>
              @endforeach
            @endisset
            <!-- end row -->
          </div>
        </div>
        <!-- end row -->
      </div>
    </div>
  </div>
@endsection
