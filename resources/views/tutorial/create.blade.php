@extends('layout.app')

@section('title', "Create Tutorial")

@section('content')
<form class="form-group container-sm" action="{{ route('tutorial.store')}}" method="POST">
@csrf
<div><label class="form-label" for="title">Title:</div>
<div><input class="form-control mb-3" type="text" name="title" value="{{ old('title', optional($tutorial ?? null)->title)}}"></div>
@error('title')
<div>{{ $message }}</div>
@enderror
<div><label class="form-label" for="video">Upload:</div>
<div><input class="form-control mb-3" type="text" name="video" value="{{ old('video', optional($tutorial ?? null)->video)}}"></div>
<div><label class="form-label" for="title_description">Description:</label></div>
<div><textarea class="form-control mb-3" name="title_description" value="{{ old('title_description', optional($tutorial ?? null)->title_description)}}"></textarea></div>
@error('title_description')
<div>{{ $message }}</div>
@enderror
@if($errors->any())
<div>
    <ul>
        @foreach($errors->all as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<button class="w-100 btn btn-primary text-center" type="submit" name="submit">Submit</button>
</form>
@endsection