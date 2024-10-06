<?php
include "db.php";
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$stmt = $dbpdo->prepare("SELECT * FROM users WHERE (`username` = '$user' AND `password` = '$pass')");
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if($user){
 $_SESSION['user'] = $user;
 header("Location: http://localhost/labreport/");
}else{
    header("Location: http://localhost/labreport/login.php");
}

?>