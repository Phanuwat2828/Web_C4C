<?php

function getConnection(): mysqli
{
    $hostname = '26.48.110.172';
    $dbName = 'test_db';
    $username = 'test_db';
    $password = 'test1234';
    $port = 9906;
    $conn = new mysqli($hostname, $username, $password, $dbName, $port);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
require_once DATABASE_DIR . '/students.php';
require_once DATABASE_DIR . '/courses.php';