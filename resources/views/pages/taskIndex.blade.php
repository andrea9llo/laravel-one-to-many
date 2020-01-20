@extends('layouts.base')

@section('content')

  <h1>Task: {{ $tasks -> count() }}</h1>

  <ul>
    @foreach ($tasks as $task)
      <li>{{ $task -> name  }}, {{ $task -> lastname}}: {{$task -> employee}}</li>

    @endforeach
  </ul>

@endsection
