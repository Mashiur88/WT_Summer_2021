<?php
include('../Model/db.php');
session_start();
$validID="";
$validpassWord="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    if(empty($_REQUEST["ID"])||empty($_REQUEST["Password"]))
    {
        $validID="you must enter your UserName or Password";
    }
    else
    {
        $username=$_REQUEST["ID"];
        $password=$_REQUEST["Password"];

        $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->CheckUser($conobj,"student",$username,$password);

    if ($userQuery->num_rows > 0) {
        $_SESSION['ID'] = $username;
        $_SESSION['Password'] = $password;

    }
    else 
    {
        $validID = "Username or Password is invalid";
    }
    $connection->CloseCon($conobj);

    }
    

}
?>