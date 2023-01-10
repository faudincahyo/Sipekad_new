@extends('layouts.partials.userpartials.profilnav');

@section('content')
    <div class="container">
        <div class="row order-1">
            {{-- Welcome --}}
            <div class="col-6 ms-5">
                <img class="img-1" src="{{ asset('asset/image/bg_profil.jpeg') }}" alt="" style="width: 450px">
            </div>

            <div class="col-md-4 ms-auto order-1 img-main rounded-2" style="background-color: rgb(239, 126, 126);">
                @if (session()->has('berupdate'))
                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                        <strong style="margin-bottom: 20px">{{ session()->get('berupdate') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="form" enctype="multipart/form-data">
                    @foreach ($data as $item)
                        <div class="form-group position-relative mb-4 w-100 mt-2">
                            <h3>KELURAHAN</h3>
                            <textarea disabled type="text" name="alamat_kel" class="form-control form-control-xl border-0 fw-bold"
                                style="background-color:rgb(239, 126, 126)">{!! $item->alamat_kel !!}</textarea>
                            <input disabled type="text" name="telp_kel" value="{{ $item->telp_kel }}"
                                class="form-control form-control-xl border-0 fw-bold mb-2"
                                style="background-color:rgb(239, 126, 126)">
                        </div>
                        <div class="form-group position-relative mb-4 w-100 mt-3">
                            <h3>RT</h3>
                            <textarea disabled type="text" name="alamat_rt" class="form-control form-control-xl border-0 fw-bold w-100"
                                style="background-color:rgb(239, 126, 126)">{!! $item->alamat_rt !!}</textarea>
                            <input disabled type="text" name="telp_rt" value="{{ $item->telp_rt }}"
                                class="form-control form-control-xl border-0 fw-bold"
                                style="background-color:rgb(239, 126, 126)">
                        </div>
                    @endforeach
                </form>
                <a href="{{ route('profil.edit', $item->id) }}" class="ms-auto mb-2">
                    <button class="btn btn-primary text-light mb-3">
                        Edit Profil
                    </button>
                </a>

            </div>
        </div>
    </div>
@endsection
