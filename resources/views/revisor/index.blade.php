@if ($article_to_check->images->count())
@foreach ($article_to_check->images as $key=> $image)
<div class="col-6 col-md-4 mb-4">
<img src="{{ Storage::url($image->path)}}" alt="Immagine {{$key +1 }} dell'articolo' {{$article_to_check->title}}" class="img-fluid shadow rounded">
</div>
@endforeach
@else 
@for ($i = 0; $i < 6; $i++)
<div class="col-6 col-md-4 mb-4 text-center">
<img src="https://picsum.photos/300" alt="immagine segnaposto" class="img-fluid shadow rounded">
</div>
@endfor
@endif