<?php if (isset($_GET['success'])): ?>
    <div id="success-msg" style="background: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb;">
        ✅ Files uploaded successfully!
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('success-msg').style.display = 'none';
        }, 3000);
    </script>
<?php endif; ?>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Course - Apna College</title>
    <link rel="stylesheet" href="../CSS/java.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <script src="../JS/Script.js"></script>
    <script src="../JS/navbar.js"></script>
    <style>
        .email{
            height: 33px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #fff;
            cursor: pointer;
        }
        .btn{
            height: 40px;
        }
    </style>
</head>
<body>
    <div id="navbar-container"></div>

    <section class="progress-container" style="margin-top: 100px;">

    </section>

    <section class="videos-container">
        <!-- Video 1 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/GjHNGM7KN3w" allowfullscreen></iframe>
            <div class="video-info">
                <h2>Java Tutorial - Basic pattern questions</h2>
            </div>
        </div>

        <!-- Video 2 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/Dr4PpNa7AYo" allowfullscreen></iframe>
            <div class="video-info">
                <h2>Java Tutorial - Advanced pattern questions</h2>
            </div>
        </div>

        <!-- Video 3 -->
        <div class="video-box">
            <iframe  src="https://www.youtube.com/embed/pFPZ83mgH00" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Java Tutorial - Questions on functions</h2>
            </div>
        </div>

        <!-- Video 4 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/u-HgzgYe8KA" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Java Tutorial - Practice Recursion</h2>
            </div>
        </div>

        <!-- Video 5 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/xZykmhcWGuY" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Java Tutorial - Advanced recursion Questions</h2>
            </div>
        </div>

        <!-- Video 6 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/cL4gHVuFOvk" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Java Tutorial - Practice Linked List</h2>
            </div>
        </div>

        <!-- Video 7 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/rTRcntABSZ4" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Java Tutorial - Hashing Questions</h2>
            </div>
        </div> 

    </section>

<section class="java-questions">
        <h2 class="jq">Java Practice Questions</h2>
        <h3 class="jq1">Basic Java Questions</h3>
        <div class="container">
            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q1">
            <input type="hidden" name="question" value="1. Write a Java program to check if a given number is prime.">
            <label class="label">1. Write a Java program to check if a given number is prime.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp  
            <input type="file" class="file-input" name="files[]" data-qid="1" required>
                <button type="submit" name="submit">Upload</button>
                <p class="file-name" id="file-name-1"></p>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q2">
        <input type="hidden" name="question" value="2. Write a Java program to reverse a given string.">
            <label class="label">2. Write a Java program to reverse a given string.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="2">
            <button type="submit" name="submit">Upload</button>
                <p class="file-name" id="file-name-2"></p>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q3">
        <input type="hidden" name="question" value="3. Write a program to print the Fibonacci series up to n terms.">
        <label class="label">3. Write a program to print the Fibonacci series up to n terms.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="3">
            <button type="submit" name="submit">Upload</button>
                <p class="file-name" id="file-name-3"></p>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q4">
        <input type="hidden" name="question" value="4. Write a Java program to swap two numbers without using a third variable.">
        <label class="label">4. Write a Java program to swap two numbers without using a third variable.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="4">
            <button type="submit" name="submit">Upload</button>
                <p class="file-name" id="file-name-4"></p>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q5">
        <input type="hidden" name="question" value="5. Write a program to check if a number is even or odd.">
        <label class="label">5. Write a program to check if a number is even or odd.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="5">
            <button type="submit" name="submit">Upload</button>
                <p class="file-name" id="file-name-5"></p>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q6">
        <input type="hidden" name="question" value="6. Write a program to find the largest of three numbers.">
        <label class="label">6. Write a program to find the largest of three numbers.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="6">
            <button type="submit" name="submit">Upload</button>
                <p class="file-name" id="file-name-6"></p>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q7">
        <input type="hidden" name="question" value="7. Write a program to find the factorial of a number using recursion.">
        <label class="label">7. Write a program to find the factorial of a number using recursion.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="7">
            <button type="submit" name="submit">Upload</button>
                <p class="file-name" id="file-name-7"></p>
            </div>
            </form>

