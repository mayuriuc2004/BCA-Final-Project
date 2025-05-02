<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="../CSS/contact.css">
  <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        </style>
    <script src="https://kit.fontawesome.com/86abd7aba7.js" crossorigin="anonymous"></script>
    <script src="../JS/Script.js"></script>
    <!--Font-->
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/Style.css">
    <script src="../JS/navbar.js"></script>
    <link rel="website icon" type="svg" href="../images/Logo VirtuMind (5).svg">
</head>
<body>

<?php

include("db.php");

if(isset($_POST['submit'])) {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $nu = $_POST['number'];
    $m = $_POST['message'];

// Prepare and execute SQL statement to insert data
$query = "INSERT INTO contact (name, email, number, message) VALUES('$n', '$e', '$nu', '$m')";

$data = mysqli_query($conn, $query);

if ($data) {
   // echo "<br>successful";
} else {
    echo "Error: ". $query ."<br>". mysqli_error($conn);
}
$conn->close();
}
?>
<div id="navbar-container"></div>
<!--------------------->
  <div class="contact-container">
    <div class="contact-info">
      <h1>Contact Us</h1>
      <p>Feel free to use the form or drop us an email.</p>
      <p><span class="icon">📞</span> 87690 32145</p>
      <p><span class="icon">📧</span> virtumind@gmail.com</p>
      <p><span class="icon">📍</span> 15 West 3rd St. Media, Pa. 19063</p>
    </div>
    <form class="contact-form" action="contact.php" method="post">
      <div class="form-group">
        <input type="text" name="name" placeholder="Full Name" required>
      </div>
      <input type="email" name="email" placeholder="example@email.com" required>
      <input type="tel" name="number" placeholder="Contact number" optional>
      <textarea placeholder="Type your message..." rows="5" name="message" required></textarea>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>
