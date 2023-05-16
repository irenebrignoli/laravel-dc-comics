@extends('layouts.app')

@section('title', 'Comics list')

@section('content')

<a href="{{route('comics.create')}}" class="btn btn-dark mb-3">Register new comic</a>

<table class="table table-success table-striped table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Image</th>
      <th>Price</th>
      <th>Series</th>
      <th>Sale date</th>
      <th>Type</th>
      <th>Show</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ( $comics as $comic)
    <tr>
      <td>{{$comic->id}}</td>
      <td>{{$comic->title}}</td>
      <td>{!!Str::limit($comic->description, 50)!!}</td>
      <td>{{$comic->thumb}}</td>
      <td>{{$comic->price}}</td>
      <td>{{$comic->series}}</td>
      <td>{{$comic->sale_date}}</td>
      <td>{{$comic->type}}</td>
      <td><a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-light">Show</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection