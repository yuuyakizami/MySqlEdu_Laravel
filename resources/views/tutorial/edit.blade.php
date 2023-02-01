@extends('layout.app')

@section('title', "Update Tutorial")

@section('content')
<form class="form-group container-sm" action="{{ route('update-tutorial', $tutorial->id)}}" method="POST">
@csrf
{{-- Method Directive --}}
@method('PUT') 

    <div class="mb-3">
        <div><label class="form-label fs-4" for="title">Title:</div>
        <input class="form-control" type="text" name="title" value="{{ old('title', optional($tutorial ?? null)->title)}}">
    </div>
    @error('title')
<div  class="alert alert-danger" role="alert">{{ $message }}</div>
@enderror
    {{-- <div><label class="form-label" for="video">Upload:</div>
    <div><input class="form-control mb-3" type="text" name="video" value="{{ old('video', optional($tutorial ?? null)->video)}}"></div> --}}
    <div class="mb-3">
        <label class="form-label fs-4" for="title_description">Description:</label>
        <textarea class="form-control" name="title_description" rows="2" cols="10">{{ old('title_description', optional($tutorial ?? null)->title_description)}}</textarea>
    </div>
    @error('title_description')
<div  class="alert alert-danger" role="alert">{{ $message }}</div>
@enderror
    <div class="mb-3">
        <label class="form-label fs-4" for="title_description">Lesson:</label>
        <textarea class="form-control" name="title_lesson" rows="10" cols="30">{{ old('title_lesson', optional($tutorial ?? null)->title_lesson)}}</textarea>
    </div>

    @error('title_lesson')
<div  class="alert alert-danger" role="alert">{{ $message }}</div>
@enderror
    @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all as $error)
            <div  class="alert alert-warning" role="alert">{{ $message }}</div>
            @endforeach
        </ul>
    </div>
    @endif
<button class="w-100 btn btn-primary text-center" type="submit" name="Update">Update</button>
</form>
@endsection