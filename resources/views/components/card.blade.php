 <div class="card mx-auto card-w shadow text-center mb-3">
<img src="{{  $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300)   : 'https://picsum.photos/200'}}" class="card-img-top" alt="immagine dell'articolo {{ $article->title }}">
 <div class="card-body">
    <h4 class="card-title">{{ $article->title }}</h4>
    <h6 class="card-subtitle text-body-secondary">{{ $article->price }}$</h6>
    <div class="d-flex justify-content-evenly align-items-center mt-5 ">
     <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Dettagli</a>
     <a href="{{ route('byCategory', ['category' => $article->category_id]) }}" class="btn btn-outline-info">Categoria</a>
    </div>
 </div>
</div>