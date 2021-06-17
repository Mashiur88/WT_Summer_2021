<?php
$validName="";
$validEmail="";
$validpassWord="";
$validcomment="";
$validRadioButton="";
$validcheckbox="";
$h1=$h2=$h3="";
$name=$email=$password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["fname"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["passWord"];
    if(empty($_REQUEST["fname"])||(strlen($_REQUEST["fname"])<1))
    {
        $validName="you must enter name";
    }
    else
    {
        $name=$_REQUEST["fname"];
    }
    if(empty($_REQUEST["email"])||!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\+_\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $validEmail="you must enter email";
    }
    else
    {
        $email=$_REQUEST["email"];
    }
    if(empty($_REQUEST["passWord"])||(strlen($_REQUEST["passWord"])<1))
    {
        $validpassWord="you must enter password";
    }
    else
    {
        $password=$_REQUEST["passWord"];
    }
    if(empty($_POST["comment"])||(strlen($_POST["comment"])<1))
    {
        $validcomment="Enter text here....";
    }
    if(!isset($_REQUEST["sing"])&&!isset($_REQUEST["dance"])&&!isset($_REQUEST["read"]))
    {
        $validcheckbox="please select at least one box";
    }
    else
    {
        if(isset($_REQUEST["sing"]))
        {
            $h1=$_REQUEST["sing"];
        }
        if(isset($_REQUEST["dance"]))
        {
            $h2=$_REQUEST["dance"];
        }
        if(isset($_REQUEST["read"]))
        {
            $h3=$_REQUEST["read"];
        }

    }
    if(isset($_REQUEST["gender"]))
    {
        $validRadioButton=$_REQUEST["gender"];
    }
    else
    {
        $validRadioButton="please select at least one radio";
    }
}



?>