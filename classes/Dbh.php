<?php

class Dbh {
       protected function connect(){
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=beershopdb', $username, $password);
            return $dbh;
        } catch (PDOException $ex) {
            print "Error!: ". $ex->getMessage() ."</br>";
            die();
        } 
    }
}
