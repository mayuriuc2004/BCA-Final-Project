document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".progress-check");
    const progressBar = document.getElementById("progressBar");
    const progressText = document.getElementById("progressText");

    // Load progress from localStorage
    function loadProgress() {
        let completedVideos = JSON.parse(localStorage.getItem("javaCourseProgress")) || [];
        checkboxes.forEach(checkbox => {
            if (completedVideos.includes(checkbox.dataset.index)) {
                checkbox.checked = true;
            }
        });
        updateProgress();
    }

    // Update progress
    function updateProgress() {
        let totalVideos = checkboxes.length;
        let completedVideos = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;
        let progressPercentage = (completedVideos / totalVideos) * 100;

        progressBar.value = progressPercentage;
        progressText.innerText = `${Math.round(progressPercentage)}% Completed`;

        // Save progress to localStorage
        let completedIndexes = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.dataset.index);
        localStorage.setItem("javaCourseProgress", JSON.stringify(completedIndexes));
    }

    // Add event listeners to checkboxes
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", updateProgress);
    });

    loadProgress();
});

/*--------------file upload--------*/
function uploadFile(qid) {
    const fileInput = document.querySelector(`.file-input[data-qid='${qid}']`);
    const fileNameDisplay = document.getElementById(`file-name-${qid}`);
    
    if (fileInput.files.length > 0) {
        fileNameDisplay.textContent = `Uploaded: ${fileInput.files[0].name}`;
    } else {
        fileNameDisplay.textContent = "No file selected";
    }
}


