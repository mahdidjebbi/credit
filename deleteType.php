<?php
include '../Controller/TypeT.php';
$typeT = new TypeT();
$typeT->deleteType($_GET["idType"]);
header('Location:ListType.php');
