<?php 
//PARTE DE LA RAIZ(INDEX) POR ESO NO VOY UNA CARPETA ATRAS
 require_once("models/persons_models.php");
$persons = new Persons_model();

$matriz_persons= $persons->get_persons();
require_once("views/persons_views.php");




?>