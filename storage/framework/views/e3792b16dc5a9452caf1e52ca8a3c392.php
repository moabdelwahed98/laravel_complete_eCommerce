<body>

    <?php echo $__env->yieldContent('foot2'); ?>

    <footer>
        <div class="col">
            <h3 class="logo">Zalandus</h3>
            <h4>Contact</h4>
            <p><strong>Address: </strong>Via Santa Sofia, 64, 95123, Catania</p>
            <p><strong>Phone: </strong> +39 3333 33333 </p>
            <p><strong>Hours: </strong> 10:00 - 18:00, Lun - Sab</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-github"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="<?php echo e(url('about')); ?>">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="<?php echo e(url('contact')); ?>">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="<?php echo e(url('login')); ?>">Sign In</a>
            <a href="<?php echo e(url('cart')); ?>">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="copyright">
            <P> © 2023, Ecommerce Project, Mohamed Mohamed </p>
        </div>
        </div>
    </footer>
</body>
<?php /**PATH /Users/mohamedabdelwahed/Downloads/UNICT_CARRIER/MIO hw2_reale/resources/views/layouts/footer2.blade.php ENDPATH**/ ?>