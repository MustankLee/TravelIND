<nav class="fw-bold p-3 w-100 position-absolute d-flex justify-content-end align-items-center">
    <div class="p-2 me-3 rounded">
      <a href="{{route('display_welcome_page')}}" class="nav-item text-decoration-none text-light">Beranda</a>
    </div>
    <div class="p-2 me-3 rounded">
      <a href="{{route('tentang')}}" class="nav-item text-decoration-none text-light">Tentang</a>
    </div>
    {{-- <div class="p-2 me-3 rounded">
      <a href="{{route('liburan')}}" class="nav-item text-decoration-none text-light">Liburan</a>
    </div> --}}
    <div class="p-2 me-3 rounded">
      <div class="dropdown">
        <a class="dropdown-toggle text-light nav-link" role="button" data-bs-toggle="dropdown">
          <img class="rounded-circle me-2" src="{{asset('storage/avatars/' . Auth::user()->image)}}" style="width: 30px; height: 30px">
        </a>
        <ul class="mt-2 dropdown-menu bg-transparent glass-down text-center">
          <li class="py-3"><a class="text-decoration-none text-dark nav-item" href="{{route('profile')}}">Profile</a></li>
          <li class="py-3"><a class="text-decoration-none text-dark nav-item" href="{{route('logout_backend')}}">Logout</a></li>
        </ul>
      </div>
    </div>
</nav>
