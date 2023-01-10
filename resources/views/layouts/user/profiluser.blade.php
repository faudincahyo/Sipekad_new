@extends('layouts.partials.userpartials.profilnav')

@section('content')
<div class="container">
    <div class="row order-1">
        <div class="col-5 justify-content-center">

            {{-- FORM INPUT --}}

            <div class="row-cols-7">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                        <strong>{{ session()->get('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('profiluser.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <h3>Edit ALamat & Nomor Telepon Kelurahan</h3>

                    <div class="form-group position-relative mb-4 w-100">
                        <label class="fs-5">Alamat Kelurahan</label>
                        <input type="text" name="alamat_kel" class="form-control form-control-xl">
                    </div>
                    <div class="form-group position-relative mb-4 w-100">
                        <label class="fs-5">Nomor Telepon</label>
                        <input type="text" name="telp_kel" class="form-control form-control-xl">
                    </div>

                    <h3>Edit ALamat & Nomor Telepon RT</h3>
                    <div class="form-group position-relative mb-4 w-100">
                        <label class="fs-5">Alamat RT</label>
                        <input type="text" name="alamat_rt" class="form-control form-control-xl">
                    </div>
                    <div class="form-group position-relative mb-4 w-100">
                        <label class="fs-5">Nomor Telepon</label>
                        <input type="text" name="telp_rt" class="form-control form-control-xl">
                    </div>

                    <button class="btn btn-outline-success w-50 fw-bold text-dark">Masukkan Profil</button>
                </form>
            </div>
            
        </div>
        <div class="col-md-5 ms-auto order-2 img-nikah2">
            <img src="{{ asset('asset/image/bg_profil.jpeg') }}" alt="">
        </div>
    </div>
</div>
@endsection
