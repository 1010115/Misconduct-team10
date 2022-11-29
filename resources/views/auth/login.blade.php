<link rel="stylesheet" href="style.css">
@extends('layouts.app')

@section('content')

    <div class="container">


        <div class="img">
            <img src="images/sad1.png">

        </div>


        <div class="login-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <img src="images/profilepic.png">
                <h2 class="title">Welkom</h2>

                <div class="input-div one">

                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>E-mailadres</h5>
                        <input id="email" type="email"
                               class="input @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                </div>


                <div class="input-div pass">

                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>


                    <div class="div">

                        <h5>wachtwoord</h5>


                        <input id="password" type="password"
                               class="input @error('password') is-invalid @enderror" name="password"
                               required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                </div>


                <button type="submit" class="btn">
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

@endsection
