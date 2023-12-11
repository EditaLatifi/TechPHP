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
    <title>Mytech-Puntoret</title>
</head>
<body>
    <div class="col">
        <div class="btn-mbrapa">
            <a href="ballina.php">Mbrapa</a>
        </div>
        <div class="tabela">
            <button><a href="ballina.php">Regjistroni Punëtor</a></button>
            <table>
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Ndrysho</th>
                    <th scope="col">Fshije</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "Select * from `regjistropuntorin`";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['ID'];
                            $name = $row['name'];
                            $email= $row['email'];
                            $password = $row['password'];
                            $qualification= $row['qualification'];
                            $contact= $row['contact'];
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$password.'</td>
                            <td>'.$qualification.'</td>
                            <td>'.$contact.'</td>
                            <td><button><a href="update.php?updateid='.$id.'">Update</button></td>
                            <td><button><a href="delete.php?deleteid='.$id.'">Delete</button></td>
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