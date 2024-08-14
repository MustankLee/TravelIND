@extends('template')

@section('title', '| Login')

@section('content')
    <div class="nav-clone bg-dark">

    </div>
    <div class="custom-bg w-100">
        <div class="w-50 p-in">
            <div class="fs-2 fw-bold">
                Waktunya berwisata
            </div>
            <div>
                Masukkan nama dan kata sandi pengguna agar 
                dapat menggunakan fitur website secara sepenuhnya,
            </div>
        </div>
    </div>

    <div class="p-form">
        <form action="" enctype="multipart/form-data" method="POST" autocomplete="off">
            @csrf
            @if ($errors->any())
                <div class="text-warning py-2">
                    @foreach ($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
            @endif
            <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
                <label for="nama" class="custom-txt fw-bold fs-5 l-side-form">Email</label>
                <input class="ipt-form" type="text" placeholder="Masukkan email anda" id="email" name="email">
            </div>            
            <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
                <label for="password" class="custom-txt fw-bold fs-5 l-side-form">Kata Sandi</label>
                <input class="ipt-form" type="password" placeholder="Masukkan kata sandi Anda" id="password" name="pw">
            </div>  
            <br>
            <div class="w-100 d-flex justify-content-end">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <button class="btn-regular rounded" type="submit">Masuk</button>
                    <div class="fw-bold text-center">Belum punya akun? 
                        <a href="{{route('register')}}" class="text-reset text-decoration-none"><span class="custom-txt">Daftar</span></a></div>   
                </div> 
            </div>
        </form>
    </div>
@endsection
