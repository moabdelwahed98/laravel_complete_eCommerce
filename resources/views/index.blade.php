@extends('layouts.footer1')
@extends('layouts.features')

@section('foot1')
@section('features')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/style1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome!</title>
</head>
<body>

    <header>
        <div class="logo">
            <a href="{{ url('/') }}">Zalandus</a>

        </div>
        <nav>
            <ul>
                <li>I'm sorry, but u need to sign up/log in to see more! |=> </li>
                <li><a href="{{ url('login') }}"> <i class="fas fa-user"></i></a></li>
            </ul>
        </nav>
        <div class="container">
            <a href="{{ url('login') }}"> <i class="fas fa-user"></i></a>
        </div>
    </header>

    <article class="main">
        <h4>Hello there!</h4>
        <h2>This should be my first</h2>
        <h2>complete project</h2>
        <br>
        <h1>E-Commerce site</h1>
        <p>I hope u enjoy my work. <strong><em>HERE WE ARE!</em></strong></p>

    </article>

    @endsection

    <section class="banner">
        <h4>Repair Services </h4>
        <h2>Up to <span>70% off </span>All t-Shirts & Accessories</h2>
    </section>

    <section class="newsletter">
        <div class="newstext">
            <h4>Sign Up For Free</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <a href="{{ url('sign_up') }}">Sign Up</a>

    </section>
@endsection
</body>
</html>
