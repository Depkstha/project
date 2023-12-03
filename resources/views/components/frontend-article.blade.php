<section class="mt-5">
  <div class="container">
    <div class="text-bold text-secondary mb-5 text-center">
      <h1>Article</h1>
    </div>

    @foreach ($articles as $key => $article)
      <div class="row justify-content-center align-items-center mb-5">
        <div class="col-md-5">
          <img height="400px" class="img-fluid rounded" loading="lazy" src="{{ asset($article->image) }}"
            alt="Article Image" />
        </div>
        <div class="col-md-7">
          <h3>{{ $article->title }}</h3>
          <p>{!! Str::words($article->description, 65, '...') !!}</p>
          <a class="btn btn-primary btn-sm" href="#">Read More</a>
        </div>
      </div>
    @endforeach
  </div>
</section>
