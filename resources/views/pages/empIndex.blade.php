@extends('layouts.base')

@section('content')

  <h1>Employee: {{ $emps -> count() }}</h1>

  <ul>
    @foreach ($emps as $emp)
      <li>{{ $emp -> name  }}: {{$emp -> tasks() -> count()}}</li>
      <li>{{ $emp -> description}}</li>

    @endforeach
  </ul>

@endsection
