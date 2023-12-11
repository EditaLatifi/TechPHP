<?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $model = $_POST['model'];
        $version = $_POST['version'];
        $imei= $_POST['imei'];
        $meid= $_POST['meid'];
        $sql = "insert into `regjistropajisjen` (name,model,version,imei,meid) 
        values('$name','$model','$version','$imei','$meid')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Urime pajisja është regjistruar me sukses!')</script>";
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
        <title>Mytech</title>
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
                    <h1>Regjistro Pajisjen</h1>
                    <form method="post" class="login-email">
                        <div class="input-group">
                            <input type="text" placeholder="Emri" name="name"  required>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Modeli" name="model"  required>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Versioni" name="version"  required>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="IMEI" name="imei"  required>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="MEID" name="meid"  required>
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