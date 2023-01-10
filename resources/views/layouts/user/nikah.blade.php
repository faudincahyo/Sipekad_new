@extends('layouts.partials.userpartials.requirenav');

@section('content')
    <div class="container">
        <div class="row order-1">
            {{-- Welcome --}}
            <div class="col-6 ms-5">
                <img class="img-nikah" src="{{ asset('asset/image/nikah.jpeg') }}" alt="">
            </div>

            <div class="col-md-4 ms-auto order-2 img-nikah2">
                <img class="img-1" src="{{ asset('asset/image/undraw_information_tab_re_f0w3.svg') }}" alt="" style="width: 450px">
            </div>
        </div>
    </div>
@endsection
