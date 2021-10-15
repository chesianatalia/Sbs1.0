@extends('layouts.auth')

@section('content')
    <div class="page-auth">
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
          <div class="row row-login">
            <div class="col-lg-6 text-center">
              <img
                src="Images/signup_pict.png"
                alt=""
                class="w-100 mb-4 mb-lg-none"
              />
            </div>
            <div class="col-lg-4">
              <h2 class="text-center"><u>Sign Up Here!</u></h2>
              <form action="" class="mt-3">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input
                      type="FirstName"
                      placeholder="First Name"
                      class="form-control"
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <input
                      type="lastname"
                      placeholder="Last Name"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <input
                    type="Username"
                    placeholder="Username"
                    class="form-control"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="Email"
                    placeholder="Email Address"
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
                <div class="form-group">
                  <input
                    type="date"
                    placeholder="Birth Date"
                    class="form-control"

                  />
                <a
                  href="login.html"
                  class="btn btn_warna btn-block mt-4"
                >
                  Sign Up
                </a>
              </form>
              <p class="text-center">already have account? Log in <a href="{{ route('login') }}">here!</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>




<div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
