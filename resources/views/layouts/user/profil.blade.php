@extends('layouts.partials.userpartials.profilnav')


@section('content')
<div class="container">
    <div class="row order-1">
        {{-- Welcome --}}
        <div class="col-6 ms-5">
            <img class="img-1" src="{{ asset('asset/image/bg_profil.jpeg') }}" alt="" style="width: 450px">
        </div>

        <div class="col-md-4 ms-auto order-1 img-main rounded-2" style="background-color: rgb(239, 126, 126);">
            <form class="form" enctype="multipart/form-data">                        
                    <div class="form-group position-relative mb-4 w-100 mt-2">
                        <h3>KELURAHAN</h3>
                        <textarea disabled type="text" name="alamat_kel" class="form-control form-control-xl border-0 fw-bold"
                            style="background-color:rgb(239, 126, 126)">{!! Auth::user()->alamat_kel !!}</textarea>
                        <input disabled type="text" name="telp_kel" value="{{ Auth::user()->no_kel }}"
                            class="form-control form-control-xl border-0 fw-bold mb-2"
                            style="background-color:rgb(239, 126, 126)">
                    </div>
                    <div class="form-group position-relative mb-4 w-100 mt-3">
                        <h3>RT</h3>
                        <textarea disabled type="text" name="alamat_rt" class="form-control form-control-xl border-0 fw-bold w-100"
                            style="background-color:rgb(239, 126, 126)">{!! Auth::user()->alamat_rt !!}</textarea>
                        <input disabled type="text" name="telp_rt" value="{{ Auth::user()->no_rt }}"
                            class="form-control form-control-xl border-0 fw-bold"
                            style="background-color:rgb(239, 126, 126)">
                    </div>

            </form>
        </div>
    </div>
</div>
@endsection