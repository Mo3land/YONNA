<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd ="ropa";

$conecta = mysqli_connect($server,$user,$pass,$bd);
if($conecta ->connect_error){
die("no se conecto xd".$conecta->connect_error);
}
?>