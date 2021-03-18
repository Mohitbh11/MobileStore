<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
$conn = mysqli_connect("localhost", "root", "", "mobilestore"); 
session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user']; 
// SQL Query To Fetch Complete Information Of User 
$query = "SELECT Email_id from Admin where Email_id = '$user_check'"; 
$result = mysqli_query($conn, $query); 
$row = mysqli_fetch_assoc($result);
$login_session = $row['Aname'];
?>