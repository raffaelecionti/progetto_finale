<form class="bg-body-tertiary shadow roundend p-5 my-5" wire:submit="store">
<div class="mb-3">
<label for="title" class="form-label">Titolo:</label>
<input type="text" class="form-control" @error('title') is-invalid @enderror id="title" wire:model="title">
@error('title')
<p class="fst-italic text-danger">{{ $message }}</p>
@enderror
</div>
<div class="mb-3">
<label for="description" class="form-label">Descrizione:</label>
<textarea class="form-control" @error('description') is-invalid @enderror cols="30" rows="10" id="description" wire:model="description"></textarea>
@error('description')
<p class="fst-italic text-danger">{{ $message }}</p>
@enderror
</div>
<div class="mb-3">
<label for="price" class="form-label">Prezzo:</label>
<input type="text" class="form-control" @error('price') is-invalid @enderror id="price" wire:model="price">
@error('price')
<p class="fst-italic text-danger">{{ $message }}</p>
@enderror
</div>
@if (!empty($images))
<div class="row">
<div class="col-12">
    <p>Photo preview:</p>
    <div class="row border border-4 border-success rounded shadow py-4">
     @foreach($images as $key => $image)
     <div class="col d-flex flex-column align-items-center my-3">
        <div class="img-preview mx-auto shadow rounded" style="background-image: url({{ $image->temporaryUrl()}});">
        </div>
        <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{ $key }})">X</button>
     </div>
     @endforeach
    </div>
</div>
</div>
@endif
<div class="mb-3">
    <label for="category" class="form-label">Categoria:</label>
    <select name="" id="category" class="form-control" wire:model="category">
      <option label disabled>Seleziona una categoria</option>
      @foreach ($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
    @error('category')
    <p class="fst-italic text-danger">{{ $message }}</p>
    @enderror
</div>
@if (session ()->has('success'))
<div class="alert alert-success text-center">
    {{ session('success') }}
</div>
@endif
<div class="d-flex justify-content-center">
    <button class="btn btn-dark" type="submit">Crea</button>
</div>
</form>

