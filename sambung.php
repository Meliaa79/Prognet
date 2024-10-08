<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "our_workspace";

//buat koneksi
$db = mysqli_connect($hostname, $username, $password, $dbname);

//memeriksa koneksi
if($db->connect_error){
    echo "Koneksi database rusak ";
    die("error!");
}

?>
