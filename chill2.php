<?php

session_start();

$Email = $_POST['Email'];
$Name = $_POST['Name'];

$_SESSION['Email:'] = $Email;
$_SESSION['Name:'] = $Name;

?>
