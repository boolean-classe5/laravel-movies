@extends('layouts.app')

@section('content')

  <div class="container mt-5">
    <h1>Tutti i film</h1>
    <a href="{{ route('movies.create') }}" class="btn btn-primary">Inserisci un nuovo film</a>
    <ul>
      @foreach ($movies as $movie)
        <li>
          Titolo: {{ $movie->title}} - Anno: {{ $movie->release }} - Genere: {{ $movie->genre ? $movie->genre->name : 'n.a.' }}
        </li>
      @endforeach
    </ul>
  </div>
@endsection
