<?php

  require_once "config.php";
//   session da kullanici id bulunur ve satis kaydinakullanic id de eklenir
// bu sayede en cok satis yapan kullaniici belirlenebilri
    session_start();
    // kayit bilgilerini ceker
      $urun_id = $_POST["id"];
      $employee_id = $_SESSION["user"];
      $musteri_name = $_POST["isim"];
      $tel =$_POST["tel"];
      $date = $_POST["date"];
      $time = $_POST["time"];
      $fiyat = $_POST["fiyat"];
      $adet = $_POST["adet"];
      $hasilat = $_POST["hasilat"];
      

    // mysqli_query($db,"INSERT INTO (username)");


    
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// ekleme sorgusu 
$sql = "INSERT INTO satis ( urun_id, employee_id , isim , tel , date, time, fiyat, adet , hasilat) 
VALUES ('$urun_id' ,'$employee_id','$musteri_name','$tel', '$date', '$time' , '$fiyat', '$adet', '$hasilat')";

if (mysqli_query($conn, $sql)) {
   
  
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
// ekleme islemi tamalaninca calisan ana sayfasina donus
header("Location: employee.php");
?>