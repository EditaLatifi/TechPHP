<?php 
include 'config.php';
$serialnumber = $_GET['updateserialnumber'];
$sql = "Select * from `regjistropajisjen` where serialnumber=$serialnumber";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$serialnumber = $row['serialnumber'];
$name = $row['name'];
$model = $row['model'];
$version = $row['version'];
$imei= $row['imei'];
$meid= $row['meid'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $model = $_POST['model'];
    $version = $_POST['version'];
    $imei= $_POST['imei'];
    $meid= $_POST['meid'];
    $sql="update `regjistropajisjen` set serialnumber=$serialnumber,name='$name',model='$model',version='$version',imei='$imei',meid='$meid'
    where serialnumber=$serialnumber";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo '<script>alert(' . '"Pajisja ' . $name .' u ndryshua me sukses ");
        window.location.href="ballina.php";
        </script>';
    }else{
        die(mysqli_error($conn));
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
                        <li><a href="#">Rreth nesh</a></li>
                        <li><a href="#">Kontakti</a></li>
                    </ul>
                </div>
                <div class="regjistrimi">
                    <h1>Ndrysho Pajisjen!</h1>
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
                            <button name="submit" class="btn">Ndrysho</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>