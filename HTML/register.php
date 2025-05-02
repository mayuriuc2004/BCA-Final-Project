<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="../JS/Script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            width: 50%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input{
            width: 95%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        select, button{
            width: 98%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button a{
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .box{
            display: grid;
            grid-template-columns: 50% 50%;
        }
        .register-link {
            display: block;
            margin: 10px;
            font-size: 14px;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 0px; /* adds spacing between checkbox and text */
            margin:  0;
            padding: 0;
        }
       
    </style>
</head>
<body>
<?php

?>
    <div class="container">
        <h2 style="text-align: center;">Registration Form</h2>
    
        <form action="connection.php" method="post">
            <div class="box">
                <div class="left">
                    <label for="first_name">First Name:</label>
                    <input type="text"  name="first_name" required style="width: 50%;">
                </div>
                <div class="right">
                    <label for="last_name">Last Name:</label>
                    <input type="text"  name="last_name" required style="width: 50%;">
                </div>
            </div>

            <label for="phone">Phone No:</label>
            <input type="tel"  name="phone" required pattern="[0-9]{10}">
            
            <label for="email">Email:</label>
            <input type="email"  name="email" required>
            
            <label for="gender">Gender:</label>
            <select  name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <label for="password">Password:</label>
            <input type="password"  name="password" id="myInput" id="re" required>
            <div class="checkbox-label">
               
            </div><br>

            <button type="submit"><a href="SignIn.php" >Submit</a></button>

            <p class="register-link">Already have an account? <a href="SignIn.php">Log In</a></p>
        </form>
        
    </div>
 <script>
    function myFunction(){
        var x = document.getElementById("myInput");
        if(x.type === "password"){
            x.type = "text";       
        }
        else{
            x.type = "password";
        }
    }
    </script>
</body>
</html>
