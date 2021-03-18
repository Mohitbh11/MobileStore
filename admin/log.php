<?php
session_start(); // Starting Session 
$error = ''; // Variable To Store Error Message 
if (isset($_POST['submit'])) { 
  if (empty($_POST['Email_id']) || empty($_POST['Password'])) { 
    $error = "Email or Password is invalid"; 
  } 
  else{ 
    // Define $email and $password 
    $Email_id = $_POST['Email_id']; 
    $Password = $_POST['Password']; 
    // mysqli_connect() function opens a new connection to the MySQL server. 
    $conn = mysqli_connect("localhost", "root", "", "mobilestore"); 
    // SQL query to fetch information of registerd users and finds user match. 
    $query = "SELECT Email_id, Password from Admin where Email_id=? AND Password=? LIMIT 1"; 
    // To protect MySQL injection for Security purpose 
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $Email_id, $Password); 
    $stmt->execute(); 
    $stmt->bind_result($Email_id, $Password); 
    $stmt->store_result(); 
    if($stmt->fetch()) //fetching the contents of the row { 
      $_SESSION['login_user'] = $Email_id; // Initializing Session
       
    header("location: adminpanel.html"); // Redirecting To Profile Page 
    
  } 
  mysqli_close($conn); // Closing Connection 
} 
?>