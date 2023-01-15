<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guvenlitarim";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
    die("Veri Tabanı Bağlantısı başarısız:" . mysqli_connect_error());
}
?>