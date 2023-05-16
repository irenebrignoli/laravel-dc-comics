@extends('layouts.app')

@section('title', 'New comic')

@section('content')

    <form method="POST" action="{{route('comics.store')}}" class="w-50 m-auto">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image url</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series:</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date:</label>
            <textarea class="form-control" id="sale_date" name="sale_date"></textarea>
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type:</label>
          <textarea class="form-control" id="type" name="type"></textarea>
      </div>

        <button type="submit" class="btn btn-primary">Save data</button>
    </form>

@endsection