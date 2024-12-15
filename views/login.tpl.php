<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./static/css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="arrow">
        <button class="back"><a href="index.php"><i class='bx bx-arrow-back' style='color:#ffffff' ></i></a></button>
    </div>
        <div class="wrapper">
                <form action="">
                    <h1>Login</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Username" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" required>
                        <i class='bx bxs-lock-alt' style='color:#ffffff' ></i>
                    </div>
                </form>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="forgot.php">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </div>

</body>

</html>