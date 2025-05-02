<?php include 'db.php'; 
?>
<?php
// Start session
session_start();

// Get form inputs
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User found, set session and redirect
    $_SESSION['email'] = $email;
    header("Location: Index.php");
    exit();
} else {
    echo "Invalid email or password!";
}

$conn->close();
?>
