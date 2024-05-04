<?php
  class Connect{
    public static function connection(){
      // ESTA VARIABLES SE ALMACENAN EN UN ARCHIVO APARTE CONFIG
      try {
        $host = "localhost";
        $db = "CRUD_PDO";
        $user = "root";
        $pass = "";
        $connection = mysqli_connect($host, $user, $pass, $db);
        mysqli_set_charset($connection, "utf8");

        
      } catch (Throwable $th) {
        die("ERROR " . mysqli_errno($connection) . ":". mysqli_error($connection) . "\n");
      }
      return $connection;
    }
  }
?>