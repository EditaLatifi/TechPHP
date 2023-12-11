<?php 
include 'config.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from `regjistropuntorin` where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo '<script>alert(' . '"Punotori me id ' . $id .' u fshi me sukses!");window.location.href="puntoret.php";</script>';
    }else{
        die(mysqli_error($conn));
    }
}
?>