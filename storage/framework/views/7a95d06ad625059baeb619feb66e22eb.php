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
    <title>About me</title>
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
                <li> <a href="<?php echo e(url('shop')); ?>"> Shop</a></li>
                <li> <a class="active" href="<?php echo e(url('about')); ?>"> About</a></li>
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

    <article class="shop-main">
        <h2>#Aboutpage</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, voluptas. </p>
    </article>

    <marquee scrollamount="5" width="100%" scrolldelay="100">
        <p>Let's know a little bit about our team that created this website. We tried to do our best.</p>
    </marquee>
    <section>
        <div class= "flex-container" id="team">
            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <img src="<?php echo e($team->char_image); ?>">
                    <h5><?php echo e($team->position); ?></h5>
                    <h4><span><?php echo e($team->surname); ?></span> <span><?php echo e($team->nome); ?></span></h4>
                    <p><?php echo e($team->email); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

  <?php $__env->stopSection(); ?>

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
<?php echo $__env->make('layouts.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mohamedabdelwahed/Downloads/UNICT_CARRIER/MIO hw2_reale/resources/views/about.blade.php ENDPATH**/ ?>