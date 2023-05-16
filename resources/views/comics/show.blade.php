@extends('layouts.app')

@section('title')
    {{$comic->title}}
@endsection

@section('content')

  <div class="d-flex justify-content-center gap-2">

    <div>
      <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>

    <div class="card" style="width: 50rem;">
      <div class="card-body">
        <h5 class="card-title">{{$comic->title}}</h5>
        <p class="card-text">{{$comic->description}}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">${{$comic->price}}</li>
        <li class="list-group-item">{{$comic->series}}</li>
        <li class="list-group-item">{{$comic->sale_date}}</li>
        <li class="list-group-item">{{$comic->type}}</li>
      </ul>
    </div>

  </div>

  <div class="text-center mt-4">
    <a href="{{route('comics.index')}}" class="btn btn-secondary">Come back to list</a>
  </div>

    
  
@endsection