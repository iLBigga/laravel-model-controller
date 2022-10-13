@extends('layouts.app')

@section('content')

@foreach ($movies as $movie)
    <div class="card">
        <h3>{{ $movie['title'] }}</h3>
        <i>{{ $movie['original_title'] }}</i>
        <p>{{ $movie['date'] }}</p>
        <p>{{ $movie['vote'] }}</p>
    </div>
@endforeach
    
@endsection