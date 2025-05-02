<?php include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        </style>
    <script src="https://kit.fontawesome.com/86abd7aba7.js" crossorigin="anonymous"></script>
    <script src="../JS/Script.js"></script>
    <!--Font-->
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/Style.css">
    <script src="../JS/navbar.js"></script>
    <link rel="website icon" type="svg" href="../images/Logo VirtuMind (5).svg">
</head>
<body>
    <div id="navbar-container"></div>
    <!---------------------------->
 
  <!---Data Table--->
<div class="main-container">
<div>
    <section id="User-Data">
<h3 class="info">User Data</h3>
  <table>
        <thead>
            <tr>
                <th>First Name</th><th>Last Name</th><th>Phone No.</th><th>Email</th><th>Gender</th><th>Password</th><th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['password']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}'>Edit</a> | 
                            <a href='delete.php?' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
        </section>
 
        <section id="Uploaded-Files"> 
    <?php
include 'db.php';

$sql = "SELECT * FROM uploads ORDER BY uploaded_at DESC";
$result = $conn->query($sql);
?>

<h3>📂 Uploaded Files</h3>

<table>
    <tr>
        <th>User Email</th>
        <th>Question</th>
        <th>File</th>
        <th>Uploaded At</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['user_email']) ?></td>
            <td><?= htmlspecialchars($row['question']) ?></td>
            <td><a href="uploads/<?= urlencode($row['filename']) ?>" target="_blank"><?= htmlspecialchars($row['filename']) ?></a></td>
            <td><?= $row['uploaded_at'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
    </section>

    <section id="Contact-Us">
<h3>Contact Info</h3>
<table>
    <thead>
    <tr>
        <th>User Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    <?php
            $sql = "SELECT * FROM contact";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['number']}</td>
                        <td>{$row['message']}</td>
                      </tr>";
            }
            ?>
    </tbody>

</table>
        </section>

          </div>
    <div class="contain">
<div class="rightbar" id="rightbar">
  <ul>
    <li><a href="#User-Data"><i class="fa-solid fa-address-card"></i> &nbsp&nbspUser Data</a></li>
    <li><a href="#Uploaded-Files">&nbsp<i class="fa-solid fa-file"></i></i> &nbsp&nbspUploaded Files</a></li>
    <li><a href="#Contact-Us">📧 &nbsp&nbspContact Info</a></li>

  </ul>
</div>
          </div>
          </div>
 
          <script>
            document.querySelectorAll('.rightbar a').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    target.scrollIntoView({
      behavior: 'smooth'
    });
  });
});

          </script>

</body>
</html>