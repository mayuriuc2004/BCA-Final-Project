let wrapper = document.querySelector(".wrapper"),
    nxtBtn = document.querySelector(".btn button"),
    resultCard = document.querySelector(".result-card"),
    time = document.querySelectorAll(".Timer p")[1],
    progressBar = document.querySelector(".inner"),
    questionEl = document.querySelector(".question-container"),
    answerContainer = document.querySelector(".option-container"),
    currentQuestionNum = document.querySelector(".current-question"),
    totalQuestion = document.querySelector(".total-question"),
    totalScore = document.querySelector(".total-score .value"),
    yourScore = document.querySelector(".user-score .value"),
    unattempted = document.querySelector(".unattempted .value"),
    attempted = document.querySelector(".attempted .value"),
    wrong = document.querySelector(".wrong .value"),
    replayQuiz = document.querySelectorAll(".score-btn button")[0],
    exitQuiz = document.querySelectorAll(".score-btn button")[1];

let currentQuestion = 0;
let userAnswers = [];
let timer,
    progressInterval,
    width = 1,
    score = 0,
    attemptQuestion = 0,
    unattemptedQuestion = 0,
    wrongQuestion = 0;

    replayQuiz.addEventListener("click", () => {
      clearInterval(timer);  // Stop any running timer
      resultCard.style.width = "0";
      resultCard.style.transform = "scale(0)";
      wrapper.style.transform = "scale(1)";
      wrapper.style.width = "100%";
      currentQuestion = 0;
      score = 0;
      attemptQuestion = 0;
      unattemptedQuestion = 0;
      wrongQuestion = 0;
      
      startQuiz();
  });
  

exitQuiz.addEventListener("click", () => {
    resultCard.style.width = "0";
    resultCard.style.transform = "scale(0)";
    currentQuestion = 0;
    score = 0;
    attemptQuestion = 0;
    unattemptedQuestion = 0;
    wrongQuestion = 0;
    startBtn.style.transform = "scale(1)"
    startBtn.style.width = "100%"
});

const questions = [
  {
    question: "What does HTML stand for?",
    options: ["Hyper Transfer Markup Language", "Hyper Text Markup Language", "High Tech Markup Language", "Hyperlink Text Management Language"],
    answer: "1"
  },
  {
    question: "What is the purpose of the <head> tag in HTML?",
    options: ["It contains the main content of the webpage", " It defines the header section of a webpage", "It contains metadata and links to stylesheets", "It displays the page title in the browser"],
    answer: "2"
  },
  {
    question: "Which attribute is used to open a link in a new tab?",
    options: ["new='tab'", "target='_self'", "target='_blank'", "open='new'"],
    answer: "2"
  },
  {
    question: "How do you specify that an input field is required?",
    options: ["mandatory='true'", "validate='required'", "required", "must='fill'"],
    answer: "2"
  }, 
  {
    question: "What is the z-index property used for?",
    options: ["Controlling stacking order", "Setting zoom level", "Changing text color", "Adjusting width"],
    answer: "0"
  },
  {   
    question: "What is the default alignment of paragraph tag in HTML?",
    options: ["Left", "Center", "Right", "Justified"],
    answer: "0"
  },
  {   
    question: "What does CSS stand for?",
    options: ["Creative Style Sheets", "Computer Style Sheets", "Cascading Style Sheets", "Colorful Style Sheets"],
    answer: "2"
  },
  {
    question: "Which CSS property is used to change text color?",
    options: ["color", "text-color", "font-color", "text-style"],
    answer: "0"
  },
  {
    question: "How do you make text bold using CSS?",
    options: ["text-weight: bold;", "font-weight: bold;", "bold: true;", "text-bold: yes;"],
    answer: "1"
  },
  {
    question: "What is the correct CSS syntax for adding a background color?",
    options: ["background-color: red;", "bg-color: red;", "background = red;", "color-background: red;"],
    answer: "0"
  },
  {
    question: "Which CSS property is used to create space between elements?",
    options: ["margin", "padding", "spacing", "border-spacing"],
    answer: "0"
  },
  {
    question: "What is the default value of the position property in CSS?",
    options: ["relative", "fixed", "static", "absolute"],
    answer: "1"
  },
  {
    question: "How do you apply a CSS rule to all <p> elements inside a <div>?",
    options: ["div > p {}", "div p {}", "div, p {}", "p div {}"],
    answer: "1"
  },
  {
    question: "What CSS property is used to make an element's text all uppercase?",
    options: ["text-style", "text-transform", "text-case", "font-style"],
    answer: "1"
  },
  {
    question: "Which property is used to control the visibility of an element?",
    options: ["hide", "display", "visibility", "opacity"],
    answer: "2"
  },
  {
    question: "How do you create a flexbox container?",
    options: ["display: flex;", "display: grid;", "flex: container;", "container: flex;"],
    answer: "0"
  },
  {
    question: "Which pseudo-class is used to style an element when a user hovers over it?",
    options: [":click", ":hover", ":focus", ":active"],
    answer: "1"
  },
  {
    question: "What does overflow: hidden; do?",
    options: ["Hides overflowing content", "Expands the element", "Increases width", "Makes text bold"],
    answer: "0"
  }, 
  {
    question: " How do you create a grid container?",
    options: ["display: grid;", "grid: container;", "grid-template: auto;", "display: block;"],
    answer: "0"
  },
  
];

