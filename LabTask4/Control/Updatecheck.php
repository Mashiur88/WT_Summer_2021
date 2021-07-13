<?php
include('../Model/db.php');


 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"student",$_SESSION["ID"],$_POST['firstname'],$_POST['email'],$_POST['dob'],$_POST['gender']);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}
else if (isset($_POST['Button'])) {
    if (empty($_POST['firstname']) || empty($_POST['email'])) {
    $error = "input given is invalid";
    }
    else
    {
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $searchQuery=$connection->GetUser($conobj,"student",$_POST["search"]);
    $connection->CloseCon($conobj);
    
    }
    }


?>