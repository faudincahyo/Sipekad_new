@extends('layouts.partials.admin-navbar')

@section('content')
    <div class="container">
        <div class="row order-1">
            <div class="col-5 justify-content-center">

                {{-- FORM INPUT --}}

                <div class="row-cols-7">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('berupdate'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('berupdate') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form class="form" action="{{ route('input.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group position-relative mb-4 w-100">
                            <label class="fs-5">Nama Dokumen</label>
                            <input type="text" name="nama" class="form-control form-control-xl">
                        </div>
                        <div class="form-group position-relative mb-4 w-100">
                            <label class="fs-5">Persyaratan</label>
                            <textarea name="persyaratan" class="rounded form-control form-control-xl" cols="40" rows="5"></textarea>
                        </div>

                        <div class="form-group position-relative">
                            <div class="row">
                                <div class="col-3">
                                    <button type="reset" style="background-color: rgb(140, 230, 203)"
                                        class="border-0 d-flex">
                                        <img src="https://img.icons8.com/ios-glyphs/30/null/circled-left.png" />
                                        <p class="mt-1">Hapus</p>
                                    </button>
                                </div>

                                <div class="col-3">
                                    <button type="submit" style="background-color: rgb(140, 230, 203)"
                                        class="border-0 d-flex"><img
                                            src="https://img.icons8.com/ios-glyphs/30/null/add--v1.png" />
                                        <p class="mt-1">Tambah</p>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                {{-- SHOW TABLES --}}
                <div class="row-cols-7 mt-5 scroll">
                    @if (session()->has('berhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('berhasil') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <table class="table" id="tableData">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Actions</th>
                                <th scope="col">Nama Dokumen</th>
                                <th scope="col">Deskripsi Persyaratan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($input as $item)
                                <tr>
                                    <td class="d-flex">
                                        <form action="{{ route('input.destroy', $item->id) }}" method="POST"
                                            class="pe-2">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="border-0"
                                                style="background-color: rgb(140, 230, 203)">
                                                <img
                                                    src="https://img.icons8.com/fluency-systems-filled/30/000000/delete.png" />
                                            </button>
                                        </form>

                                        <a href="{{ route('input.edit', $item->id) }}">
                                            <button class="border-0" style="background-color: rgb(140, 230, 203)">
                                                <img src="https://img.icons8.com/ios-filled/30/null/pencil--v1.png" />
                                            </button>
                                        </a>
                                    </td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->persyaratan }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-5 ms-auto order-2 img-nikah2">
                <img src="{{ asset('asset/image/bg_input.jpeg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
