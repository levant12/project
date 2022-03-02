<?php

class dbh {
    protected function connect(){
        $username = "root";
        $password = "";
        $dbh = new PDO('mysql:host=localhost;dbhname=shop', $username, $password);
        return $dbh;
    }
}