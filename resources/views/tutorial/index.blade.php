@extends('layout.app')

@section('title', "Show Tutorials")

@section('content')
<div class="container">
    @foreach($tutorial as $item)
    <div class="list-group">
        <div class="card mb-3 shadow-sm" >
            <div class="card-header">
                <h3 class="fw-bold">MySql Lesson #{{$item->id}}</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"> {{$item->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$item->title_description}}</h6>
                <p class="card-text">{{$item->title_lesson}}</p>
                <a class="btn btn-primary" href="{{route('show-tutorial', $item->id)}}">Go to Lesson</a>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection
{{-- @endforelse --}}