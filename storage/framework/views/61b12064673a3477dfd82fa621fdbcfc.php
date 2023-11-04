<?php $__env->startSection('foot2'); ?>
<?php $__env->startSection('features'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(url('/css/style1.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?php echo e(url('/js/script.js')); ?>" defer></script>
    <script src="<?php echo e(url('/js/api_search.js')); ?>" defer></script>
    <title>Home</title>
</head>
<body>

    <header>
        <div class="logo">
            <a href="<?php echo e(url('home')); ?>">Zalandus</a>
        </div>
        <nav>
            <ul>
                <li> <a href="#" class="close"> <i class="fa-solid fa-circle-xmark"></i></a></li>
                <li> <a class="active" href="<?php echo e(url('home')); ?>"> Home</a></li>
                <li> <a href="<?php echo e(url('shop')); ?>"> Shop</a></li>
                <li> <a href="<?php echo e(url('about')); ?>"> About</a></li>
                <li> <a href="<?php echo e(url('contact')); ?>"> Contact</a></li>
                <li> <a href="<?php echo e(url('cart')); ?>"> <i class="fa-solid fa-cart-shopping"></i></a></li>
                <li> <a href="<?php echo e(url('account')); ?>"> <i class="fas fa-user"></i></a></li>
                <li> <a onclick="logout()" href="<?php echo e(url('logout')); ?>"> <i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="container">
            <a href="<?php echo e(url('cart')); ?>"> <i class="fa-solid fa-cart-shopping"></i></a>
            <a href="<?php echo e(url('account')); ?>"> <i class="fas fa-user"></i></a>
            <a onclick="logout()" href="<?php echo e(url('logout')); ?>"> <i class="fa-solid fa-right-from-bracket"></i></a>
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
        <a href="<?php echo e(url('shop')); ?>">Shop Now</a>
    </article>
<?php $__env->stopSection(); ?>

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
        <a href="<?php echo e(url('shop')); ?>">Explore More</a>
    </section>

    <section class="newsletter">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <a href="#">Sign Up</a>
    </section>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.features', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mohamedabdelwahed/Downloads/UNICT_CARRIER/MIO hw2_reale/resources/views/home.blade.php ENDPATH**/ ?>