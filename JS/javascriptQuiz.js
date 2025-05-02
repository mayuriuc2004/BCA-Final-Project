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
    question: "How do you write 'Hello, World!' in an alert box?",
    options: ["alert('Hello, World!');", "msg('Hello, World!');", "alertBox('Hello, World!');", "print('Hello, World!');"],
    answer: "0"
  },
  {
    question: "How do you declare a JavaScript variable?",
    options: ["variable carName;", "var carName;", "v carName;", "string carName;"],
    answer: "1"
  },
  {
    question: "Which operator is used to assign a value to a variable?",
    options: ["*", "=", "==", "==="],
    answer: "1"
  },
  {
    question: "How do you create a function in JavaScript?",
    options: ["function = myFunction()", "function myFunction() {}", "create myFunction() {}", "def myFunction() {}"],
    answer: "1"
  },
  {
    question: "How do you call a function named myFunction?",
    options: ["call myFunction();", "run myFunction();", "myFunction();", "execute myFunction();"],
    answer: "2"
  },
  { 
    question: "How do you write an IF statement in JavaScript?",
    options: ["if i = 5", "if i == 5 then", "if (i == 5) {}", "if i = 5 then {}"],
    answer: "2"
  },
  {
    question: "How does a WHILE loop start?",
    options: ["while i = 1 to 10", "while (i <= 10) {}", "while (i <= 10; i++) {}", "while (i => 10)"],
    answer: "1"
  },
  {
    question: "What is the correct way to check if a variable x is not equal to 5?",
    options: ["if (x <> 5)", "if (x =! 5)", "if (x != 5)", "if (x !== 5)"],
    answer: "2"
  },
  {
    question: "What will typeof NaN return?",
    options: ["'null'", "'number'", "'undefined'", "'NaN'"],
    answer: "1"
  },
  { 
    question: "Which JavaScript method is used to round a number to the nearest integer?",
    options: ["Math.round()", "Math.floor()", "Math.ceil()", "Math.truncate()"],
    answer: "0"
  },
  {   
    question: "What will console.log(2 + '2'); output?",
    options: ["4", "'22'", "NaN", "Error"],
    answer: "1"
  },
  {   
    question: "Which keyword is used to define a constant in JavaScript?",
    options: ["let", "var", "const", "immutable"],
    answer: "2"
  },
  {   
    question: "How can you check if myArray is actually an array?",
    options: ["typeof myArray === 'array'", "myArray.isArray()", "Array.isArray(myArray)", "myArray instanceof Object"],
    answer: "2"
  },
  {   
    question: "What is the correct way to declare an arrow function?",
    options: ["let myFunc = () => {}", "let myFunc = function => {}", "let myFunc => () {}", "let myFunc () => {}"],
    answer: "0"
  },
  {
    question: "What is the result of console.log(5 == '5');?",
    options: ["true", "false", "undefined", "Error"],
    answer: "0"
  },
  {
    question: "What will console.log(5 === '5'); return?",
    options: ["true", "false", "undefined", "Error"],
    answer: "1"
  },
  {
    question: "Which method converts a JavaScript object into a JSON string?",
    options: ["JSON.toString()", "JSON.stringify()", "JSON.parse()", "JSON.objectify()"],
    answer: "1"
  },
  {
    question: "How do you deep clone an object in JavaScript?",
    options: ["Object.clone(obj)", "JSON.parse(JSON.stringify(obj))", "obj.copy()", "Object.assign({}, obj)"],
    answer: "1"
  },
  {
    question: "What will console.log([1, 2, 3] + [4, 5, 6]); output?",
    options: ["[1, 2, 3, 4, 5, 6]", "'1,2,34,5,6'", "NaN", "Error"],
    answer: "1"
  },
  {
    question: "What does the this keyword refer to inside an arrow function?",
    options: ["The object that called the function", "The global object", "The function itself", "Undefined"],
    answer: "1"
  },
  {
    question: "What is the output of console.log(typeof null);?",
    options: ["'null'", "'object'", "'undefined'", "'NaN'"],
    answer: "1"
  },
  {
    question: "What will console.log(0.1 + 0.2 === 0.3); return?",
    options: ["true", "false", "undefined", "Error"],
    answer: "1"
  },
  {
    question: "What will console.log(!!'false'); return?",
    options: ["true", "false", "undefined", "Error"],
    answer: "0"
  },
  {
    question: "What is event delegation in JavaScript?",
    options: ["Assigning events to multiple elements", " Attaching an event listener to a parent element", "Preventing event bubbling", "None of the above"],
    answer: "1"
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