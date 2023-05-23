<?php
require_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id= $_POST['id'];
    
    if(isset($_POST["urun"])){
      // guncellemem bilgilerini ceker
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
  
  // guncellleme sorguus
  $guncelle_sql = "UPDATE products SET urun = '$urun',model ='$model', kategori = '$kategori', fiyat = $fiyat, stok = $stok WHERE id = '$id'";
  
  // $sql ="UPDATE products ".
  // "SET urun='$urun',model='$model',fiyat='$fiyat',stok='$stok' ".
  // "WHERE id=".$_GET['id'];
  
if (mysqli_query($conn, $guncelle_sql)) {
    echo "Eleman başarıyla güncellendi.";
} else {
    echo "Güncelleme işlemi sırasında bir hata oluştu: " . mysqli_error($conn);
}

// Veritabanı bağlantısını kapatma
mysqli_close($conn);
header("Location: yonetici.php");
}
?>