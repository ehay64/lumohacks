<?php

    function get()
    {
        global $connection;
        global $data;


    }
    
    function getAll()
    {
        global $connection;
        global $data;

        
    }

    function set()
    {
        global $connection;
        global $data;

        
    }

    function newHealth()
    {
        global $connection;
        global $data;

        
    }

    //Connect to the db
    $servername = "localhost";
    $username = "lumo";
    $password = "12345678";
    $dbname = "lumo";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if(!$connection)
    {
        http_response_code(500);
        exit("DB Connection Error");
    }

    $data = json_decode($_POST["json"], true);

    switch ($data["method"])
    {
        case "get":
            get();
            break;
 
        case "getAll":
            getAll();
            break;

        case "set":
            set();
            break;
        
        case "newHealth":
            newHealth();
            break;

        default:
            http_response_code(400);
            break;
    }
?>
