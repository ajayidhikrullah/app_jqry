<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "messageboard";
     
        
        $conn = new mysqli($servername, $username, $password);
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) 
        {
         die('Connection failed: ' . $conn->connect_error);
        } else {
            # code...
        return 'Connected successfully';

        }
?>