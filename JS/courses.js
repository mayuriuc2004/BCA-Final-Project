// Select all course boxes
const courseBoxes = document.querySelectorAll('.course-box');

// Add event listeners to each box
courseBoxes.forEach(box => {
    box.addEventListener('click', () => {
        const courseURL = box.getAttribute('data-url'); // Get course URL
        window.location.href = courseURL; // Redirect to course page
    });
});

// Also allow button click to navigate
const learnMoreButtons = document.querySelectorAll('.learn-more');

learnMoreButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.stopPropagation(); // Prevent event from bubbling up to parent
        const courseURL = button.parentElement.getAttribute('data-url');
        window.location.href = courseURL;
    });
});
