<?php
// bu script cikis yap butonuna basinca gelir ve kullanici oturumunu sonlandirir
session_start();

session_destroy();

header("Location: kayitformu.php");
exit;
?>
