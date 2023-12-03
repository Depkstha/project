<section class="bg-light">
  <div class="container">
    <div class="text-bold text-secondary mb-5 text-center">
      <h1>Gallery</h1>
    </div>

    <div class="row">
      @foreach ($galleries as $gallery)
        <div class="col-md-3 mb-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset($gallery->image) }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-title">{{ $gallery->name }}</p>
            </div>
          </div>
        </div>
      @endforeach
      @foreach ($articles as $article)
        @foreach ($article->categories as $category)
          @if ($category->slug === 'gallery')
            <div class="col-md-3 mb-3">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset($article->image) }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title">{{ $article->title }}</p>
                </div>
              </div>
            </div>
          @break
        @endif
      @endforeach
    @endforeach
  </div>
</div>
</section>
