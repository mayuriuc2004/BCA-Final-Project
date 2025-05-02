<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
    <style>
        .footer {

  background-color: #1e1e2f;
  color: #fff;
  padding: 40px 0 20px;
  font-family: 'Segoe UI', sans-serif;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
}

.footer-section {
  flex: 1;
  min-width: 220px;
  margin: 20px 0;
}

.footer-section h3 {
  margin-bottom: 15px;
  color: #00bcd4;
}

.footer-section p, 
.footer-section a {
  color: #ccc;
  font-size: 14px;
  text-decoration: none;
  line-height: 1.8;
}

.footer-section a:hover {
  color: #fff;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.socials a {
  color: #ccc;
  margin-right: 15px;
  font-size: 18px;
}

.socials a:hover {
  color: #00bcd4;
}

.footer-bottom {
  text-align: center;
  margin-top: 30px;
  border-top: 1px solid #444;
  padding-top: 15px;
  font-size: 13px;
  color: #aaa;
}
    </style>
</head>
<body>
    <div id="navbar-container"></div>
<!--==============Header===================-->
<header>
    <div class="container header_container">
        <div class="header_left">
            <h1>Grow your skills to advance your career path</h1>
            <p>Education is not preparation for life; education is life itself.<br/>
            The VirtuMind provides you a variety of courses with certifications. It's the journey to become a professional in your career.</p>
            <a href="Courses.html" class="btn btn-primary">Get Started</a>
        </div>
        <div class="header_right">
            <div class="header_right-img">
                <img src="../images/header.svg" alt="">
            </div>
        </div>
    </div>
</header>
<!--============Categories=========-->
<section class="categories">
    <div class="categories categories_container">
        <div class="categories_left">
            <h1>Categories</h1><br>
            <p>VirtuMind provides you mentors which are loved by most of the students in Computer Science stream. Which will teach you, guide you and make your path much easier.</p>
        </div>
        <div class="categories_right">
            <article class="category category1">
                <span class="category_icon1"><i class="fa-brands fa-html5 i1"></i>&nbsp<i class="fa-brands fa-css3-alt i2"></i>&nbsp<i class="fa-brands fa-js i3"></i></span>
                <p><strong>Front-End Web Development</strong></p>
                <br>
                <p>Front-end Development focuses on building the visible & interactive part of a website or app, using languages like HTML, CSS and JS</p>
            </article>
            <article class="category category2">
                <span class="category_icon2 c"><i class="fa-solid fa-database"></i></span>
                <p><strong>Back-End Web Development</strong></p>
                <br>
                <p>Back-end development focuses on server-side logic of website, handling data processing, database interactions & API creation. </p>
            </article>
            <article class="category category3">
                <span class="category_icon3 c"><i class="fa-brands fa-android"></i></span>
                <p><strong>Android Development</strong></p>
                <br>
                <p>Android development involves creating applications for android devices using programming languages like Java & Kotlin.</p>
            </article>
            <article class="category category4">
                <span class="category_icon4 c"><i class="fa-brands fa-java"></i></span>
                <p><strong>Java</strong></p>
                <br>
                <p>Java development involves creating software applications using Java programming language.</p>
            </article> 
            <article class="category category5">
                <span class="category_icon5 c"><i class="fa-brands fa-python"></i></span>
                <p><strong>Python</strong></p>
                <br>
                <p>Python is a versatile & beginner-friendly programming language, allows developers to create diverse applicatios.</p>
            </article>
            <article class="category category6">
                <span class="category_icon6 c"><i class="fa-brands fa-unity"></i></span>
                <p><strong>Unity Game Development</strong></p>
                <br>
                <p>Unity Game Development include simple 2D & 3D games like platformers, puzzle games, endless runners & shouting games.</p>
            </article>                    
        </div>
    </div>
