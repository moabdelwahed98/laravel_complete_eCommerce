
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
    <title>About me</title>
</head>
<body>

    <header>
        <div class="logo">
            <a href="{{ url('home') }}">Zalandus</a>
        </div>
        <nav>
            <ul>
                <li> <a href="#" class="close"> <i class="fa-solid fa-circle-xmark"></i></a></li>
                <li> <a href="{{ url('home') }}"> Home</a></li>
                <li> <a href="{{ url('shop') }}"> Shop</a></li>
                <li> <a class="active" href="{{ url('about') }}"> About</a></li>
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

    <article class="shop-main">
        <h2>#Aboutpage</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, voluptas. </p>
    </article>

    <marquee scrollamount="5" width="100%" scrolldelay="100">
        <p>Let's know a little bit about our team that created this website. We tried to do our best.</p>
    </marquee>
    <section>
        <div class= "flex-container" id="team">
            @foreach ($teams as $team)
                <div>
                    <img src="{{$team->char_image}}">
                    <h5>{{$team->position}}</h5>
                    <h4><span>{{ $team->surname }}</span> <span>{{ $team->nome }}</span></h4>
                    <p>{{$team->email}}</p>
                </div>
            @endforeach
        </div>
    </section>

  @endsection

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
