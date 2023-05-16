@extends('layouts.app')

@section('title', 'Comics list')

@section('content')

<a href="{{route('comics.create')}}" class="btn btn-dark mb-3">Register new comic</a>

<table class="table table-success table-striped table-bordered">
  <thead>
    <tr class="d-flex">
      <th class="col-1">ID</th>
      <th class="col-1">Title</th>
      <th class="col-2">Description</th>
      <th class="col-3">Image</th>
      <th class="col-1">Price</th>
      <th class="col-1">Series</th>
      <th class="col-1">Sale date</th>
      <th class="col-1">Type</th>
      <th class="col-1">Show</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ( $comics as $comic)
    <tr class="d-flex">
      <td class="col-1">{{$comic->id}}</td>
      <td class="col-1">{{$comic->title}}</td>
      <td class="col-2">{!!Str::limit($comic->description, 50)!!}</td>
      <td class="col-3">{{$comic->thumb}}</td>
      <td class="col-1">{{$comic->price}}</td>
      <td class="col-1">{{$comic->series}}</td>
      <td class="col-1">{{$comic->sale_date}}</td>
      <td class="col-1">{{$comic->type}}</td>
      <td class="col-1"><a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-light">Show</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection