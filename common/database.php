<?php
    function getConnection()
    {
        $host = '192.168.16.185';
        $db_name = 'php_api';
        $username = 'aufawibowo';
        $password = 'password';
        $conn= new mysqli($host, $username, $password, $db_name);
        if ($conn->connect_error) {
            $conn= null;
        }
        return $conn;
    }
