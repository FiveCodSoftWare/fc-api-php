<?php

class Conectar{

    protected $dbh;

    protected function Conexion(){
        try{
            $conectar = $this->dbh = new PDO("mysql:host=localhost;port=3308;dbname=api_php", "root", "service123");
           return $conectar;

        }catch(Exception $e){
            print "!error DB:" .$e->getMessage()."<br/>";
            die();
        }
    }

    public function set_name(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}




?>