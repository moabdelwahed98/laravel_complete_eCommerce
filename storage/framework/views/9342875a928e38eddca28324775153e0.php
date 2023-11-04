<?php $__env->startSection('foot1'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(url('/css/style1.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(url('/css/userSpaceStyle.css')); ?>">
    <title>Login</title>
</head>
<body>

    <header>
        <div class="logo">
            <a href="<?php echo e(url('/')); ?>">Zalandus</a>
        </div>
    </header>

    <section class="login_sign">

        <main>
            <h2>Login</h2>
            <form id="sign_up" name='login_form' method='post'>
                <?php echo csrf_field(); ?>
                <div>
                    <label>Username <input type=text' name='username' <?php echo e(old("username")); ?> > </label>
                </div>
                <div>
                    <label>Password <input type='password' name='password' ></label>
                </div>
                <?php if($error): ?>
                    <p class='errori'><img src="<?php echo e(url('/assets/close.svg')); ?>"/><span><?php echo e($error); ?></span></p>
                <?php endif; ?>
                <div>
                    <label>&nbsp;<input id="send" value="Login" type='submit'></label>
                </div>
            </form>
            <div class="signupLink">
                <h4>Non hai un account?</h4>
                <a href="<?php echo e(url('sign_up')); ?>">Iscriviti ora!</a>
            </div>
        </main>
    </section>

<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mohamedabdelwahed/Downloads/UNICT_CARRIER/MIO hw2_reale/resources/views/login.blade.php ENDPATH**/ ?>