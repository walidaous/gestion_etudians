<?php
include_once '../racine.php';
include_once RACINE.'/service/FiliereService.php';
extract($_GET);

$es = new FiliereService();
$es->fillierbyclass();

header("location:../index.php");

