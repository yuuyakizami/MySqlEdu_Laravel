@extends('layout.app')

@section('title', "Show Tutorials")

@section('content')
<main class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
</main>






<div class="container">
    @if(session()->has('status-update'))
        <div class="alert alert-success mb-3" role="alert">{{session()->get('status-update')}}</div>
    @elseif (session()->has('status-create'))
        <div class="alert alert-success mb-3" role="alert">{{session()->get('status-create')}}</div>
    @elseif (session()->has('status-delete'))
    <div class="alert alert-warning mb-3" role="alert">{{session()->get('status-delete')}}</div>
    @else
    @endif
    @forelse($tutorial as $item)
    <div class="list-group">
        <div class="card mb-3 shadow-sm">
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
    @empty
    <div class="alert alert-success" role="alert">No Available Lesson</div>
    
@endforelse
</div>
@endsection
{{-- @endforelse --}}