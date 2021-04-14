<?php
include_once '../racine.php';
include_once RACINE.'/service/ClasseService.php';
extract($_GET);

$es2 = new ClasseService();
$es2->create(new Classe(1, $code, $id_filiere));

header("location:../AjouterC.php");