function startQuiz() {
  displayQuestion(currentQuestion);
  timer = setInterval(updateTimer, 1000);
  updateProgress();
}

function displayQuestion(questionIndex) {
  updateProgress();
  let question = questions[questionIndex].question;
  let options = questions[questionIndex].options;

  questionEl.innerHTML = question;

  for (let i = 0; i < options.length; i++) {
      let option = `<option onclick="checkAnswer(${i})">${options[i]}</option>`;
      answerContainer.insertAdjacentHTML("beforeend", option);
  }
}

function checkAnswer(selectedIndex) {
  attemptQuestion++;
  answerContainer.style.pointerEvents = "none";
  clearInterval(timer);
  let selectedAnswer = questions[currentQuestion].options[selectedIndex];
  let correctAnswer = questions[currentQuestion].options[questions[currentQuestion].answer];

  if (selectedAnswer === correctAnswer) {
      score++;
      setTimeout(() => {
          document.querySelectorAll("option")[selectedIndex].style.backgroundColor = "green";
          document.querySelectorAll("option")[selectedIndex].style.color = "white";
          document.querySelectorAll("option")[selectedIndex].style.borderColor = "green";
      }, 100);
      userAnswers[currentQuestion] = selectedIndex;
  } else {
      wrongQuestion++;
      setTimeout(() => {
          document.querySelectorAll("option")[selectedIndex].style.backgroundColor = "red";
          document.querySelectorAll("option")[selectedIndex].style.color = "white";
          document.querySelectorAll("option")[selectedIndex].style.borderColor = "red";
          document.querySelectorAll("option")[questions[currentQuestion].answer].style.backgroundColor = "green";
          document.querySelectorAll("option")[questions[currentQuestion].answer].style.color = "white";
          document.querySelectorAll("option")[questions[currentQuestion].answer].style.borderColor = "green";
      }, 100);
  }
}

function nextQuestion() {
  clearInterval(timer);  // Clear previous timer
  answerContainer.style.pointerEvents = "initial";
  time.innerHTML = "15";
  updateProgress();
  answerContainer.innerHTML = ""; // Clear previous options

  if (currentQuestion === questions.length - 1) {
      resultCard.style.width = "100%";
      resultCard.style.transform = "scale(1)";
      totalScore.innerHTML = questions.length;
      yourScore.innerHTML = score;
      attempted.innerHTML = attemptQuestion;
      unattempted.innerHTML = unattemptedQuestion;
      wrong.innerHTML = wrongQuestion;
      wrapper.style.width = "0";
      wrapper.style.transform = "scale(0)";
      endQuiz();
  } else {
      currentQuestion++;
      currentQuestionNum.innerHTML = currentQuestion + 1;
      displayQuestion(currentQuestion);
      
      // Start a fresh timer for the next question
      timer = setInterval(updateTimer, 1000);
  }
}

function updateTimer() {
  let remainingTime = parseInt(time.innerHTML) - 1;
  time.innerHTML = remainingTime > 9 ? remainingTime : "0" + remainingTime;

  if (remainingTime === 0) {
      clearInterval(timer); // Stop the timer before moving on

      unattemptedQuestion++;
      document.querySelectorAll("option")[questions[currentQuestion].answer].style.backgroundColor = "#37BB1169";
      document.querySelectorAll("option")[questions[currentQuestion].answer].style.color = "black";
      document.querySelectorAll("option")[questions[currentQuestion].answer].style.borderColor = "green";
      answerContainer.style.pointerEvents = "none";

      setTimeout(() => nextQuestion(), 1000); // Move to the next question after 1 second
  }
}

function updateProgress() {
  progressBar.style.width = (currentQuestion + 1) / questions.length * 100 + "%";
}

function endQuiz() {
  clearInterval(timer);
}

nxtBtn.addEventListener("click", nextQuestion);
totalQuestion.innerHTML = questions.length;
currentQuestionNum.innerHTML = currentQuestion + 1;
// Start the quiz immediately
startQuiz();