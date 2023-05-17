@extends('layouts.app')

@section('title', 'Comics list')

@section('content')

<a href="{{route('comics.create')}}" class="btn btn-primary mb-3">Register new comic</a>

<table class="table table-success table-striped table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Price</th>
      <th>Series</th>
      <th>Sale date</th>
      <th>Type</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ( $comics as $comic)
    <tr>
      <td>{{$comic->id}}</td>
      <td>{{$comic->title}}</td>
      <td>${{$comic->price}}</td>
      <td>{{$comic->series}}</td>
      <td>{{$comic->sale_date}}</td>
      <td>{{$comic->type}}</td>
      <td class="d-flex gap-2">
        <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-success">Show</a>
        <a href="{{route('comics.edit', ['comic' => $comic->id])}}" class="btn btn-warning">Edit</a>
        <button class="btn btn-dark getAlert" ><i class="fa-regular fa-trash-can"></i></button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<div id="alert" class="alert alert-warning position-absolute top-50 start-50 translate-middle d-none">
  Are you sure you want to delete item?
  <form action="{{route('comics.destroy',['comic'=>$comic->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <div class="mt-3">
      <button type="submit" class="btn btn-danger me-2">Yes</button>
      <a id="removeAlert" class="btn btn-dark">No</a>
    </div>
  </form>
</div>

@endsection