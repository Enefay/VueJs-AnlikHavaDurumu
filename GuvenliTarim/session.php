<?php 
  session_start();
  ob_start();
  require_once 'db_con.php';
  @ $kontrol= $_POST['buton'];
  if(isset($kontrol)){
    $email= $_POST['email'];
    $sifre= $_POST['sifre'];
    $bul = mysqli_query($conn,"SELECT * FROM uye WHERE uyeMail='$email' and uyeSifre='$sifre'");
    $say = mysqli_num_rows($bul);
    if($say>0){
      $goster =mysqli_fetch_array($bul);
      $_SESSION["uyeID"] = $goster["uyeID"];
      $_SESSION["uyeSehir"] = $goster["uyeSehir"];
      header('Location: weather.php');
      }   
    }
?>