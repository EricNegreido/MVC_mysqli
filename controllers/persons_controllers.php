<?php 
//PARTE DE LA RAIZ(INDEX) POR ESO NO VOY UNA CARPETA ATRAS
 require_once("models/persons_models.php");
$persons = new Persons_model();
require_once("models/pagination.php");
$matriz_persons= $persons->get_persons($start, $limit);
require_once("views/persons_views.php");

?>