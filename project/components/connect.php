<?php

$db_host = 'database-2.ceixpj0ratbh.us-east-1.rds.amazonaws.com'; // Replace with your RDS endpoint
$db_name = 'course_db';
$db_user = 'admin'; // Replace with your database username
$db_password = 'Ramithy123'; // Replace with your database password

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

function unique_id() {
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $rand = array();
    $length = strlen($str) - 1;
    for ($i = 0; $i < 20; $i++) {
        $n = mt_rand(0, $length);
        $rand[] = $str[$n];
    }
    return implode($rand);
}

?>