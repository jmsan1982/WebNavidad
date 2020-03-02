<?php
        $servername = "db789493477.hosting-data.io";//archivo de la bbdd
        $username = "dbo789493477";
        $password = "Leon2014rosado*";
        $bd = "db789493477";
    
        $conn = new mysqli($servername, $username, $password, $bd);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 