<?php
  class Persons_model{
    
    private $db;
    private $persons;

    public function __construct(){
      require_once("models/conexion.php");
      $this->db = new Connect;
      $this->persons=array();
    }

    public function get_persons($start, $limit){
      $sql = mysqli_query($this->db->connection(),"SELECT * FROM datos_usuarios LIMIT $start, $limit");
      while($row = mysqli_fetch_assoc($sql)){
        $this->persons[]= $row;
      }
    return $this->persons;

    }
  }

?>