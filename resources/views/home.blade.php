@extends('layouts.app')

@section('main-content')
    <h1 class="text-center mb-5">Movies List</h1>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @forelse ($movies as $movie)
            <div class="col-2 m-1 text-center text-dark p-4 border bg-light bg-gradient bg-opacity-75 border-dark rounded-3">
                <h4 class="mb-4">{{$movie->title}}</h4>
                <h6 class="mb-3">{{$movie->original_title}}</h6>
                <p><span><strong>Lang: </strong></span>{{$movie->nationality}}</p>
                <p><span><strong>Date: </strong></span>{{$movie->date}}</p>
                <h6><span><strong>Vote: </strong></span>{{$movie->vote}}</h6>
            </div>
            @empty
                <p>Nessun film presente</p>
            @endforelse
        </div>
    </div>

@endsection