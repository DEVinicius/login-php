<?php 

    define("ROOT", "http://localhost/login");
    define("SITE", "LOGIN EXERCISE");
    define("DATABASE", [
        "host" => "localhost",
        "dbName" => "login",
        "password" => "Ralph@2411",
        "user" => "vini"
    ]);

    function url(string $uri = null) : string{
        if($uri){
            return ROOT."/{$uri}";
        }
    
        return ROOT;
    }

    //conexão com o banco de dados
    function connect():PDO{

        try {
            $conn = new PDO("mysql:host=".DATABASE["host"].";dbname=".DATABASE["dbName"], DATABASE["user"], DATABASE["password"], [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_CASE => PDO::CASE_NATURAL
                ]);
                
            return $conn;
        } catch (PDOException $e) {
            echo "Connection error: ".$e->getMessage();
        }
    }
    