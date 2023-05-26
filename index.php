<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validateUser($username, $password)) {
        echo "<script>window.location.href = 'home.php';</script>";
    } else {
        $error = "Invalid username or password!";
    }
}

function validateUser($username, $password)
{
    $xml = simplexml_load_file('DeMesa_IT2A_FinalProject_TouristSpotInThePhilippines.xml');

    foreach ($xml->user as $user) {
        if ($user->username == $username && $user->password == $password) {
            return true;
        }
    }

    return false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tourist Spot Official</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<!-- LOGIN FORM CREATION -->
<div class="background"></div>
<div class="container">
    <div class="item">
        <h2 class="logo"><i class='bx bxl-xing'></i>Philippines Tourist Spots</h2>
        <div class="text-item">
            <h2>It's More Fun In<br><span>The Philippines</span></h2>
            <p>The country's official tourism slogan is “It’s More Fun in the Philippines” because whatever type of travel adventure you’re looking for, you’re bound to discover a fun experience in the Philippines. Read on to find out why visit the Philippines and why it deserves to be on top of your travel bucket list: </p>
            <div class="social-icon">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
    </div>
    <div class="login-section">
        <div class="form-box login">
            <form method="POST">
                <h2>Sign In</h2>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-user'></i></span>
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>

                <?php if (!empty($error)): ?>
                    <div class="error-container" style="color: red; font-size: 10px;">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>


                <button type="submit" class="btn">Login</button>
                <div class="create-account">
                    <p>Create A New Account? <a href="register.php" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="login.js"></script>
</body>
</html>