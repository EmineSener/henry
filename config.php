<?php
// localde calistirirken yoruma al
$db_host="sql203.epizy.com";
$db_user = "epiz_34268157";
$db_pass = "CgpBSr7rUZ";
$db_name = "epiz_34268157_henry";

// localde calistirmak icin burayı yorumdan cikart
// $db_host="localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "henry";

// baglanti
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// turkce karakter
mysqli_set_charset($conn,  "utf8mb4");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

