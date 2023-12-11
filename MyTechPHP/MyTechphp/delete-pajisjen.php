<?php 
include 'config.php';
if(isset($_GET['deleteserialnumber'])){
    $serialnumber = $_GET['deleteserialnumber'];
    $sql = "delete from `regjistropajisjen` where serialnumber=$serialnumber";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo '<script>alert(' . '"Pajisja me nr.serik ' . $serialnumber .' u fshi me sukses!");window.location.href="pajisja.php";</script>';
    }else{
        die(mysqli_error($conn));
    }
}
?>