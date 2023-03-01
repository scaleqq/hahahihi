@extends('layouts.app')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($a as $b)
        @if ($loop -> first)

      <div class="carousel-item active">
        <img src="{{b->img}}" class="d-block w-100" alt="{{b->img}}">
      </div>
      @else
      <div class="carousel-item">
        <img src="{{b->img}}" class="d-block w-100" alt="{{b->img}}">
      </div>
      <div class="carousel-item">
        <img src="{{b->img}}" class="d-block w-100" alt="{{b->img}}">
      </div>
      <div class="carousel-item">
        <img src="{{b->img}}" class="d-block w-100" alt="{{b->img}}">
      </div>
      <div class="carousel-item">
        <img src="{{b->img}}" class="d-block w-100" alt="{{b->img}}">
      </div>
      @endif

      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Следующий</span>
    </button>
  </div>
@endsection
