@extends('layouts.partials.userpartials.requirenav');

@section('content')
    <div class="container">
        <div class="row order-1">
            {{-- Welcome --}}
            <div class="col-6 ms-5">
                <img  src="{{ asset('asset/image/presentasi_SIM.png') }}" alt="">
            </div>

            <div class="col-md-4 ms-auto order-2 img-main">
                <img class="img-1" src="{{ asset('asset/image/undraw_information_tab_re_f0w3.svg') }}" alt="" style="width: 450px">
            </div>
        </div>
    </div>
@endsection
