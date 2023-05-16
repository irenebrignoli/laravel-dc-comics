@extends('layouts.app')

@section('title', 'Comics list')

@section('content')

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
    </tr>
    @endforeach
  </tbody>
</table>

@endsection