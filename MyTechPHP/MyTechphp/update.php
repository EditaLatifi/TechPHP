<?php 
include 'config.php';
$id = $_GET['updateid'];
$sql = "Select * from `regjistropuntorin` where ID=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$id = $row['ID'];
$name = $row['name'];
$email= $row['email'];
$password = $row['password'];
$qualification= $row['qualification'];
$contact= $row['contact'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $qualification=$_POST['qualification'];
    $contact=$_POST['contact'];
    $sql="update `regjistropuntorin` set ID=$id,name='$name',email='$email',password='$password',qualification='$qualification',contact='$contact'
    where id=$id";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo '<script>alert(' . '"Puntori u ndryshua me sukses ' . $name .'");
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
                        <li><a href="pajisja-regjistro.php">Regjistro pajisjen</a></li>
                        <li><a href="pajisjet.php">Shfaq Pajisjet</a></li>
                        <li><a href="#">Rreth nesh</a></li>
                        <li><a href="#">Kontakti</a></li>
                    </ul>
                </div>
                <div class="regjistrimi">
                    <h1>Ndrysho Punëtor!</h1>
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
                            <button name="submit" class="btn">Ndrysho</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>