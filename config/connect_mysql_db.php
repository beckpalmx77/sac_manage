<?php
date_default_timezone_set("Asia/Bangkok");
include('db_mysql_value.inc');

try
{
    $conn = new PDO("mysql:host=".$host.";dbname=".$dbname.";port=".$port,$dbuser, $dbpass
        ,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo "Error: " . $e->getMessage();
    exit("Error: " . $e->getMessage());
}