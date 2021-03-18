<?php
session_start(); 
if(session_destroy()) // Destroying All Sessions
 { 
  header("Location: Location:http://localhost/MobileShop/index.html"); // Redirecting To Home Page 
}
?>