
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="connectivity.php" method="POST">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">Remember me</label>
                </div>
                <button type="submit" >Login</button>
                <div class="signUp-link">
                    <p>Don't have an account? <a href="#" class="signUpBtn-link">Sign up</a></p>
                    <p>Are you a admin? <a href="ad.html" class="signUpBtn-link">Admin login</a></p>
                </div>
            </form>
        </div>


        <div class="form-wrapper sign-up">
            <form action="connectivity2.php" method="POST">
                <h2>sign-up</h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>

                <div class="input-group">
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>

                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit">Sign up</button>
                <div class="signUp-link">
                    <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>
