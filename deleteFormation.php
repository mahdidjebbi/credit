<?php
include '../Controller/FormationF.php';
$formationF = new FormationF();
$formationF->deleteFormation($_GET["idFormation"]);
header('Location:ListFormation.php');
