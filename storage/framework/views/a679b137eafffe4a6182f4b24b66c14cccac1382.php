<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="<?php echo url('public/css/style.css'); ?>" type="text/css" media="all">
</head>
<?php $__env->startSection('content'); ?>
<body>
<div class="banner">
<div class="agileinfo-dot">
    <h1>FASHION</h1>
    <div class="w3layoutscontaineragileits">
    <h2>Sign In</h2>
        <form action="<?php echo url('authentication/postLogin'); ?>" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="email" Name="email" placeholder="EMAIL" required="">
            <input type="password" Name="password" placeholder="PASSWORD" required="">
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