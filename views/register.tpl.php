<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reg</title>
    <link rel="stylesheet" href="./static/css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="arrow">
        <button class="back"><a href="login.php"><i class='bx bx-arrow-back' style='color:#ffffff' ></i></a></button>
    </div>

    <div class="home">
        <button class="start"><a href="index.php"><i class='bx bxs-home' style='color:#ffffff' ></i></a></button>
    </div>

    <div class="wrapper">

        <h1>Registration</h1>
            <div class="input-box">
                <input type="text" placeholder="Name" required>
                <i class='bx bxs-user-rectangle' style='color:#ffffff' ></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Last Name" required>
                <i class='bx bx-user-pin' style='color:#ffffff' ></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" required>
                <i class='bx bxl-gmail' style='color:#ffffff' ></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Confirm Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="btn">Register</button>
    
            <div class="register-link">
                <p>Do you have account? <a href="login.php">Login</a></p>
            </div>
        </div>
        </form>

    </div>
</body>

</html>