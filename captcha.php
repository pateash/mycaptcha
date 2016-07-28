<?php
  //this file generationg a captch image
	session_start();
	require_once("./phptextClass.php");	
	/*create class object*/
	$phptextObj = new phptextClass();	
	/*phpcaptcha function to genrate image with text*/
	$phptextObj->phpcaptcha('#162453','#fff',150,60);	//first argument is textcolor, second argument is background color ,then image width and height
 ?>