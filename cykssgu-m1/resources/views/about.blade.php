@extends('layouts.app')
@section('content')
<div class="logo1">
                   <center> <img src="../resources/views/img/logo.jpg">
</div>
<div class="slogan"><center><h1>Добавьте веселья в свою жизнь</h1></div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($a as $b)
        @if ($loop -> first)
      <div class="carousel-item active">
      <style> .carousel-item{
    text-align: center;
    align-items: center;
}
.carousel-item > img{
    width: 60% !important;
    border-radius: 5px;
    margin-left: 20%;
    height: 600px; 
}
            </style>
        <img src="{{$b->img}}" class="d-block w-100" alt="{{$b->img}}">
      </div>
      @else
      <div class="carousel-item">
        <img src="{{$b->img}}" class="d-block w-100" alt="{{$b->img}}">
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
