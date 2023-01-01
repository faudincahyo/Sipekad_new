@extends('layouts.partials.homenav');

@section('content')
    <div class="container">
        <div class="row order-1">
            {{-- Welcome --}}
            <div class="col-6 ms-5">
                <div class="desc-1">
                    <h4>CARI PERSYARATAN DOKUMEN ANDA DENGAN SIPEKAD PEJAGALAN</h4>
                </div>

                {{-- image --}}
                <div class="desc-2">
                    <p>Informasi persyaratan KTP, SIM, SKCK, Surat Pindah Domisili
                        ,dan surat Rekomendasi Nikah
                    </p>
                </div>
            </div>

            <div class="col-md-4 ms-auto order-2 img-main">
                <img class="img-1" src="{{ asset('asset/image/undraw_file_searching_re_3evy.svg') }}" alt="" style="width: 450px">
            </div>
        </div>
    </div>
@endsection
