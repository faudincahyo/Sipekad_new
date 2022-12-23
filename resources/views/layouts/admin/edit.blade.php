@extends('layouts.partials.admin-navbar')

@section('content')
<div class="container">
    <div class="col-5 justify-content-center">

        {{-- FORM INPUT --}}

        <div class="row-cols-7">
        @if (session()->has('galat'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('galat') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


            <form class="form" action="{{ route('input.update', $input->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method("PATCH")

                <div class="form-group position-relative mb-4 w-100">
                    <label class="fs-5">Nama Dokumen</label>
                    <input type="text" name="nama" value="{{ $input->nama }}" class="form-control form-control-xl">
                </div>
                <div class="form-group position-relative mb-4 w-100">
                    <label class="fs-5">Persyaratan</label>
                    <textarea name="persyaratan" class="rounded form-control form-control-xl" cols="40" rows="5" value>{!! $input->persyaratan !!}</textarea>
                </div>

                <div class="form-group position-relative">
                   <button class="btn btn-primary w-50 ms-auto">Edit Data</button>
                </div>
            </form>
        </div>
        
       
@endsection
