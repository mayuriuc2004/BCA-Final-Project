<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Java</title>
    <link rel="stylesheet" href="../CSS/java.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <script src="../JS/Script.js"></script>
    <script src="../JS/navbar.js"></script>
</head>
<body>
    <div id="navbar-container"></div>

    <section class="progress-container" style="margin-top: 100px;">
        <label>Course Progress:</label>
        <progress class="progress-bar" id="progressBar" value="0" max="100"></progress>
        <p id="progressText">0% Completed</p>
    </section>

    <section class="videos-container">
        <!-- Video 1 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/yRpLlJmRo2w" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Introduction to Java</h2>
                <p>Learn the basics of Java...</p>
                <input type="checkbox" class="progress-check" data-index="2"> Mark as Completed
            </div>
        </div>

        <!-- Video 2 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/LusTv0RlnSU" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Conditional Statements</h2>
                <p>Learn about if-else, switch...</p>
                <input type="checkbox" class="progress-check" data-index="3"> Mark as Completed
            </div>
        </div>

        <!-- Video 3 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/I5srDu75h_M" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Java Tutorial - Merge Sort</h2>
                <p>Learn about implementation of merge sort.</p>
                <input type="checkbox" class="progress-check" data-index="4"> Mark as Completed
            </div>
        </div>

        <!-- Video 4 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/0r1SfRoLuzU" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Loops</h2>
                <p>Learn about loops...</p>
                <input type="checkbox" class="progress-check" data-index="5"> Mark as Completed
            </div>
        </div>

        <!-- Video 5 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/qcSz4ef9UHA" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Functions</h2>
                <p>Learn about functions...</p>
                <input type="checkbox" class="progress-check" data-index="6"> Mark as Completed
            </div>
        </div>

        <!-- Video 6 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/bQssdSrSGNE" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Time & Space Complexity </h2>
                <p>Learn how time complexity works.</p>
                <input type="checkbox" class="progress-check" data-index="7"> Mark as Completed
            </div>
        </div>

        <!-- Video 7 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/NTHVTY6w2Co" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Arrays</h2>
                <p>Learn about Arrays...</p>
                <input type="checkbox" class="progress-check" data-index="8"> Mark as Completed
            </div>
        </div>

        <!-- Video 8 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/18Zt5I4S45o" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>2D Arrays</h2>
                <p>Learn about 2D arrays...</p>
                <input type="checkbox" class="progress-check" data-index="9"> Mark as Completed
            </div>
        </div>

        <!-- Video 9 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/vCRD36bG8xQ" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Strings</h2>
                <p>Learn about Strings...</p>
                <input type="checkbox" class="progress-check" data-index="10"> Mark as Completed
            </div>
        </div>

        <!-- Video 10 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/ZLDwskEhIFg" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>StringBuilder</h2>
                <p>Learn about StringBuilder...<p>
                <input type="checkbox" class="progress-check" data-index="11"> Mark as Completed
            </div>
        </div>

        <!-- Video 11 -->
        <div class="video-box">
            <iframe src="https://www.youtube.com/embed/OSoO8eCEEC8" allowfullscreen frameborder="0" loading="lazy"></iframe>
            <div class="video-info">
                <h2>Bit Manipulation</h2>
                <p>Learn bit-level operations...</p>
                <input type="checkbox" class="progress-check" data-index="12"> Mark as Completed
            </div>
        </div>

    </section>
    <script src="../JS/java.js"></script>
</body>
</html>
