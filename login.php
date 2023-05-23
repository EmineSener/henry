<?php
require_once "config.php";

$username= $_POST["username"];
$pass = $_POST["password"];

// $sql ="SELECT *  FROM `users` WHERE  AND `password` = `$pass`";
// giris kontrol
$sql = "SELECT * FROM users WHERE username='$username' and password='$pass'";

$q = mysqli_query($conn, $sql);

// type ckebilmek icn giris yapan kullanicinin id'sini de cekiyoruz 
$sql2 = "SELECT id FROM users WHERE username='$username' and password='$pass'";
$q2=mysqli_query($conn, $sql2) ;
$employee = mysqli_fetch_assoc($q2);
// $employee_id =$employee['id'];

// 
$num =mysqli_num_rows($q) ;

if($num == 0){
    echo "Boyle bir kayit yok"; 
    exit();
}
else{
    $employee_id =$employee['id'];
}
$sql3 = "SELECT type FROM users WHERE id = $employee_id";
$q3 = mysqli_query($conn, $sql3);
$row = mysqli_fetch_assoc($q3);
$type = $row['type'];

// 3 tip sayfa kullanicisi 
// yonetici kullanici ve calisan ucu de ayri sayfalara yonelndirilir
// session burda baslatilir
if($num >0){
    session_start();
    if($type === "yonetici"){
        $_SESSION['user'] = $employee_id;
        header("Location: yonetici.php");
        die();
    }
    else if ($type === "calisan"){
        $_SESSION['user'] = $employee_id;
        header("Location: employee.php");
        die();
    }
    else{
        $_SESSION['user'] = $employee_id;
        header("Location: index.php");
        die();

    }
}
?>