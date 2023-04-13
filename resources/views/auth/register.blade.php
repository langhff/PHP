@extends('master')

@section('title', 'Register')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="sing-in-form">
            <div class="sing-in-header">
                <h2 class="text-24 text-bold">Sign in</h2>
            </div>
            <div class="input-field">
                <label for="name" class="input-field-label text-12 text-gray text-uppercase">Login *</label><br>
                <input id="name" type="text" class="input-field-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                @enderror
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
                <input id="password" type="password" class="input-field-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                @enderror
            </div>
            <div class="input-field">
                <label for="password-confirm" class="input-field-label text-12 text-gray text-uppercase">Confirm Password *</label><br>
                <input id="password-confirm" type="password" class="input-field-input @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                @enderror
            </div>
            <button class="button-black" type="submit">Register</button>

        </div>
    </form>
</div>
@endsection
