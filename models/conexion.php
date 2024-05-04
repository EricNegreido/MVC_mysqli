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
        mysql_set_charset("utf8", $connection);

        
      } catch (Throwable $th) {
        die("ERROR " . mysql_errno($connection) . ":". mysql_error($connection) . "\n");
      }
      return $connection;
    }
  }
?>