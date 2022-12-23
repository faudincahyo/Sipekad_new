@extends('layouts.partials.admin-navbar');

@section('content')
<div class="container">
    <div class="col d-flex">
        <div class="row-cols-7 order-1">
            {{-- Welcome --}}
            <div class="col-9 ms-5">
                <div class="desc-1">
                    <h4>CARI PERSYARATAN DOKUMEN ANDA DENGAN SIPEKAD PEJAGALAN</h4>
                </div>

                {{-- image --}}
                <div class="col-9 desc-2">
                    <p>Informasi persyaratan KTP, SIM, SKCK, Surat Pindah Domisili
                        ,dan surat Rekomendasi Nikah
                    </p>
                </div>
            </div>
        </div>

        <div class="row-cols-7 ms-auto img-1 order-2">
            <img src="{{ asset('asset/image/undraw_file_searching_re_3evy.svg') }}" alt="" style="width: 450px">
        </div>
    </div>
</div>
@endsection
