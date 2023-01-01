@extends('layouts.partials.profilnav');

@section('content')
<div class="container">
    <div class="row order-1">
        {{-- Welcome --}}
        <div class="col-6 ms-5">
            <img class="img-1" src="{{ asset('asset/image/bg_profil.jpeg') }}" alt="" style="width: 450px">
        </div>

        <div class="col-md-4 ms-auto order-1 img-main">
            <h1>Kelurahan</h1>
            <input type="text" value="">
        </div>
    </div>
</div>
@endsection