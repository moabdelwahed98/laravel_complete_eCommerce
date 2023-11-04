
@extends('layouts.footer2')
@section('foot2')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/style1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ url('/js/script.js') }}" defer></script>
    <script src="{{ url('/js/account.js') }}" defer></script>
    <title>Personal Area {{$user->nome}} {{$user->surname}}</title>
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
                <li> <a href="{{ url('about') }}"> About</a></li>
                <li> <a href="{{ url('contact') }}"> Contact</a></li>
                <li> <a href="{{ url('cart') }}"> <i class="fa-solid fa-cart-shopping"></i></a></li>
                <li> <a class="active" href="{{ url('account') }}"> <i class="fas fa-user"></i></a></li>
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

    <article class="page-header">
        <h2>#Personalarea</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, voluptas. </p>
    </article>

    <section>
        <div class="account">
            <h3 class="">Account info</h3>
            <div class="account-info">
                @if($user)
                <p>Name: <span> {{$user->nome}} </span> <span> {{$user->surname}}</span> </p>
                <p>Email: <span> {{$user->email}} </span> </p>
                @endif
                <div class= "buttons">
                    <p> <a href="{{ url('cart') }}" id="order-btn">Add More</a> </p>
                    <p> <a onclick="logout()" href="{{ url('logout') }}" id="logout-btn">Logout</a> </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class= "flex-container" id="team">
            {{-- @foreach ($orders as $order)
                <div>
                    <img src="{{$order->image}}">
                    <h5>{{$order->title}}</h5>
                    <h4>{{$order->price}}</h4>
                </div>
            @endforeach --}}
        </div>
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
