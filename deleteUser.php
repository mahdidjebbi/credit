<?php
include '../Controller/UserU.php';
$userU = new UserU();
$userU->deleteUser($_GET["idUser"]);
header('Location:ListUser.php');
