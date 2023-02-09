@extends('layouts.app')

@section('main-content')
    <h1 class="text-center mb-5">Movies List</h1>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @forelse ($movies as $movie)
            <div class="col-2 m-1 text-center text-dark p-4 border bg-light bg-gradient bg-opacity-75 border-dark rounded-3">
                <h4>{{$movie->title}}</h4>
                <h5>{{$movie->original_title}}</h5>
                <p>{{$movie->nationality}}</p>
                <span>{{$movie->date}}</span>
                <h6>{{$movie->vote}}</h6>
            </div>
            @empty
                <p>Nessun film presente</p>
            @endforelse
        </div>
    </div>

@endsection