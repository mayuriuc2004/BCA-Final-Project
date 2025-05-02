<?php
session_start();
include 'db.php';

$email = $_SESSION['email'];
$page = basename(java.html); // Example: "page1.php"

// Get user ID
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$user_id = $user['id'];

// Check if progress record exists
$stmt = $conn->prepare("SELECT progress FROM user_progress WHERE user_id = ? AND page_name = ?");
$stmt->bind_param("is", $user_id, $page);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $progress = $row['progress'];
} else {
    $progress = 0;
    $stmt = $conn->prepare("INSERT INTO user_progress (user_id, page_name, progress) VALUES (?, ?, 0)");
    $stmt->bind_param("is", $user_id, $page);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Learning - <?php echo $page; ?></title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="content-container">
  <h2>Learning Material - <?php echo ucfirst(str_replace(".php", "", $page)); ?></h2>
  <p>This is the content of <?php echo $page; ?>.</p>

  <!-- Progress Bar -->
  <div class="progress-section">
    <label>Progress</label>
    <div class="progress-bar">
      <div class="progress-fill" style="width: <?php echo $progress; ?>%;"></div>
    </div>
    <p><?php echo $progress; ?>% Completed</p>

    <!-- Simulate update -->
    <button onclick="updateProgress()">Mark 100% Complete</button>
  </div>
</div>

<script>
function updateProgress() {
  fetch("save_progress.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "page=<?php echo $page; ?>&progress=100"
  })
  .then(res => res.json())
  .then(data => {
    alert("Progress saved!");
    location.reload();
  });
}
</script>
</body>
</html>
