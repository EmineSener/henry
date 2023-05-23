<?php

  require_once "config.php";

    if(isset($_POST["urun"])){
        // urun kayit formundan cekilen bilgiler
      $urun = $_POST["urun"];
      $model =$_POST["model"];
      $kategori = $_POST["kategori"];
      $fiyat =intval( $_POST["fiyat"]);
      $stok = intval($_POST["stok"]);
      $img = $_POST["img"];
      
    }
    // mysqli_query($db,"INSERT INTO (username)");


    
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// ekleme sorguus
$sql = "INSERT INTO `products`( `urun`,`model`,`kategori`, `fiyat`, `stok`, `img`) 

VALUES ('$urun','$model','$kategori',$fiyat,$stok,'$img')";

if (mysqli_query($conn, $sql)) {
    
    
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
// islem sonrasi yonetici ana sayfasina
header("Location: yonetici.php");
?>