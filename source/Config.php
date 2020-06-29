<?php 

    define("ROOT", "http://localhost/login");
    define("SITE", "LOGIN EXERCISE");

    function url(string $uri = null) : string{
        if($uri){
            return ROOT."/{$uri}";
        }
    
        return ROOT;
    }