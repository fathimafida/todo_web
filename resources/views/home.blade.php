@extends('layouts.app')

@section('content')

<ul>
    @foreach ($todos as $t )
    <li>{{ $t->title }}</li>

    @endforeach
   </ul>
<h1>Welcome back</h1>

@endsection
