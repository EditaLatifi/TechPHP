<?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $qualification= $_POST['qualification'];
        $contact= $_POST['contact'];
        $sql = "insert into `regjistropuntorin` (name,email,password,qualification,contact) 
        values('$name','$email','$password','$qualification','$contact')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Urime puntori është regjistruar me sukses!')</script>";
        }else{
            echo"<script>alert('Regjistrimi dështoi')</script>";
        }
        }
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            <?php include 'ballina-style.css'; ?>
        </style>
        <title>Mytech-mirsevjen</title>
    </head>
    <body>
        <div class="container">
            <div class="mir-se-vjen">
                <h1>Mirë se erdhe:<span><?php echo  $_SESSION['username']; ?></span></h1>
            </div>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
            <div class="ballina">
                <div class="navigimi">
                    <ul>
                        <li><a class="active" href="ballina.php">Ballina</a></li>
                        <li><a href="puntoret.php">Shfaq puntoret</a></li>
                        <li><a href="pajisja.php">Regjistro pajisjen</a></li>
                        <li><a href="shfaq-pajisjen.php">Shfaq Pajisjet</a></li>
                        <li><a href="rrethnesh.php">Më Shumë</a></li>
                        <li><a href="#">Kontakti</a></li>
                    </ul>
                </div>
                <div class="regjistrimi">
                    <h1>Regjistro Punëtor!</h1>
                    <form method="post" class="login-email">
                        <div class="input-group">
                            <input type="text" placeholder="Emri" name="name"  required>
                        </div>
                        <div class="input-group">
                            <input type="email" placeholder="Email" name="email"  required>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Fjalekalimi" name="password"  required>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Kualifikimi" name="qualification"  required>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Kontakti" name="contact"  required>
                        </div>
                        <div class="input-group">
                            <button name="submit" class="btn">Regjistro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>