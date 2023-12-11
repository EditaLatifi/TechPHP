<?php 

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            <?php include 'ballina-style.css'; ?>
        </style>
    <title>Mytech-Pajisjet</title>
</head>
<body>
    <div class="col">
        <div class="btn-mbrapa">
            <a href="ballina.php">Mbrapa</a>
        </div>
        <div class="tabela">
            <button><a href="pajisja.php">Regjistroni Pajisje</a></button>
            <table>
                <thead>
                <tr>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Model</th>
                    <th scope="col">Version</th>
                    <th scope="col">IMEI</th>
                    <th scope="col">MEID</th>
                    <th scope="col">Ndrysho</th>
                    <th scope="col">Fshije</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "Select * from `regjistropajisjen`";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $serialnumber = $row['serialnumber'];
                            $name = $row['name'];
                            $model = $row['model'];
                            $version = $row['version'];
                            $imei= $row['imei'];
                            $meid= $row['meid'];
                            echo '<tr>
                            <th scope="row">'.$serialnumber.'</th>
                            <td>'.$name.'</td>
                            <td>'.$model.'</td>
                            <td>'.$version.'</td>
                            <td>'.$imei.'</td>
                            <td>'.$meid.'</td>
                            <td><button><a href="update-pajisjen.php?updateserialnumber='.$serialnumber.'">Update</button></td>
                            <td><button><a href="delete-pajisjen.php?deleteserialnumber='.$serialnumber.'">Delete</button></td>
                            </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>