<form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q8">
        <input type="hidden" name="question" value="8. Write a program to check if a string is a palindrome.">
        <label class="label">8. Write a program to check if a string is a palindrome.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="8">
            <button type="submit" name="submit">Upload</button>
                <p class="file-name" id="file-name-8"></p>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q9">
        <input type="hidden" name="question" value="9. Write a program to count the number of vowels and consonants in a string.">
        <label class="label">9. Write a program to count the number of vowels and consonants in a string.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="9">
            <button type="submit" name="submit">Upload</button>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
            <h3 class="jq1">Intermediate Java Questions</h3>
        <div class="question-box" id="q10">
        <input type="hidden" name="question" value="10. Write a program to sort an array using Bubble Sort.">
        <label class="label">1. Write a program to sort an array using Bubble Sort.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="10">
            <button type="submit" name="submit">Upload</button>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q11">
        <input type="hidden" name="question" value="11. Write a program to implement binary search on a sorted array.">
        <label class="label">2. Write a program to implement binary search on a sorted array.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="11">
            <button type="submit" name="submit">Upload</button>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q12">
        <input type="hidden" name="question" value="12. Write a program to find the second largest number in an array.">
        <label class="label">3. Write a program to find the second largest number in an array.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="12">
            <button type="submit" name="submit">Upload</button>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q13">
        <input type="hidden" name="question" value="13. Write a program to remove duplicates from an array.">
        <label class="label">4. Write a program to remove duplicates from an array.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="13">
            <button type="submit" name="submit">Upload</button>
            </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q14">
        <input type="hidden" name="question" value="14. Write a program to implement a stack using an array.">
        <label class="label">5. Write a program to implement a stack using an array.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="14">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>

<form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q15">
        <input type="hidden" name="question" value="15.Write a program to implement a queue using a linked list.">
        <label class="label">6. Write a program to implement a queue using a linked list.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="15">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q16">
        <input type="hidden" name="question" value="17. Write a program to count the occurrences of a character in a string.">
        <label class="label">7. Write a program to count the occurrences of a character in a string.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="16">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q17">
        <input type="hidden" name="question" value="17. Write a Java program to implement a simple calculator.">
        <label class="label">8. Write a Java program to implement a simple calculator.</label><br>
             <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
             <input type="file" class="file-input" name="files[]" data-qid="17">
             <button type="submit" name="submit">Upload</button>
        </div>
            </form>

<form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q18">
        <input type="hidden" name="question" value="18. Write a program to find the longest word in a given sentence.">
        <label class="label">9. Write a program to find the longest word in a given sentence.</label><br>
             <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
             <input type="file" class="file-input" name="files[]" data-qid="18">
             <button type="submit" name="submit">Upload</button>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q19">
        <input type="hidden" name="question" value="19.Write a program to check if a number is an Armstrong number.">
        <label class="label">10. Write a program to check if a number is an Armstrong number.</label><br>
             <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
             <input type="file" class="file-input" name="files[]" data-qid="19">
             <button type="submit" name="submit">Upload</button>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
            <h3 class="jq1">Object-Oriented Programming (OOP) Questions</h3>
        <div class="question-box" id="q20">
        <input type="hidden" name="question" value="20.Implement a class Student with attributes name, age, and grade, and demonstrate encapsulation.">
        <label class="label">1. Implement a class Student with attributes name, age, and grade, and demonstrate encapsulation.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="20">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>

<form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q21">
        <input type="hidden" name="question" value="21.Implement a BankAccount class with methods for deposit, withdrawal, and balance inquiry.">
        <label class="label">2. Implement a BankAccount class with methods for deposit, withdrawal, and balance inquiry.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="21">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q22">
        <input type="hidden" name="question" value="22.Create a class hierarchy using inheritance for a base class Vehicle and derived classes Car and Bike.">
        <label class="label">3. Create a class hierarchy using inheritance for a base class Vehicle and derived classes Car and Bike.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="22">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>
                
            <form method="post" action="upload.php" enctype="multipart/form-data">
            <div class="question-box" id="q23">
            <input type="hidden" name="question" value="23.Implement method overloading and method overriding in Java.">
            <label class="label">4. Implement method overloading and method overriding in Java.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="23">
            <button type="submit" name="submit">Upload</button>
            </div>
            </form>

