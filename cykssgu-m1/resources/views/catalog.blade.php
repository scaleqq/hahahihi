@extends('layouts.app')
@section('content')

<div class="group">
    @foreach ($a as $b)
    <div class="chel">
      <img class="logs" src="{{ $b->img}}">
      <h1>{{$b->name}}</h1>
      <h1>{{$b->price}}</h1>
    </div>
    @endforeach
</div>
@endsection
