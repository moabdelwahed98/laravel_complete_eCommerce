<?php $__env->startSection('foot2'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        const shop = "<?php echo e(url('shop')); ?>";
        const INSERT_URL = "<?php echo e(url('/cart')); ?>/";
        const csrf_token = "<?php echo e(csrf_token()); ?>";
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(url('/css/style1.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/css/modal.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <script src="<?php echo e(url('/js/script.js')); ?>" defer></script>
        <script src="<?php echo e(url('/js/cart.js')); ?>" defer></script>
    <title>Your cart</title>
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
                <li> <a href="<?php echo e(url('contact')); ?>"> Contact</a></li>
                <li> <a class="active" href="<?php echo e(url('cart')); ?>"> <i class="fa-solid fa-cart-shopping"><i class="existence"
                                class="fa-sharp fa-solid fa-location-pin"></i>
                        </i></a></li>
                <li> <a href="<?php echo e(url('account')); ?>"> <i class="fas fa-user"></i></a></li>
                <li> <a onclick="logout()" href="<?php echo e(url('logout')); ?>"> <i class="fa-solid fa-right-from-bracket"></i></a> </li>
            </ul>
        </nav>
        <div class="container">
            <a href="<?php echo e(url('cart')); ?>"> <i class="fa-solid fa-cart-shopping"><i class="existence"
                        class="fa-sharp fa-solid fa-location-pin"></i>
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
        <h2>#Yourproducts</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, voluptas. </p>
    </article>

    <section class="cart">

        <table>
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Images</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody id="basket">
                <tr>

                </tr>
            </tbody>
        </table>
    </section>

    <button id="clear"> Remove All </button>

    <section class="cart-add">
        <div class="final">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td class="amount"></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong class="amount-bold"></strong>
                    </td>
                </tr>
            </table>
            <button id="check_out">Proceed to checkout</button>
            <div> <b> <em> NOTE : </em> </b> </div>
                By clicking on the above button, is gonna take the products
                and add them to database!
        </div>
    </section>
<!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <p>Added to your Account page! <span>Click anywhere</span> </p>
        </div>
    </div>


<?php $__env->stopSection(); ?>
</body>

</html>

<?php echo $__env->make('layouts.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mohamedabdelwahed/Downloads/UNICT_CARRIER/hw2_reale/resources/views/cart.blade.php ENDPATH**/ ?>