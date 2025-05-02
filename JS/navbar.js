// script.js
document.addEventListener("DOMContentLoaded", function() {
    fetch("navbar.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("navbar-container").innerHTML = data;
        })
        .catch(error => console.error("Error loading navbar:", error));
});

function toggleDropdown() {
    let dropdown = document.getElementById("dropdown");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

// Close dropdown when clicking outside
window.onclick = function(event) {
    if (!event.target.matches('.dropdown-btn')) {
        document.getElementById("dropdown").style.display = "none";
    }
};
   // Course list with links
   const courses = {
    "HTML": "../HTML/htmlCssHome.html",
    "CSS": "../HTML/htmlCssHome.html",
    "JavaScript": "../HTML/scriptHome.html",
    "Python": "../HTML/pythonHome.html",
    "Java": "../HTML/javaHome.html",
    "C++": "../HTML/cppHome.html",
    "C": "../HTML/cHome.html"
};

function filterCourses() {
    let input = document.getElementById("searchBox").value.toLowerCase();
    let dropdown = document.getElementById("courseList");

    // Clear previous results
    dropdown.innerHTML = "";

    if (input === "") {
        dropdown.style.display = "none";
        return;
    }

    // Filter courses that match input
    let filteredCourses = Object.keys(courses).filter(course => course.toLowerCase().includes(input));

    // Display filtered results
    if (filteredCourses.length > 0) {
        dropdown.style.display = "block";
        filteredCourses.forEach(course => {
            let courseElement = document.createElement("a");
            courseElement.textContent = course;
            courseElement.href = courses[course];  // Set the course link
            courseElement.onclick = function () {
                window.location.href = courses[course];  // Redirect on click
            };
            dropdown.appendChild(courseElement);
        });
    } else {
        dropdown.style.display = "none";
    }
}

// Close dropdown when clicking outside
window.onclick = function(event) {
    if (!event.target.matches('#searchBox')) {
        document.getElementById("courseList").style.display = "none";
    }
};