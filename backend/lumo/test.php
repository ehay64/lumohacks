<?php
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

    $bus = array(
        "latitude" => "12345",
        "longitude" => "56789",
        "elevation" => 57
    );

    $json = json_encode($bus);
    print($json);
?>
