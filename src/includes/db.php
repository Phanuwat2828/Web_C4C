<?php

function getConnection(): mysqli
{
    $hostname = '26.48.110.172';
    $dbName = 'db_test';
    $username = 'Mytest';
    $password = 'MYSQL_ROOT_PASSWORD';
    $port = 9906;
    $conn = new mysqli($hostname, $username, $password, $dbName, $port);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
require_once DATABASE_DIR . '/students.php';