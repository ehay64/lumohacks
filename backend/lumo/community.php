<?php

    function queryDb($query)
    {
        global $connection;
        $result = mysqli_query($connection, $query);
        if (!$result)
        {
            http_response_code(500);
            exit("DB Query Error");
        }
        
        $array = array();
        while ($row = mysqli_fetch_assoc($result))
        {
            array_push($array, $row);
        }
        return $array;
    }

    function get()
    {
        global $data;

        $id = $data["community_id"];
        $query = "select * from community_name where community_id = " . $id;
        $result = queryDb($query);
        print(json_encode($result));
    }

    function getAll()
    {
        global $data;

        $query = "select * from community_name";
        $result = queryDb($query);
        print(json_encode($result));
    }

    function set()
    {
        global $data;

        
    }

    function newCommunity()
    {
        global $data;

        
    }

    header('Access-Control-Allow-Origin: *');
    
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

        case "newCommunity":
            newCommunity();
            break;

        default:
            http_response_code(400);
            print("Unsupported Method: " . $data["method"]);
            break;
    }
?>
