@extends('template')

@section('title', '| Profile')

@section('content')

    <div class="profile-height d-flex align-items-center">
        <div class="nav-clone"></div>
        <div class="w-100 d-flex justify-content-center">
            <div class="py-4 glass-white w-50 d-flex flex-column ustify-content-center align-items-center">
                <img class="d-flex justify-content-center rounded-circle" src="{{asset('storage/avatars/' . Auth::user()->image)}}" style="width:180px; height:180px">
                <div class="mt-4 fs-2 custom-txt fw-bold">
                    {{Auth::user()->name}}
                </div>
                <div class="fw-bold">
                    {{Auth::user()->email}}
                </div>
                <div class="py-4 w-100 d-flex justify-content-center">
                    <a href="{{route('update_profile')}}" class="ctm text-decoration-none text-center w-75 py-2 custom-bg border-0 rounded text-light fw-bold">
                        Ubah
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection