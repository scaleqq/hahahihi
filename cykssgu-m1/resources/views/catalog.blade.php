@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="../resources/views/css/style.css">
    <div class="container-fluid">
        @foreach ($a as $b)
            <div class="card" style="width: 18rem;">
                <img src="{{ $b->img }}" class="card-img-top" alt="#">
                <div class="card-body">
                    <h5 class="card-title">{{ $b->name }}</h5>
                    <p class="card-text">dfdfs</p>
                    <a href="#" class="btn btn-primary"> {{ $b->price }} </a>
                </div>
            </div>
    </div>
    @endforeach
@endsection
