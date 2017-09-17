<?php
    
    /*
     * function get()
     *
     * This function is used to retrieve the entire data associated with a single user.
     *
     * Parameters:
     * abuser_id: the primary key of the user to retrieve
     *
     * Return:
     * aubser_id: 
     * first_name:
     * last_name:
     * substance_using:
     * phone_number:
     * mental_health_issue:
     * community_id:
     * gender:
     * date_of_birth:
     * group_id:
     * email:
     */
    function get()
    {
        global $connection;
        global $data;

        //Get the data from the database

        print(json_encode($data));
    }

    function getAll()
    {
        global $connection;
        global $data;

        //Get all the users

        print(json_encode($data));
    }

    /*
     * function set()
     *
     * This function is used to set any given values for a user.
     * If an attribute is not specified, the current value remains and is not overwritten.
     *
     * Parameters:
     * abuser_id: the primary key of the user
     * (any valid parameters)
     *
     * Return:
     * abuser_id: the primary key of the user
     * (valid parameters that have been set)
     */
    function set()
    {
        global $connection;
        global $data;

        //Set and get the data from the database

        print(json_encode($data));
    }

    /*
     * function newUser()
     *
     * This function is used to create a new user in the database with a set of given values.
     *
     * Parameters:
     * name: full name of the user
     * (any valid parameters)
     *
     * Return:
     * abuser_id: the primary key of the new user
     * name: full name
     * (valid parameters that have been set)
     */
    function newUser()
    {
        global $connection;
        global $data;

        //Add the new user to the database

        print(json_encode($data));
    }

    /*
     * function getGroups()
     *
     * Get an array of all the groups this user is associated with.
     *
     * Parameters:
     * abuser_id: the primary key of the new user
     *
     * Return:
     * abuser_id: the primary key of the new user
     * groups: an array of groups the user belongs to
     */
    function getGroups()
    {
        global $connection;
        global $data;

        //Get all the groups this user is associated with

        print(json_encode($data));
    }

    /*
     * function addGroup()
     *
     * Add a specific user to a given group.
     *
     * Parameters:
     * abuser_id: the primary key of the user
     * group_id: the id of the group to add
     *
     * Return:
     * abuser_id: the primary key of the user
     * group_id: the id of the group to add
     */
    function addGroup()
    {
        global $connection;
        global $data;

        //Add the user to a specific group

        print(json_encode($data));
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

        case "newUser":
            newUser();
            break;

        case "getGroups":
            getGroups();
            break;
        
        case "addGroup":
            addGroup();
            break;

        default:
            http_response_code(400);
            break;
    }
?>
