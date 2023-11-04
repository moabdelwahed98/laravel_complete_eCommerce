
@extends('layouts.footer2')
@extends('layouts.features')
@section('foot2')
@section('features')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/style1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ url('/js/script.js') }}" defer></script>
    <script src="{{ url('/js/api_search.js') }}" defer></script>
    <title>Home</title>
</head>
<body>

    <header>
        <div class="logo">
            <a href="{{ url('home') }}">Zalandus</a>
        </div>
        <nav>
            <ul>
                <li> <a href="#" class="close"> <i class="fa-solid fa-circle-xmark"></i></a></li>
                <li> <a class="active" href="{{ url('home') }}"> Home</a></li>
                <li> <a href="{{ url('shop') }}"> Shop</a></li>
                <li> <a href="{{ url('about') }}"> About</a></li>
                <li> <a href="{{ url('contact') }}"> Contact</a></li>
                <li> <a href="{{ url('cart') }}"> <i class="fa-solid fa-cart-shopping"></i></a></li>
                <li> <a href="{{ url('account') }}"> <i class="fas fa-user"></i></a></li>
                <li> <a onclick="logout()" href="{{ url('logout') }}"> <i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="container">
            <a href="{{ url('cart') }}"> <i class="fa-solid fa-cart-shopping"></i></a>
            <a href="{{ url('account') }}"> <i class="fas fa-user"></i></a>
            <a onclick="logout()" href="{{ url('logout') }}"> <i class="fa-solid fa-right-from-bracket"></i></a>
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <article class="main">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off! </p>
        <a href="{{ url('shop') }}">Shop Now</a>
    </article>
@endsection

    <section class="products" id="home-product">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>

        <form id="main-form" action="" method="post">
            <input id="text" name="search" placeholder="Es: phone" type="text" value="">
            <input id="send" type="submit" name="">
        </form>
        <section id='errore'>
            <p> Nessun risultato! </p>
        </section>

        <div class="flex-container">

        </div>
    </section>

    <section class="banner">
        <h4>Repair Services </h4>
        <h2>Up to <span>70% off </span>All t-Shirts & Accessories</h2>
        <a href="{{ url('shop') }}">Explore More</a>
    </section>

    <section class="newsletter">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <a href="#">Sign Up</a>
    </section>
@endsection
</body>
</html>
