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
        <form class="formDelete" action="{{route('comics.destroy',['comic'=>$comic->id])}}" method="POST">
          @csrf
          @method('DELETE')
          <div >
            <button type="submit" class="btn btn-dark" data-bs-toggle="modal" ><i class="fa-regular fa-trash-can"></i></button>
          </div>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<div id="alertId" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete item?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Yes, delete</button>
      </div>
    </div>
  </div>
</div>




@endsection