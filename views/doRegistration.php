<?php
 require(__DIR__."/../vendor/autoload.php");

 $whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


$name="";
$email="";
$confirm_email="";
$enter_message="";

echo $name=$_REQUEST["InputName"];
echo $email=$_REQUEST["InputEmail"];
echo $confirm_email=$_REQUEST["InputEmail"];
echo $enter_message=$_REQUEST["InputMessage"];
//$ime=$_REQUEST["ime"];