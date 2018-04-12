<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
    $name = $_POST['form_name'];
    $email = $_POST['form_email'];
    $message = $_POST['form_msg'];

	//send email
   if(mail("neilpaveling@hotmail.com", "Email from:".$name, $email, $message)){
   		echo "success ";
    }
   else{
       echo $E_ALL;
    }
 }

 ?>