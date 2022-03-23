<?php 
include "db.php";

function createAdmin($submit){ //berfungsi untuk membuat akun baru
    global $connection;

    if($submit){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username); //supaya dapat inputan tidak mempengaruhi database
        $password = mysqli_real_escape_string($connection, $password);

        $hashformat = "2y$10$"; //untuk menencrypt password pengguna
        $salt = "willyoumarrymeyeahjust";
        $hash_and_salt = $hashformat . $salt;
        $passwords = crypt($password, $hash_and_salt);

        $query = "INSERT INTO admin(username, password) "; //query mysql
        $query .= "VALUES ('$username', '$passwords')";

        $result = mysqli_query($connection, $query);

        header("location: login.php");

        if(!$result){ // kalo query gagal maka akan menampilkan ini
            die('Query failed' . mysqli_error($connection));
        }
    }
    
}

/*function readAdmin($submit){
    session_start();
    global $connection;

    $link = "./login.php";

    $query = "SELECT * FROM admin WHERE username = '". $username ."' AND password = '".$password."'" ;

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) 
    {
        echo "pass"; //Pass, do something
    } 
    else 
    {
        echo "<a href='".$link."' class='active'>Link</a>";
    }

    if(!$result){
        die('Query failed' . mysqli_error($connection));
    }
}*/



?>