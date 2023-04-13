@extends('master')

@section('title', 'Login')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="sing-in-form">
            <div class="sing-in-header">
                <h2 class="text-24 text-bold">Sign in</h2>
            </div>
            <div class="input-field">
                <label for="email" class="input-field-label text-12 text-gray text-uppercase">Email Address *</label><br>
                <input id="email" type="email" class="input-field-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="input-field">
                <label for="password" class="input-field-label text-12 text-gray text-uppercase">Password *</label><br>
                <input id="password" type="password" class="input-field-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button class="button-black" type="submit" >Sign In</button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
</div>
@endsection
