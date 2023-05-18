@extends('layouts.app')

@section('title', 'Modify comic')

@section('content')

<form method="POST" action="{{route('comics.update',['comic'=>$comic->id])}}" class="w-50 m-auto">

  @csrf
  @method('PUT')

  <div class="mb-3">
      <label for="title" class="form-label">Title:</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" 
      value="{{old('title')?old('title'):$comic->title}}">

      @error('title')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="description" class="form-label">Description:</label>
      <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="optional...">
        {{old('description')?old('description'):$comic->description}}
       </textarea>

      @error('description')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="thumb" class="form-label">Image url</label>
      <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="optional..." 
      value="{{old('thumb')?old('thumb'):$comic->thumb}}">

      @error('thumb')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="price" class="form-label">Price:</label>
      <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
      value="{{old('price')?old('price'):$comic->price}}">

      @error('price')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="series" class="form-label">Series:</label>
      <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
      value="{{old('series')?old('series'):$comic->series}}">

      @error('series')
         <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date:</label>
      <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"
      value="{{old('sale_date')?old('sale_date'):$comic->sale_date}}">

      @error('sale_date')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">Type:</label>
    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
    value="{{old('type')?old('type'):$comic->type}}">

    @error('type')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
</div>

  <button type="submit" class="btn btn-primary">Save data</button>
</form>

@endsection