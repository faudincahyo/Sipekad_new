@extends('layouts.partials.profilnav');

@section('content')
    <div class="container">
                @if (session()->has('berupdate'))
                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                        <strong style="margin-bottom: 20px">{{ session()->get('berupdate') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Table Profile --}}
                <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat Kelurahan</th>
                        <th scope="col">Telepon Kelurahan</th>
                        <th scope="col">Alamat RT</th>
                        <th scope="col">Telepon RT</th>
                        <th scope="col" style="margin-left: 2rem">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($data as $key=>$item)                            
                      <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->alamat_kel}}</td>
                        <td>{{ $item->no_kel }}</td>
                        <td>{{ $item->alamat_rt}}</td>
                        <td>{{ $item->no_rt}}</td>
                        <td><a href="{{ route('profil.edit', $item->id) }}"><button class="btn btn-primary">Edit Profil</button></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
    </div>
@endsection
