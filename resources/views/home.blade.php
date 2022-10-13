@extends('layouts.app')

@section('content')

<div class="container">
    <div class="grid">
        @foreach ($movies as $movie)
            <div class="card">
                <h2>{{ $movie['title'] }}</h2>
                <i>Original title: <b>{{ $movie['original_title'] }}</b></i>
                <span>Data uscita: <b>{{ $movie['date'] }}</b></span>
                <span>voto: <b>{{ $movie['vote'] }}</b></span>
            </div>
        @endforeach
    </div>
</div>
    
@endsection