<?php 
//berfungsi untuk menyambung file dengan MySQL
$connection = mysqli_connect('localhost', 'root', '', 'kpl');

if(!$connection){
    echo "Connection failed";
}


?>