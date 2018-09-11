<?php
class config{
        const SERVERNAME="localhost";
        const DBNAME="projetphp";
        const USER="root";
        const PASSWORD="";}
        

$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD); // check le config.php