<form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q24">
        <input type="hidden" name="question" value="24.Implement an abstract class Shape with a method calculateArea() and derive classes Circle and Rectangle.">
        <label class="label">5. Implement an abstract class Shape with a method calculateArea() and derive classes Circle and Rectangle.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="24">
            <button type="submit" name="submit">Upload</button>
            </div>
            </form>
            
            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q25">
        <input type="hidden" name="question" value="25.Implement a Library system with books and users using aggregation.">
        <label class="label">6. Implement a Library system with books and users using aggregation.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="25">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q26">
        <input type="hidden" name="question" value="26.Implement a Singleton class in Java.">
        <label class="label">7. Implement a Singleton class in Java.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="26">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q27">
        <input type="hidden" name="question" value="27.Demonstrate multiple inheritance in Java using interfaces">
        <label class="label">8. Demonstrate multiple inheritance in Java using interfaces.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="27">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q28">
        <input type="hidden" name="question" value="28.Implement a program that uses the Comparator and Comparable interfaces to sort a list of employees.">
        <label class="label">9. Implement a program that uses the Comparator and Comparable interfaces to sort a list of employees.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="28">
            <button type="submit" name="submit">Upload</button>
        </div>
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q29">
        <input type="hidden" name="question" value="29.Implement a Factory Design Pattern for creating different types of bank accounts.">
        <label class="label">10. Implement a Factory Design Pattern for creating different types of bank accounts.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="29">
            <button type="submit" name="submit">Upload</button>
        </div>  
            </form>       

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <h3 class="jq1">Data Structures & Algorithms(DSA) Questions</h3>
        <div class="question-box" id="q30">
        <input type="hidden" name="question" value="30.Write a Java program to reverse a linked list.">
        <label class="label">1. Write a Java program to reverse a linked list.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="30">
            <button type="submit" name="submit">Upload</button>
        </div> 
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q31">
        <input type="hidden" name="question" value="31.Implement a binary search tree (BST) with insert, delete, and search operations.">
        <label class="label">2. Implement a binary search tree (BST) with insert, delete, and search operations.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input"name="files[]" data-qid="31">
            <button type="submit" name="submit">Upload</button>
        </div> 
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q32">
        <input type="hidden" name="question" value="32.Write a program to implement a hash map in Java.">
        <label class="label">3. Write a program to implement a hash map in Java.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="32">
            <button type="submit" name="submit">Upload</button>
        </div> 
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q33">
        <input type="hidden" name="question" value="33.Implement a min and max heap using priority queues.">
        <label class="label">4. Implement a min and max heap using priority queues.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="33">
            <button type="submit" name="submit">Upload</button>
        </div> 
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q34">
        <input type="hidden" name="question" value="34.Write a program to detect a cycle in a linked list.">
        <label class="label">5. Write a program to detect a cycle in a linked list.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="34">
            <button type="submit" name="submit">Upload</button>
        </div> 
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q35">
        <input type="hidden" name="question" value="35.Implement a graph using adjacency list representation.">
        <label class="label">6. Implement a graph using adjacency list representation.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="35">
            <button type="submit" name="submit">Upload</button>
        </div> 
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q36">
        <input type="hidden" name="question" value="36.Implement Depth-First Search (DFS) and Breadth-First Search (BFS) for a graph.">
        <label class="label">7. Implement Depth-First Search (DFS) and Breadth-First Search (BFS) for a graph.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="36">
            <button type="submit" name="submit">Upload</button>
        </div> 
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q37">
        <input type="hidden" name="question" value="37. Implement a LRU (Least Recently Used) cache using LinkedHashMap.">
        <label class="label">8. Implement a LRU (Least Recently Used) cache using LinkedHashMap.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="37">
            <button type="submit" name="submit">Upload</button>
        </div> 
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q38">
        <input type="hidden" name="question" value="38. Write a program to check if two strings are anagrams of each other.">
        <label class="label">9. Write a program to check if two strings are anagrams of each other.</label><br>
            <input type="email" name="user_email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="38">
            <button type="submit" name="submit">Upload</button>
        </div> 
            </form>

            <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="question-box" id="q39">
        <input type="hidden" name="question" value="39. Write a program to find the longest substring without repeating characters.">
        <label class="label">10. Write a program to find the longest substring without repeating characters.</label><br>
            <input type="email" name="email" placeholder="Your Email" class="email" required>&nbsp&nbsp 
            <input type="file" class="file-input" name="files[]" data-qid="39">
            <button type="submit" name="submit">Upload</button>
        </div> 
</form>
    </div>
</section>
    <script src="../JS/java.js"></script>
</body>
</html>
