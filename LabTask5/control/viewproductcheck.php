<?php
include('../model/db.php');
$error="";
$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"product");
?>