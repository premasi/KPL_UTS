<?php 
include "./function/db.php";
session_start();

$username = $_SESSION["username"];
$id = $_SESSION["id"];

$submit = isset($_POST['submit']);

if($submit){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $tugas = $_POST['tugas'] * 0.1;
    $quiz = $_POST['quiz'] * 0.2;
    $uts = $_POST['uts'] * 0.3;
    $uas = $_POST['uas'] * 0.4;
    $total = ($tugas + $quiz + $uts + $uas);
    $ipk;

    if($total >= 90){
        $ipk = "A";
    } else if ($total<90 && $total>= 85){
        $ipk = "A-";
    } else if ($total<85 && $total>= 80){
        $ipk = "B+";
    } else if ($total<80 && $total>= 75){
        $ipk = "B";
    } else if ($total<75 && $total>= 70){
        $ipk = "B-";
    } else if ($total<70 && $total>= 65){
        $ipk = "C+";
    } else if ($total<65 && $total>= 60){
        $ipk = "D";
    } else {
        $ipk = "E";
    }

    global $connection;
    $nim = mysqli_real_escape_string($connection, $nim);
    $nama = mysqli_real_escape_string($connection, $nama);
    $matkul = mysqli_real_escape_string($connection, $matkul);
    $tugas = mysqli_real_escape_string($connection, $tugas);
    $quiz = mysqli_real_escape_string($connection, $quiz);
    $uts = mysqli_real_escape_string($connection, $uts);
    $uas = mysqli_real_escape_string($connection, $uas);
    $id = mysqli_real_escape_string($connection, $id);
    $ipk = mysqli_real_escape_string($connection, $ipk);

    $query = "INSERT INTO mahasiswa (nim, nama, mata_kuliah, nilai_tugas, nilai_quiz, nilai_uts, nilai_uas, total, id_admin, grade) ";
    $query .= "VALUES ('$nim', '$nama', '$matkul', '$tugas', '$quiz', '$uts', '$uas', '$total','$id', '$ipk')";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die('Query failed' . mysqli_error($connection));
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../foto/download.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Blinking</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand p-2" href="home.php"><h3><b>Blinking</b></h3></a>
        </div>
        <a class="navbar-brand p-2" href="#"><?php echo $username ?></a>
    </nav>

    <div class="container">
        <a class="btn btn-warning mt-5 mb-5" href="home.php" style="color: white;">Back</a>
    </div>

    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center mb-5">Input Nilai</h1>
            <form action="input_data.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nim" name="nim">
                </div>
                
                <br></br>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nama" name="nama">
                </div>
                <br></br>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="mata kuliah" name="matkul">
                </div>
                <br></br>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nilai tugas" name="tugas">
                </div>
                <br></br>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nilai quiz" name="quiz">
                </div>
                <br></br>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nilai uts" name="uts">
                </div>
                <br></br>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="nilai uas" name="uas">
                </div>
                <br></br>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

</body>
</html>