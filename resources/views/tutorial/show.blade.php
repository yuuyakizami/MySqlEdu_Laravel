@extends('layout.app')

@section('title', "Show Tutorials")

@section('content')
<div class="container">
    
    <h1>{{$tutorial->title}}</h1>
    <p>{{$tutorial->title_description}}</p>
    <p>{{$tutorial->title_lesson}}</p>
    <div class="btn-group btn-group-lg d-flex justify-content-end mb-3" role="group">
        <form class="mx-3" action="{{route('delete-tutorial', $tutorial->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" name="Delete">Delete</button>
        </form>
        <form action="{{route('edit-tutorial', $tutorial->id)}}" method="GET">
            @csrf
        <button class="btn btn-primary" name="Edit">Edit</button>
    </form>
</div>

</div>
@endsection
