<?php
include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location:ballina.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM regjistrohuni WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location:ballina.php");
    } else {
        echo "<script>alert('Opps!! Email ose Fjalekalimi janë gabim!')</script>";
    }
}

?>




<!DOCTYPE html>
<html>

<head>
    <title>MyTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="post" class="login-email">
            <div class="logo">
                <img src="./logo.png" alt="logo-mytech">
            </div>
            <p class="login-text">Kyqu!</p>
            <div class=" input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Fjalekalimi" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Kyqu</button>
            </div>
            <p class="login-register-text">Nuk ke llogari? <a href="register.php">Regjistrohuni!</a></p>
        </form>
    </div>
</body>

</html>