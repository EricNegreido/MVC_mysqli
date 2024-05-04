<?php
  class Persons_model{
    
    private $db;
    private $persons;

    public function __construct(){
      require_once("conexion.php");
      $this->db = Connect::connection();
      $this->persons=array();
    }

    public function get_persons(){
      $sql = $this->db->mysql_query("SELECT * FROM datos_usuarios");
      while($row = mysql_fetch_assoc($sql)){
        $this->persons[]= $filas;
      }
    return $this->persons;

    }
  }

?>