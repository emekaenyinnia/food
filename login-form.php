

<!DOCTYPE html>
<!-- saved from url=(0074)https://www.tutorialrepublic.com/snippets/bootstrap/simple-login-form.php# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./font-awesome.min.css">
<script src="./jquery-3.5.1.min.js.download"></script>
<script src="./popper.min.js.download"></script>
<script src="./bootstrap.min.js.download"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<!-- 
navigation bar  -->

<?php include("includes/nav.php")?>

<div class="login-form">
    <form action="handler.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="login" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control"   name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="https://www.tutorialrepublic.com/snippets/bootstrap/simple-login-form.php#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="https://www.tutorialrepublic.com/snippets/bootstrap/simple-login-form.php#">Create an Account</a></p>
</div>

</body></html>