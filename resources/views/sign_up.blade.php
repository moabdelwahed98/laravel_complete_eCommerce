@extends('layouts.footer1')
@section('foot1')

<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        const CHECK_USERNAME_URL = "{{ URL::to('sign_up/check/username') }}";
        const CHECK_EMAIL_URL = "{{ URL::to('sign_up/check/email') }}";
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css\style1.css') }}">
    <link rel="stylesheet" href="{{ url('css\userSpaceStyle.css') }}">
    <script src="{{ url('/js/signup.js') }}" defer></script>

    <title>Registrati!</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="{{ url('/') }}">Zalandus</a>
        </div>
    </header>


    <section class="login_sign">
        <main>
            <h2>Registrati, se non fatto</h2>
            <form id="sign_up" name='signup' method='post'  enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="name">
                    <label>Nome <input type='text' name='name' value = {{ old ("name") }}></label>
                    <div class="jsError"><img src="{{ url('/assets/close.svg') }}"/><span>Devi inserire il tuo nome</span></div>
                </div>
                <div class="surname">
                    <label>Cognome <input type='text' name='surname' value = {{ old ("surname") }} ></label>
                    <div class="jsError"><img src="{{ url('/assets/close.svg') }}"/><span>Devi inserire il tuo cognome</span></div>
                </div>
                <div class="username">
                    <label>Username <input type='text' name='username' value = {{ old ("username") }}></label>
                    <div class="jsError"><img src="{{ url('/assets/close.svg') }}"/><span></span></div>
                </div>
                <div class="email">
                    <label>Email <input type='email' name='email' value = {{ old ("email") }}></label>
                    <div class="jsError"><img src="{{ url('/assets/close.svg') }}"/><span></span></div>
                </div>
                <div class="password">
                    <label>Password <input type='password' name='password' value = {{ old ("password") }}></label>
                    <div class="jsError"><img src="{{ url('/assets/close.svg') }}"/><span>Inserisci almeno 8 caratteri</span></div>
                </div>
                <div class="confirm_password">
                    <label>Confirm Password <input type='password' name='confirm_password' value = {{ old ("confirm_password") }}></label>
                    <div class="jsError"><img src="{{ url('/assets/close.svg') }}"/><span>Le password non coincidono</span></div>
                </div>
                @if ($error)
                    <div class='errori'><img src="{{ url('/assets/close.svg') }}"/><span>{{ $error }}</span></div>
                @endif

                <div>
                    <label>&nbsp;<input id="send" value="Registrati" type='submit'></label>
                </div>
            </form>
            <div class="signupLink">
                <h4>Hai un account?</h4>
                <a href="{{ url('login') }}">Accedi</a>
            </div>
        </main>
    </section>
@endsection
</body>

</html>
