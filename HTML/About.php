<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        </style>
    <script src="https://kit.fontawesome.com/86abd7aba7.js" crossorigin="anonymous"></script>
    <!--Font-->
    <link rel="stylesheet" href="../CSS/navbar.css">
    
    <script src="../JS/navbar.js"></script>
    <link rel="website icon" type="svg" href="../images/Logo VirtuMind (5).svg">
    </head>
    
    <style>
        @font-face {
  font-family: 'Source Sans Pro';
  src: url('fonts/SourceSansPro-Regular.woff2') format('woff2'),
       url('fonts/SourceSansPro-Regular.woff') format('woff'),
       url('fonts/SourceSansPro-Regular.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}
*{
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    text-decoration: none;
    list-style: none;
    line-height: 1.6rem;
}
body {
  font-family: 'Source Sans Pro';
  height: 75vh;
  width: 100%;
  justify-content: center;
  align-items: left;
}

        .contain {
            margin-top:0;
            max-width: 100%;
            max-height: 77vh;
            background: #0c4da1;
            padding: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .text-content {
            width: 65%;
        }

        .text-content h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
            color: white;
        }

        .text-content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: wheat;
        }

        .text-content .btn {
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid rgb(238, 211, 58);
            color: whitesmoke;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .text-content .btn:hover {
            background-color: rgb(146, 14, 113);
            color: white;
        }

        .image-container {
            width: 35%;
            display: flex;
            justify-content: center;
        }

        .image-container img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid rgb(238, 211, 58);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contain {
                flex-direction: column;
                text-align: center;
            }

            .text-content {
                width: 100%;
            }

            .image-container {
                width: 100%;
                margin-top: 20px;
            }
        }
        ul, span{
            color: wheat;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        </style>
    <script src="https://kit.fontawesome.com/86abd7aba7.js" crossorigin="anonymous"></script>
    <script src="../JS/Script.js"></script>
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/Style.css">
    <script src="../JS/navbar.js"></script>
</head>
<body>
    <div id="navbar-container"></div><br><br>
    <div class="contain">
        <div class="image-container">
            <img src="../images/learner.png" alt="About Us Image">
        </div>
        <div class="text-content">
            <h2>About Us</h2>
            <p>Welcome to VirtuMind – your personal space to learn, grow, and thrive.
                We're here to make learning simple, accessible, and enjoyable for everyone. Whether you're taking your first steps into a new subject or sharpening your existing skills.</p>
            <h2>What We Do?</h2>
            <span>At VirtuMind, we believe learning should be:</span>
            <ul>
                <li><b>Flexible</b> – Learn at your own pace, on your own schedule.</li>
                <li><b>Engaging</b> – Interactive lessons, quizzes, and real-world projects keep things interesting.</li>
                <li><b>Practical</b> – Gain skills you can actually use—whether it’s for your career, your business, or your personal growth.</li>
            </ul><br>
            <h2>Our Mission</h2>
            <p>We’re on a mission to empower curious minds everywhere. No matter where you’re starting from, we’re here to help you reach your goals—one lesson at a time.</p>
            <h2>Who We Are</h2>
            <p>We’re a team of learners who care deeply about quality education. We share one thing in common: a passion for helping people unlock their full potential through learning.</p>
        </div>
    </div>

</body>
</html>
