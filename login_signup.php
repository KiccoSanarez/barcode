

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarCode</title>
    <link rel="stylesheet" href="style_login_signup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

    <header class="header">
        <h1><span>Bar</span>Code</h1>
    </header>

    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2 "></span>

        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>
            <form action="process-login.php" method="post">
                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" required  name="username">
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" required  name="password">
                    <label>Password</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type ="submit" class ="btn animation" style="--i:3; --j:24;">Login</button>
                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2 class="animation" style="--i:0;  --j:20;">Welcome to BarCode</h2>
            <p class="animation" style="--i:1;  --j:21;">Barangay Information Management System</p>
        </div>

        <div class="form-box register">
            <h2 class="animation"  style="--i:17;  --j:0;">Sign Up</h2>
            <form action="process-signup.php" method="post">
                <div class="input-box animation"  style="--i:18;  --j:1;">
                    <input type="text" required name="userName">
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:19;  --j:2;">
                    <input type="text" required name="email">
                    <label>Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box animation" style="--i:20;  --j:3;">
                    <input type="password" required name="password">
                    <label>Password</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type = "submit" class ="btn animation" style="--i:21;  --j:4;">Sign Up</button>
                <div class="logreg-link animation" style="--i:22;  --j:5;">
                    <p>Already have an account? <a href="#" class="login-link">Log In</a></p>
                </div>
            </form>
        </div>
        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">Welcome to BarCode</h2>
            <p class="animation"style="--i:18; --j:1;">Barangay Information Management System</p>
        </div>
    </div>
    
    <script src="script.js"></script>

</body>
</html>