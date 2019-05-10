@extends('layout')

@section('title')

@section('content')
    <h1>My first website</h1>

    <!-- Rending data from the router -->
    <ul>
        @foreach($tasks as $tsk)
            <li><?= $tsk; ?></li>
        @endforeach
    </ul>

@endsection