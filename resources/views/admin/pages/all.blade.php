@extends('admin.pages.master')

@section('content')
  <div class="row">
    <!--begin::Header-->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <div class="justify-content-between d-flex align-items-center mb-4">
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
          <div class="justify-content-between d-flex align-items-center mb-4">
            <h4 class="card-title">Gallery Preview</h4>
          </div>
          @isset($galleries)
            @foreach ($galleries as $gallery)
              <div class="row">
                <div class="col-md-2 mb-2">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset($gallery->image) }}" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-title">{{ $gallery->name }}</p>
                    </div>
                  </div>
                </div>
            @endforeach
          @endisset
        </div>
        <!-- end row -->
      </div>
    </div>
  </div>
@endsection
