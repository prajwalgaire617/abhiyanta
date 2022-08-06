
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style/style.css">
    <link rel="manifest" href="manifest.json" />
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-banner">
            
        </div>
        <div class="login-form">
            <h1 class="login-title">LOGIN</h1>
            <form action="./server/login_server.php" method="POST" enctype="multipart/form-data">
                <div class="input-fields">
                    <input class = "field" type="text" required placeholder="Email" name="login_email">
                    <input class = "field" type="password" required placeholder="Password" name="login_password">
                    <div class="rememberMe">
                    <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
                    </div>
                    <button class="login-btn" type="submit" name="login_submit">Login</button>
                </div>
            </form>
            <div class="line"></div>
            <button class="register-btn"><a href="./registration.php">Register</a></button>
        </div>
    </div>
    <script src="js/app.js"></script>
    <script>

    </script>
    
</body>
</html>