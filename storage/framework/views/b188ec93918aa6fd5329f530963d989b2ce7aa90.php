<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<!-- Style --> <link rel="stylesheet" href="<?php echo url('public/css/style.css'); ?>" type="text/css" media="all">
<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->
</head>
<!-- //Head -->
<!-- Body -->
<body>
<?php if(count($errors) > 0): ?>
<ul>
    <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo $error; ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>)
<div class="banner">
<div class="agileinfo-dot">
    <h1>FASHION</h1>
    <div class="w3layoutscontaineragileits">
    <h2>Sign In</h2>
        <form action="#" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="email" Name="Username" placeholder="EMAIL" required="">
            <input type="password" Name="Password" placeholder="PASSWORD" required="">
            <ul class="agileinfotickwthree">
                <li>
                    <input type="checkbox" id="brand1" value="">
                    <label for="brand1"><span></span>Remember me</label>
                    <a href="#">Forgot password?</a>
                </li>
            </ul>
            <div class="aitssendbuttonw3ls">
                <input type="submit" value="SIGNIN">
                <div class="clear"></div>
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>