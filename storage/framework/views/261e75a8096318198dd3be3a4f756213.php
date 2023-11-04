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
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?php echo e(url('/js/script.js')); ?>" defer></script>
    <title>Contact us</title>
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
                <li> <a href="<?php echo e(url('about')); ?>"> About</a></li>
                <li> <a class="active" href="<?php echo e(url('contact')); ?>"> Contact</a></li>
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

    <article class="page-header">
        <h2>#Letstalk</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, voluptas. </p>
    </article>

    <section>
        <div class="contact">
            <span>GET IN TOUCH</span>
            <h2>Visit our agency locations or contact us</h2>
            <h3>Head Office</h3>

            <div class="contact-deatails">
                <div class="icon-text">
                    <li>
                        <i class="fa-regular fa-map"></i>
                        <p>Cittadella Universitaria, via Santa sofia, 64, Catania</p>
                    </li>
                    <li>
                        <i class="fa-regular fa-envelope"></i>
                        <p>contact@example.com</p>
                    </li>

                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <p>contact@example.com</p>

                    </li>
                    <li>
                        <i class="fa-regular fa-clock"></i>
                        <p>Da Lunedì a Sabato: 09:00 am alle 17:00</p>
                    </li>

                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.3046103372594!2d15.067674175964665!3d37.52431617204948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1313fd250ec147a1%3A0x42fd0ab10dbcdbaf!2sVia%20S.%20Sofia%2C%2064%2C%2095123%20Catania%20CT!5e0!3m2!1sit!2sit!4v1684171023843!5m2!1sit!2sit"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
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

<?php echo $__env->make('layouts.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mohamedabdelwahed/Downloads/UNICT_CARRIER/MIO hw2_reale/resources/views/contact.blade.php ENDPATH**/ ?>