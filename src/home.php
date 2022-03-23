<?php 
include "./function/db.php";
session_start();

$username = $_SESSION["username"];
$id = $_SESSION['id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h4 class="text-center p-5" style="color: seagreen;text-shadow: 2px 2px 10px #000;">Select option</h4>
        <hr>
        <div class="row mb-5 mt-5">
            <div class="col-sm d-flex justify-content-center">
                <a href="input_data.php" class="inputdata"><button class="btn btn-primary">Input Data</button></a>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <a href="view.php"><button class="btn btn-success">View Data</button></a>
            </div>
        </div>
    </div>

</body>
</html>