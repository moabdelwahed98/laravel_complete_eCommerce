<?php $__env->startSection('foot1'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        const CHECK_USERNAME_URL = "<?php echo e(URL::to('sign_up/check/username')); ?>";
        const CHECK_EMAIL_URL = "<?php echo e(URL::to('sign_up/check/email')); ?>";
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(url('css\style1.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('css\userSpaceStyle.css')); ?>">
    <script src="<?php echo e(url('/js/signup.js')); ?>" defer></script>

    <title>Registrati!</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="<?php echo e(url('/')); ?>">Zalandus</a>
        </div>
    </header>


    <section class="login_sign">
        <main>
            <h2>Registrati, se non fatto</h2>
            <form id="sign_up" name='signup' method='post'  enctype="multipart/form-data" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="name">
                    <label>Nome <input type='text' name='name' value = <?php echo e(old ("name")); ?>></label>
                    <div class="jsError"><img src="<?php echo e(url('/assets/close.svg')); ?>"/><span>Devi inserire il tuo nome</span></div>
                </div>
                <div class="surname">
                    <label>Cognome <input type='text' name='surname' value = <?php echo e(old ("surname")); ?> ></label>
                    <div class="jsError"><img src="<?php echo e(url('/assets/close.svg')); ?>"/><span>Devi inserire il tuo cognome</span></div>
                </div>
                <div class="username">
                    <label>Username <input type='text' name='username' value = <?php echo e(old ("username")); ?>></label>
                    <div class="jsError"><img src="<?php echo e(url('/assets/close.svg')); ?>"/><span></span></div>
                </div>
                <div class="email">
                    <label>Email <input type='email' name='email' value = <?php echo e(old ("email")); ?>></label>
                    <div class="jsError"><img src="<?php echo e(url('/assets/close.svg')); ?>"/><span></span></div>
                </div>
                <div class="password">
                    <label>Password <input type='password' name='password' value = <?php echo e(old ("password")); ?>></label>
                    <div class="jsError"><img src="<?php echo e(url('/assets/close.svg')); ?>"/><span>Inserisci almeno 8 caratteri</span></div>
                </div>
                <div class="confirm_password">
                    <label>Confirm Password <input type='password' name='confirm_password' value = <?php echo e(old ("confirm_password")); ?>></label>
                    <div class="jsError"><img src="<?php echo e(url('/assets/close.svg')); ?>"/><span>Le password non coincidono</span></div>
                </div>
                <?php if($error): ?>
                    <div class='errori'><img src="<?php echo e(url('/assets/close.svg')); ?>"/><span><?php echo e($error); ?></span></div>
                <?php endif; ?>

                <div>
                    <label>&nbsp;<input id="send" value="Registrati" type='submit'></label>
                </div>
            </form>
            <div class="signupLink">
                <h4>Hai un account?</h4>
                <a href="<?php echo e(url('login')); ?>">Accedi</a>
            </div>
        </main>
    </section>
<?php $__env->stopSection(); ?>
</body>

</html>

<?php echo $__env->make('layouts.footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mohamedabdelwahed/Downloads/UNICT_CARRIER/MIO hw2_reale/resources/views/sign_up.blade.php ENDPATH**/ ?>