<?php

function getConnection(): mysqli
{
    $hostname = '26.245.160.254';
    $dbName = 'Univecity';
    $username = 'db_test';
    $password = 'test1234';
    $port = 9906;
    $conn = new mysqli($hostname, $username, $password, $dbName, $port);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
require_once DATABASE_DIR . '/students.php';
require_once DATABASE_DIR . '/login.php';
require_once DATABASE_DIR . '/action.php';