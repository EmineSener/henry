<?php

  require_once "config.php";

    if(isset($_POST["name"])){
      $form_username = $_POST["username"];
      $form_name = $_POST["name"];
      $form_surname = $_POST["surname"];
      $form_email = $_POST["email"];
      $form_tel = $_POST["tel"];
      $form_password = $_POST["password"];
      $form_type = $_POST["type"];
    //   echo $form_username;
    }
    // mysqli_query($db,"INSERT INTO (username)");


    
// baglanti kontrol
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// kulalnic ekleme sorgusu 
$sql = "INSERT INTO  `users` ( `username`,`name`,`surname`, `email`,`tel`, `password`, `type`) VALUES ('$form_username','$form_name','$form_surname','$form_email','$form_tel','$form_password','$form_type')";

if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
// ana sayfaya donus
header("Location: index.php");
?>