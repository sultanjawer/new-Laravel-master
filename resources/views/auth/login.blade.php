@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col col-md-6 col-lg-7 hidden-sm-down">
        <h2 class="fs-xxl fw-500 mt-4 text-white">
            Simethris V.3.0
            <small class="h3 fw-300 mt-3 mb-5 text-white opacity-100">
                Bagi Pemegang RIPH yang akan mengakses aplikasi ini, Anda harus memiliki akun pada Aplikasi RIPH Online terlebih dahulu.
                <br>
                Halaman ini bukan yang Anda maksudkan? silahkan kembali ke <a href="/" class="fw-700 text-white">menu awal </a>untuk memilih halaman tujuan Anda.
                <p>Belum memiliki akun? silahkan melakukan pendaftaran <a href="http://riph.pertanian.go.id/" class="fw-700 text-white">di sini.</a></p>
            </small>
        </h2>
        <a href="#" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
        <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
            <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                Associate
            </div>
            <div class="d-flex flex-row opacity-70 align-items-center">
                <a href="http://riph.pertanian.go.id/" class="text-white mr-2">
                    <img src="/img/riphonline.svg" alt="simethris" aria-roledescription="logo" style="width:25px; height:auto;">
                </a>
                <a href="#" class="mr-2 fs-xxl text-white" hidden>
                    <i class="fab fa-twitter-square"></i>
                </a>
                <a href="#" class="mr-2 fs-xxl text-white" hidden>
                    <i class="fab fa-google-plus-square"></i>
                </a>
                <a href="#" class="mr-2 fs-xxl text-white" hidden>
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
        <h1 class="text-white fw-300 mb-3">
            Secure login
        </h1>
        <div class="card p-4 rounded-plus bg-faded">
            <div class="d-sm-block d-md-none text-center mt-0 mb-1">
                <img src="{{ asset('img/logo-icon.png') }}" alt="simethris" aria-roledescription="logo" style="width:150px; height:auto;">
            </div>
            <form id="js-login" method="POST" novalidate="" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="email">{{ __('Email Address') }}</label>
                    <div class="input-group" data-toggle="tooltip" title data-original-title="Your Email">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fal fa-user"></span>
                            </div>
                        </div>

                        <input id="email" type="email" class="form-control form-control-md @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="username@example.com" />

                        @error('email')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">{{ __('Password') }}</label>

                    <div class="input-group bg-white shadow-inset-2" data-toggle="tooltip" title data-original-title="Your password">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span id="togglePassword" class="fal fa-key"></span>
                            </div>
                        </div>

                        <input id="password" type="password"" class=" form-control form-control-md bg-transparent pr-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="your password" />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group text-left">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember"> {{ __('Remember Me') }}</label>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 pl-lg-1 my-2" data-title="Tombol masuk" data-intro="Klik tombol ini untuk mengakses aplikasi jika seluruh kolom telah terisi" data-step="6">
                        <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-sm">Sign in</button>
                    </div>

                    <div class="col-lg-6 pl-lg-1 my-2">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection