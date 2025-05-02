<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id = $id");
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];


    $conn->query("UPDATE users SET first_name='$fname', last_name='$lname', phone='$phone', email='$email', gender='$gender' WHERE id=$id");
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
    <link rel="stylesheet" href="../CSS/admin.css">
</head>
<body>
    <h1>Edit Registration</h1>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>First Name:</label>
        <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required><br><br>
        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required><br><br>
        <label>Phone no.:</label>
        <input type="number" name="phone" value="<?php echo $row['phone']; ?>" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        <label>gender:</label>
        <input type="text" name="gender" value="<?php echo $row['gender']; ?>" required><br><br>
        <label>Password:</label>
        <input type="text" name="password" value="<?php echo $row['password']; ?>" required><br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>