<?php
session_start();
include 'db.php'; // your DB connection file

// Assume the user's email is stored in session after login
$email = $_SESSION['email'];

$sql = "SELECT first_name, last_name FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$firstName = $user['first_name'];
$lastName = $user['last_name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link rel="stylesheet" href="../CSS/profile.css">
</head>
<body>

  <div class="profile-container" style="align-items: center">
    <h1>Welcome, <?php echo htmlspecialchars($firstName . " " . $lastName); ?>!</h1>

    <?php


$stmt = $conn->prepare("SELECT id, first_name, last_name FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$userResult = $stmt->get_result();
$user = $userResult->fetch_assoc();
$user_id = $user['id'];

?>
</ul>
</div>
</body>
</html>
