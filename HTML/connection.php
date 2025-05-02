<?php
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

 
//create connection
$conn = new mysqli('localhost','root','','user_registration');

//check connection
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("Insert into users(first_name, last_name, phone, email, gender, password)values(?,?,?,?,?,?)");
    $stmt->bind_param("ssisss", $fname, $lname, $phone, $email, $gender, $password);
    $stmt->execute();
    header("Location: SignIn.php");
    $stmt->close();
    $conn->close();
}
?>