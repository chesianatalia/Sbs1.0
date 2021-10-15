@extends('layouts.auth')

@section('content')
  <div>
    <div class="container">
      <div class="text-center">
        <h1 class="mb-0 title"><u>Step by Step</u></h1>
        <p class="mb-5">
          No one is born a great cook, one learns by doing -Julia Child
        </p>
      </div>
    </div>
    <div class="section-store-auth">
      <div class="container">
        <div
          class="row row-login d-flex justify-content-center align-items-center"
        >
          <div class="col-lg-4 col-md-6">
            <h2 class="text-center"><u>Log in Here!</u></h2>
            <form action="" class="mt-3">
              <div class="form-group">
                <input
                  type="Username"
                  placeholder="Username"
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <input
                  type="Password"
                  placeholder="Password"
                  class="form-control"
                />
              </div>
              <a href="dashboard.html" class="btn btn_warna btn-block mt-4">
                Log in
              </a>
            </form>
            <p class="text-center">
              doesn't have account? Sign Up<a href="{{ route('register') }}"> here!</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>



<div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

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
    </div>
</div>

@push('addon-style')
    <style>
      body {
        background-image: url("Images/login_bg.png");
        background-size: cover;
      }
    </style>

    
@endpush
@endsection
