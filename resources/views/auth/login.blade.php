@extends('layouts.partials.navbar')

@section('content')
    <div class="col-md-4 col-11 m-auto">
        <div class="card p-3 rounded-4 shadow-md card-login" style="background-color: rgb(121, 182, 121)">
            <h3 class="text-center mt-4">Admin Login</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group position-relative mb-4 w-75 m-auto input-group">
                    <span class="input-group-text border-0" id="basic-addon1" style="background-color: rgb(121, 182, 121)"><img src="https://img.icons8.com/ios-glyphs/30/null/user--v1.png"/></span>
                    <input type="text" name="username" style="background-color: rgb(121, 182, 121)"
                    class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control form-control-xl @error('username') is-invalid @enderror" placeholder="Username">

                        @error('username')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        
                        @enderror
                    </div>
                    <div class="form-group position-relative mb-4 w-75 m-auto input-group">
                        <span class="input-group-text border-0" style="background-color: rgb(121, 182, 121)" id="basic-addon1"><img src="https://img.icons8.com/metro/26/null/lock.png"/></span>

                        <input type="password" style="background-color: rgb(121, 182, 121)" class="rounded-0 border-top-0 border-start-0 border-end-0 border-danger form-control form-control-xl @error('password') is-invalid @enderror"
                        name="password" placeholder="Password">
                        @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        
                        @enderror

                    </div>
                    <div class="form-group position-relative m-auto login-btn">
                        
                        <button class="btn btn-outline-success border-dark text-dark fs-5 fw-semibold mt-4 w-100 ">{{ __('Login') }}</button>
                        
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       <p class="fs-5" style="padding-left: 6rem">{{ __('Forgot Your Password?') }}</p> 
                                    </a>
                                @endif
                    </div>
            </form>

            <div class="d-flex justify-content-between mt-3">
                <p class="fw-bold mb-0">Sudah Punya Akun ?</p>
                <a href="{{ route('register') }}"><p class="fs-5">Registrasi Sekarang</p></a>

            </div>

        </div>

    </div>
@endsection
