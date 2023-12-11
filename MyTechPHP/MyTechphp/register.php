<?php

include 'config.php';
error_reporting(0);

session_start();
if (isset($_SESSION['username'])) {
    header("Location:index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM regjistrohuni WHERE email='$email';";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO regjistrohuni (username ,email ,password)
                    VALUES('$username' , '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                echo "<script>alert('Urime jeni regjistruar me sukses!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Oops!!!Diqka nuk është në rregull!')</script>";
            }
        } else {
            echo "<script>alert('Oops!!!Emaili jovalid!')</script>";
        }       
    } else {
        echo "<script>alert('Ooopss!!Siguroheni që keni shënuar passwordin e njejtë!')</script>";
    }
}


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTech-Regjistrimi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text">MyTech--Regjistrohu</p>
            <div class="input-group">
                <input type="text" placeholder="Perdoruesi" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Fjalekalimi" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Perserite fjalekalimin" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Regjistrohu</button>
            </div>
            <p class="login-register-text">Ke llogari? <a href="index.php">Kyquni!</a></p>
        </form>
    </div>
</body>

</html>