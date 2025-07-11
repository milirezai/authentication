<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="assets/css/">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form method="post" action="auth/SignUp.php" >
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="userName" placeholder="UserName" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="text" name="mobileNumber" placeholder="MobileNumber" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button type="submit" name="register">Sign up</button>
        </form>
    </div>

    <div class="login">
        <form method="post" action="auth/LogIn.php">
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email" required="">
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</div>
</body>
</html>
