<section>
  <div class="container mt-5">
    <div class="text-bold text-secondary mb-5 text-center">
      <h1>Service</h1>
    </div>
    <div class="row mb-5">
      @foreach ($services as $service)
        <div class="col-md-4 col-sm-6 border-end px-3 py-5 text-center">
          <img class="img-fluid mb-3 rounded" width='40px' src="{{ asset($service->image) }}" alt="">
          <i class="bi bi-people text-danger"></i>
          <h6 class="mb-3 text-sm">{{ $service->name }}</h6>
          <p class="text-secondary text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem
            Ipsum
            has been the industry's standard dummy text</p>
        </div>
      @endforeach
    </div>
  </div>

</section>
