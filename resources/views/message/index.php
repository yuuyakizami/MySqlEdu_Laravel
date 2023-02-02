@extends('layout.app')

@section('title', "Show Tutorials")

@section('content')
<div class="container text-center bg-light">
<h1>Hello</h1>
<h1>{{ $message->name }}</h1>
<h1>{{ $message->message }}</h1>
</div>
@endsection