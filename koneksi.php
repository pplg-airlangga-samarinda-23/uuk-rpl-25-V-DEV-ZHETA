<?php
// 


$hostname = "localhost";
$username = "root";
$password = "";
$database = "posyandu";

$koneksi = new mysqli($hostname, $username, $password, $database);

if  ($koneksi -> connect_error){
    echo "tidak ada koneksi" ;
}
?>
