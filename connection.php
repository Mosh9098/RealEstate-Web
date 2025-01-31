<?php
$db_host = "localhost";
$db_user = "root";
$db_pwd = "";
$db_name = "real_estate";

$con = mysqli_connect($db_host, $db_user, $db_pwd, $db_name);
if (!$con) {
    echo "Connection problem";
    exit();
}