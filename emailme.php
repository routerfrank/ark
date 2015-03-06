<?php
$con=mysqli_connect("localhost","root","","ark");
if(mysgli_connect_errno())
{echo " failed to connect, try again later}
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$website = $_REQUEST['website'];
$message = $_REQUEST['message'];
  mail("someone@example.com", "name: $name",
  $message, "From: $email" );
  echo "Thank you for using our mail form";
  ?>