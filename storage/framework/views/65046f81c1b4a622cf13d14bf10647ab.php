<?php $__env->startSection('foot2'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(url('/css/style1.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <script src="<?php echo e(url('/js/script.js')); ?>" defer></script>
        <script src="<?php echo e(url('/js/rest_api.js')); ?>" defer></script>
    <title>Shop</title>
</head>

<body>

    <header>
        <div class="logo">
            <a href="<?php echo e(url('home')); ?>">Zalandus</a>
        </div>
        <nav>
            <ul>
                <li> <a href="#" class="close"> <i class="fa-solid fa-circle-xmark"></i></a></li>
                <li> <a href="<?php echo e(url('home')); ?>"> Home</a></li>
                <li> <a class="active" href="<?php echo e(url('shop')); ?>"> Shop</a></li>
                <li> <a href="<?php echo e(url('about')); ?>"> About</a></li>
                <li> <a href="<?php echo e(url('contact')); ?>"> Contact</a></li>
                <li> <a href="<?php echo e(url('cart')); ?>"> <i class="fa-solid fa-cart-shopping">
                    <i class="existence" class="fa-sharp fa-solid fa-location-pin"></i>
                        </i></a></li>
                <li> <a href="<?php echo e(url('account')); ?>"> <i class="fas fa-user"></i></a></li>
                <li> <a onclick="logout()" href="<?php echo e(url('logout')); ?>"> <i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="container">
            <a href="<?php echo e(url('cart')); ?>"> <i class="fa-solid fa-cart-shopping">
                <i class="existence" class="fa-sharp fa-solid fa-location-pin"></i>
                </i></a>
            <a href="<?php echo e(url('account')); ?>"> <i class="fas fa-user"></i></a>
            <a onclick="logout()" href="<?php echo e(url('logout')); ?>"> <i class="fa-solid fa-right-from-bracket"></i></a>
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <article class="shop-main">
        <h2>#Shoppage</h2>
        <p>Save more with coupons & up to 70% off! </p>
    </article>

    <section class="products" id="shop-product">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="flex-container">
        </div>
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

<?php echo $__env->make('layouts.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mohamedabdelwahed/Downloads/UNICT_CARRIER/hw2_reale/resources/views/shop.blade.php ENDPATH**/ ?>