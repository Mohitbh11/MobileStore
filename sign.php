<?php
$servername = "localhost";
$username = "root";
$passw = "";
$db = "mobilestore";

// Create connection
$conn = new mysqli($servername, $username, $passw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
//Create database
/*$sql = "CREATE DATABASE mobileshop";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/
/*

// sql to create table
$sql = "CREATE TABLE Customer(
C_id VARCHAR(10) PRIMARY KEY, 
Cname VARCHAR(30) NOT NULL,
Email_id VARCHAR(40) NOT NULL,
Contactno BIGINT(10),
Password VARCHAR(15),
Cadd VARCHAR(50) NOT NULL,
Que VARCHAR(30) NOT NULL,
Ans VARCHAR(30) NOT NULL
)";


if ($conn->query($sql) === TRUE) {
    echo "Table Customer created successfully";
}
else {
    echo "Error creating table: " . $conn->error;
}*/
/*
$sql = "INSERT INTO customer (C_Id, Password, Cname, Email_id, Contactno, Cadd, Que,Ans)
VALUES ('101', 'mohit@121', 'Mohit Bhatnagar', 'john@example.com', '8796654789', 'Haripriya', 'birth', 'chittorgarh')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

if (empty($Cname) || empty($Password) || empty($Email_id)){
    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO Customer (C_Id, Password, Cname, Email_id, Contactno, Cadd, Que,Ans) VALUES (?, ?, ?, ?, ?, ?,?,?)");
    $stmt->bind_param("ssssisss", $C_id, $Password, $Cname, $Email_id, $Contactno, $Cadd, $Que, $Ans);
    //set parameter and execute
    $C_id = $_POST['C_id'];
    $Password = $_POST['Password'];
    $Cname = $_POST['Cname'];
    $Email_id = $_POST['Email_id'];
    $Contactno = $_POST['Contactno'];
    $Cadd = $_POST['Cadd'];
    $Que = $_POST['Que'];
    $Ans = $_POST['Ans'];

    $query = "SELECT *from Customer where Email_id ='$Email_id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        echo '<script>alert("Already Registered");</script>';
        echo '<h1>Redirecting....</h1><br><br>';
        echo 'Page is Redirecting Please Wait';
        echo '<a href="signup.html">   Click Here</a>';
    }
    else{
        $stmt->execute();
        echo '<script>alert("Account Created Successfully!!!");</script>';
        //echo '<h1>Page Is Redirecting</h1><br><br>';
        //echo '<h3>Please Wait</h3>';
        //echo '<a href="Login.php"> <h3>  Click Here</h3></a>';
		header("Location:http://localhost/MobileShop/Login.php");

    }

    $conn->close();
    
}

else{
    echo "ALL Fields Are Required";
}



?>