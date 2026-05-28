<form class="bg-body-tertiary shadow roundend p-5 my-5" wire:submit="store">
<div class="mb-3">
<label for="title" class="form-label">Titolo:</label>
<input type="text" class="form-control" @error('title') is-invalid @enderror id="title" wire:model="title">
@error('title')
<p class="fst-italic text-danger">{{ $message }}</p>
</div>
<div class="mb-3">
<label for="description" class="form-label">Descrizione:</label>
<textarea class="form-control" @error('description') is-invalid @enderror cols="30" rows="10" id="description" wire:model="description"></textarea>
@error('description')
<p class="fst-italic text-danger">{{ $message }}</p>
</div>
<div class="mb-3">
<label for="price" class="form-label">Prezzo:</label>
<input type="text" class="form-control" @error('price') is-invalid @enderror id="price" wire:model="price">
@error('price')
<p class="fst-italic text-danger">{{ $message }}</p>
</div>
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
</form>

