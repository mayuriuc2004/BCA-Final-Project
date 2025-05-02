<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $question = $_POST['question']; // e.g., "question1"

    if (!empty($_FILES['files']['name'][0])) {
        foreach ($_FILES['files']['name'] as $key => $name) {
            $tmpName = $_FILES['files']['tmp_name'][$key];
            $targetDir = "uploads/";
            $filename = uniqid() . '_' . basename($name);
            $targetFile = $targetDir . $filename;

            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            if (move_uploaded_file($tmpName, $targetFile)) {
                $stmt = $conn->prepare("INSERT INTO uploads (user_email, question, filename) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $email, $question, $filename);
                $stmt->execute();
            }
        }

        echo "Files for {$question} uploaded successfully!";
        header("Location: javaPractice.php?success=1");
        exit();
    } else {
        echo "No files selected for upload.";
    }
    
}
?>