</section>
<!-----------Courses--------------->
<section class="courses">
    <h2 class="course-head">Roadmap to become a Developer</h2>
    <div class="courses_container">
        <article class="course">
            <div class="course_video">
                <iframe width="380" height="213" src="https://www.youtube.com/embed/NkwFxeHARqc?si=ndgZ1xipL9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="course_info">
                <h3>Web Development <br>Roadmap</h3>
            <p>This video provides you a complete roadmap for web development which defines you a way to become a web developer.</p>
            </div>
        </article>
        <article class="course">
            <div class="course_video">
                <iframe width="380" height="213" src="https://www.youtube.com/embed/7nQsQ0rvYqQ?si=_eTaLfxOM-y_bMh9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="course_info">
                <h3>Android Development Roadmap</h3>
            <p>This video provides you a complete roadmap for app development which defines you a way to become a app developer.</p>
            </div>
        </article>
        <article class="course">
            <div class="course_video">
                <iframe width="380" height="213" src="https://www.youtube.com/embed/MjHalxr_tDw?si=duQzgj4dSSfwzgS5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="course_info">
                <h3>Game Development Roadmap</h3>
            <p>This video provides you a complete roadmap for game development which defines you a way to become a game developer.</p>
            </div>
        </article>    
    </div>
</section>
<!-----------FAQ----------------->
    <section class="container-faq">
    <h2 class="faq-head">Frequently Asked Questions(FAQs)</h2>

        <div class="faq">
            <button class="question">
                <h4>Who can use this website?</h4>
            </button>
            <div class="answer">
                Anyone interested in coding! Whether you’re a beginner, student, or experienced developer looking to upskill, we have courses suited for all levels.
            </div>
        </div>
     
        <div class="faq">
            <button class="question">
                <h4>Is prior coding experience required?</h4>
            </button>
            <div class="answer">
                No! We provide beginner-friendly courses as well as advanced content for experienced programmers.
            </div>
        </div>
     
        <div class="faq">
            <button class="question">
                <h4>Do I recieve a certificate after completing a course?</h4>
            </button>
            <div class="answer">
                Yes! You will receive a certificate upon successfully completing a course, which you can add to your resume or LinkedIn profile.
            </div>
        </div>
    
        <div class="faq">
            <button class="question">
                <h4>Do you offer real world projects?</h4>
            </button>
            <div class="answer">
                Yes! Many of our courses include real-world projects to help you build a portfolio of work.
            </div>
        </div>

    </section>

<footer class="footer">
  <div class="footer-container">
    <div class="footer-section about">
      <h3>About VirtuMind</h3>
      <p>VirtuMind is your trusted platform for online learning. We offer courses in Programming &nbsp&nbsp&nbsp languages designed by industry experts.</p>
    </div>

    <div class="footer-section links">
      <h3>Quick Links</h3>
      <ul>
      <li><a href="Index.php" >Home</a></li>
      <li><a href="About.php" >About</a></li>
      <li><a href="editorHome.html" >Editor</a></li>
      <li><a href="register.php">Register</a></li>
      </ul>
    </div>

    <div class="footer-section courses">
      <h3>Popular Courses</h3>
      <ul>
      <a href="cHome.html" >C</a><br>
      <a href="cppHome.html">C++</a><br>
      <a href="javaHome.html">Java</a><br>
      <a href="pythonHome.html">Python</a><br>
      <a href="htmlCssHome.html">HTML & CSS</a><br>
      <a href="scriptHome.html">JavaScript</a>
      </ul>
    </div>

    <div class="footer-section contact">
      <h3>Contact Us</h3>
      <p>Email: support@virtumind.com</p>
      <p>Phone: +91 98765 43210</p>
      <p>Address: 123 Learning Lane, Mumbai, India</p>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2025 VirtuMind. All rights reserved.</p>
  </div>
</footer>
<script>
document.querySelectorAll('.question').forEach(button => {
    button.addEventListener('click', () => {
        let answer = button.nextElementSibling;
        button.classList.toggle('active');
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
        } else {
            document.querySelectorAll('.answer').forEach(a => {
                a.style.display = 'none';
                a.previousElementSibling.classList.remove('active');
            });
            answer.style.display = 'block';
        }
    });
});
</script>
</body>
</html>