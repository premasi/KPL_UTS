<?php 
include "./function/db.php";

session_start();

$username = $_SESSION['username'];
$id = $_SESSION['id'];

$query = "SELECT * FROM `mahasiswa` WHERE `id_admin` = $id"; //menampilkan data sesuai id akun
global $connection;

$result = mysqli_query($connection, $query);

if(!$result){
    die('Query failed' . mysqli_error($connection));
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../foto/download.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blinking</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand p-2" href="home.php"><h3><b>Blinking</b></h3></a>
        </div>
        <a class="navbar-brand p-2" href="landing.php"><?php echo $username ?></a>
    </nav>

    <div class="container">
        <a class="btn btn-warning mt-5 mb-5" href="home.php" style="color: white;">Back</a>
    </div>

    <div class="container">
        <div class="col-xs-6">
        <?php
            //association array
            while($row = mysqli_fetch_assoc($result)){
        ?> 
            
        <pre>
        <?php
            print_r($row);
        } 
        ?>           
        </pre>
        </div>
    </div>
</body>
</html>