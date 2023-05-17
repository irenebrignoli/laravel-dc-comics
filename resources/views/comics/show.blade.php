@extends('layouts.app')

@section('title')
    {{$comic->title}}
@endsection

@section('content')

  <div class="d-flex justify-content-center gap-2">

    <div>
      @if ($comic->thumb )
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
      @else
        <p>No image</p>
      @endif
    </div>

    <div class="card" style="width: 50rem;">
      <div class="card-body">
        <h5 class="card-title">{{$comic->title}}</h5>
        <p class="card-text">{{$comic->description}}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item fw-bold">Price: <span class="fw-normal">${{$comic->price}}</span></li>
        <li class="list-group-item fw-bold">Series: <span class="fw-normal">{{$comic->series}}</span></li>
        <li class="list-group-item fw-bold">Sale date: <span class="fw-normal">{{$comic->sale_date}}</span></li>
        <li class="list-group-item fw-bold">Type: <span class="fw-normal">{{$comic->type}}</span></li>
      </ul>
    </div>

  </div>

  <div class="text-center mt-4">
    <a href="{{route('comics.index')}}" class="btn btn-secondary">Come back to list</a>
  </div>

    
  
@endsection