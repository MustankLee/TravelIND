@extends('template')

@section('title', '| Ubah Profil')

@section('content')

<div class="nav-clone bg-dark">

</div>
<div class="custom-bg w-100">
    <div class="w-50 p-in">
        <div class="fs-2 fw-bold">
            Ubah Data Anda
        </div>
        <div>
            Perbarui data Anda setiap saat agar kami dapat
            memberitahukan informasi tentang wisata yang terbaru
            dan terpopuler di masa sekarang
        </div>
    </div>
    <div class="w-100 marq">
        <marquee class="border rounded h-100 p-2 mb-2 fw-bold bg-light custom-txt">
                Bagian yang tidak diisi tidak akan mengalami perubahan alias hanya bagian yang diisi yang akan mengalami perubahan.
        </marquee>
    </div>
</div>

<div class="p-form">
    <form action="{{route('update_backend')}}" enctype="multipart/form-data" method="POST" autocomplete="off">
        @csrf
        @method('patch')
        <input type="hidden" name="id" value="{{Auth::user()->id}}">
        {{-- <div>{{Auth::user()->id}}</div>
        <div>{{Auth::user()->image}}</div> --}}

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="nama" class="custom-txt fw-bold fs-5 l-side-form">Nama Pengguna</label>
            <input class="ipt-form" type="text" placeholder="Ubah nama Anda" id="nama" name="user_name">
        </div>  

        {{-- <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="email" class="custom-txt fw-bold fs-5 l-side-form">Email</label>
            <input class="ipt-form" type="email disable" placeholder="Ubah email Anda" id="email" name="email" value="{{Auth::user()->email}}">
        </div>   --}}

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="password" class="custom-txt fw-bold fs-5 l-side-form">Kata Sandi</label>
            <input class="ipt-form" type="password" placeholder="Kata sandi baru" id="password" name="pw">
        </div>  
        
        {{-- <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="confirm-password" class="custom-txt fw-bold fs-5 l-side-form">Konfirmasi Kata Sandi</label>
            <input class="ipt-form h-100" type="password" placeholder="Masukkan kembali kata sandi baru" id="confirm-password" name="confirm-pw">
        </div>   --}}

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="profile" class="custom-txt fw-bold fs-5 l-side-form">Gambar Profil</label>
            <input type="file" class="custom-bg rounded text-light" id="profile" name="profile" accept="image/png, image/jpg, image/jpeg">
        </div>

        <br>
        <div class="w-100 d-flex justify-content-end">
            <div class="d-flex flex-column pe-3 justify-content-center align-items-center">
                <button class="btn-regular rounded py-1" type="submit">Ubah</button>
            </div> 
        </div>
    </form>
</div>

@endsection