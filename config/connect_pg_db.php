<?php

include('db_value.inc');

try {
    // If you change db server system, change this too!
    $conn = new PDO("pgsql:host=$host port=5432 dbname=$dbname", $dbuser, $dbpass);
    
} catch (PDOException $e) {
    echo $e->getMessage();
}