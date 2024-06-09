<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>
    <?php if(session()->has('login')): ?>
        <?php echo e(session('login')); ?>

    <?php endif; ?>
    <?php if(session()->has('register')): ?>
    <?php echo e(session('resgister')); ?>

    <?php endif; ?>
    <?php if(!auth()->check()): ?>
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="formelemans">
            <div>
                <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div>
                <input type="password" name="password" required placeholder="enter password"/>
            </div>
            <button type="submit">Login</button><br>
            <p>or</p>
            <p>Don't you have an account?</p>
            <a href="<?php echo e('register'); ?>">Register</a>    
        </div>
      
    </form>
    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
    <a href="<?php echo e('logout'); ?>">Logout</a>    
    <?php endif; ?>
   
</body>
</html><?php /**PATH C:\Users\Mustafa Vural\Desktop\Laravel\auth\resources\views/auth/login.blade.php ENDPATH**/ ?>