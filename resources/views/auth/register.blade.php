@extends('layouts.partials.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: rgb(121, 182, 121)">
                <div class="card-header fs-3 text-center text-light">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- USERNAME --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Data alamat user --}}
                        <div class="row mb-3">
                            <label for="alamat_kel" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Kelurahan') }}</label>

                            <div class="col-md-6">
                                <textarea id="alamat_kel" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control @error('alamat_kel') is-invalid @enderror" name="alamat_kel" value="{{ old('alamat_kel') }}"></textarea>

                                @error('alamat_kel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_kel" class="col-md-4 col-form-label text-md-end">{{ __('Telepon Kelurahan') }}</label>

                            <div class="col-md-6">
                                <input id="no_kel" type="text" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control @error('no_kel') is-invalid @enderror" name="no_kel" value="{{ old('no_kel') }}">

                                @error('no_kel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat_rt" class="col-md-4 col-form-label text-md-end">{{ __('Alamat RT') }}</label>

                            <div class="col-md-6">
                                <textarea id="alamat_rt" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control @error('alamat_rt') is-invalid @enderror" name="alamat_rt" value="{{ old('alamat_rt') }}"></textarea>

                                @error('alamat_rt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_rt" class="col-md-4 col-form-label text-md-end">{{ __('Telepon RT') }}</label>

                            <div class="col-md-6">
                                <input id="no_rt" type="text" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control @error('no_rt') is-invalid @enderror" name="no_rt" value="{{ old('no_rt') }}">

                                @error('no_rt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary  text-white w-100">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
