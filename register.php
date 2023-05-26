<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
        $error = "Passwords do not match!";
    } else {
        $xmlFilePath = 'DeMesa_IT2A_FinalProject_TouristSpotInThePhilippines.xml';

        if (file_exists($xmlFilePath)) {
            $xml = simplexml_load_file($xmlFilePath);

            foreach ($xml->user as $user) {
                if ($user->username == $username) {
                    $error = "Username already exists!";
                    break;
                }
            }
        } else {
            $xml = new SimpleXMLElement('<users></users>');
        }

        if (empty($error)) {
            $user = $xml->addChild('user');
            $user->addChild('username', $username);
            $user->addChild('password', $password);

            $dom = new DOMDocument('1.0');
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;
            $dom->loadXML($xml->asXML());
            $dom->save($xmlFilePath);

            header("Location: index.php");
            exit();
        }
    }
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

<!-- SIGN UP FORM CREATION -->
<div class="background"></div>
<div class="container">
    <div class="item">
        <h2 class="logo"></i>Philippines Tourist Spots</h2>
        <div class="text-item">
            <h2>It's More Fun In<br><span>The Philippines</span></h2>
            <p>The country's official tourism slogan is “It’s More Fun in the Philippines” because whatever type of travel adventure you’re looking for, you’re bound to discover a fun experience in the Philippines. Read on to find out why visit the Philippines and why it deserves to be on top of your travel bucket list: </p>
            <div class="social-icon">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-telegram'></i></a>
            </div>
        </div>
    </div>
    <div class="login-section">

            <div class="form-box login">
                <form method="post" action="register.php">

                    <h2><?php echo "Sign Up" ?></h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="username" required>
                        <label><?php echo "Username" ?></label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="password" required>
                        <label><?php echo "Password" ?></label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="confirm_password" required>
                        <label><?php echo "Confirm Password" ?></label>
                    </div>

                    <?php if (!empty($error)): ?>
                        <p class="error" style="color: red; font-size: 10px;"><?php echo $error; ?></p>
                    <?php endif; ?>

                    <button type="submit" class="btn"><?php echo "Register" ?></button>
                    <div class="create-account">
                        <p><?php echo "Already Have An Account?" ?> <a href="index.php" class="login-link"><?php echo "Sign In" ?></a></p>
                    </div>
                </form>
            </div>
        </div>
</div>
<script src="login.js"></script>
</body>
</html>
