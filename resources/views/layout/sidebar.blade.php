{{-- <main class="d-flex flex-nowrap"> --}}
    <div class="d-flex flex-column flex-shrink-0 p-2 text-bg-dark" style="width: 200px; height:600px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4 text-white">MySql Lessons</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        @forelse($links as $link)
        <li class="nav-item">
          <a href="{{ route('tutorial.show', $link->id)}}" class="nav-link">
            <p class="text-white bg-dark">{{$link->title}}</p>
          </a>
        </li>
        @empty
          <p class="text-white bg-dark">No available lesson</p>
        @endforelse
      </ul>
    </div>
  {{-- </main> --}}
