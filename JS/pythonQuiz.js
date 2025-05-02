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
    question: "What is the output of print(10 > 9 and 8 < 7)?",
    options: ["True", "False", "None", "Error"],
    answer: "1"
  },
  {
    question: "How do you declare a variable in Python?",
    options: ["var x = 10", "x := 10", "$x = 10", "int x = 10"],
    answer: "2"
  },
  {
    question: "What will print(2 ** 3) output?",
    options: ["5", "6", "8", "9"],
    answer: "2"
  },
  {
    question: "Which keyword is used to define a function in Python?",
    options: ["define", "def", "function", "func"],
    answer: "1"
  },
  {
    question: 'What will print(bool("")) return?',
    options: ["True", "False", "None", "Error"],
    answer: "1"
  },
  {
    question: "What does list(range(5)) return?",
    options: ["[0, 1, 2, 3, 4]()", "[1, 2, 3, 4, 5]()", "[0, 1, 2, 3, 4, 5]()", "(0, 1, 2, 3, 4)()"],
    answer: "0"
  },
  {
    question: 'What is the output of print("Hello" * 3)?',
    options: ['"HelloHelloHello"', '"Hello Hello Hello"', '["Hello", "Hello", "Hello"]', "Error"],
    answer: "0"
  },
  { 
    question: "How do you remove the last element from a list my_list?",
    options: ["my_list.remove(-1)", "del my_list[-1]", "my_list.pop()", "Both b and c"],
    answer: "3"
  },
  {
    question: "Which class is the parent of all Java classes?",
    options: ["Main", "Object", "Class", "System"],
    answer: "1"
  },
  {
    question: "What does enumerate(['a', 'b', 'c']) return?",
    options: ["[(1, 'a'), (2, 'b'), (3, 'c')]", "[(0, 'a'), (1, 'b'), (2, 'c')]", "{'a': 1, 'b': 2, 'c': 3}", "['a', 'b', 'c']"],
    answer: "1"
  },  
  {
    question: 'What will print("Python".find("y")) return?',
    options: ["1", "2", "True", "-1"],
    answer: "0"
  },
  {
    question: "Which of the following is NOT a valid Python data type?",
    options: ["set", "tuple", "array", "dictionary"],
    answer: "2"
  },
  { 
    question: "What does the zip() function do in Python?",
    options: ["Combines two lists into key-value pairs", "Compresses files", "Joins two strings", "None of the above"],
    answer: "1"
  },
  {   
    question: "How do you create a set in Python?",
    options: ["{1, 2, 3}", "[1, 2, 3]", "(1, 2, 3)", '"1, 2, 3"'],
    answer: "1"
  },
  {   
    question: "What is the output of print(10 / 2) in Python?",
    options: ["5", "5.0", "5.00", "None"],
    answer: "1"
  },
  {   
    question: "What will print({1, 2, 3, 4} & {2, 3, 5}) return?",
    options: ["{1, 2, 3, 4, 5}", "{2, 3}", "{}", "Error"],
    answer: "1"
  },
  {   
    question: "What is the time complexity of inserting an element into a dictionary?",
    options: ["O(1)", "O(n)", "O(n^2)", "O(n^2)"],
    answer: "0"
  },
  {   
    question: " Which of the following can be used as dictionary keys?",
    options: ["Lists", "Tuples", "Dictionaries", "Sets"],
    answer: "1"
  },
  {
    question: "What does yield do in Python?",
    options: ["Stops execution", "Returns a generator", "Terminates the loop", "None of the above"],
    answer: "1"
  },
  {
    question: "What is the output of print([i for i in range(3)])?",
    options: ["[1, 2, 3]", "[0, 1, 2]", "[0, 1, 2, 3]", "None"],
    answer: "1"
  },
  {
    question: "Which of the following is NOT a valid variable name in Python?",
    options: ["my_var", "_varName", "123abc", "var123"],
    answer: "2"
  },
  {
    question: "What is the output of print(2 == 2.0)?",
    options: ["True", "False", "None", "Error"],
    answer: "0"
  },
  {
    question: "Which design pattern ensures only one instance of a class exists?",
    options: ["Singleton", "Factory", "Prototype", "Observer"],
    answer: "0"
  },
  {
    question: "What does print(bool([])) return?",
    options: ["True", "False", "None", "Error"],
    answer: "1"
  },
  {
    question: "How do you get user input in Python?",
    options: ["input()", "get_input()", "read()", "scan()"],
    answer: "1"
  },
  {
    question: 'What is the output of print("Python".replace("P", "J"))?',
    options: ["Python", "Jython", "Pjthon", "Error"],
    answer: "1"
  },
  {
    question: 'What will print("abc"[::-1]) output?',
    options: ['"abc"', '"cba"', '"bca"', "None"],
    answer: "1"
  },
  {
    question: 'How do you convert a string "123" into an integer?',
    options: ["int('123')", "str(123)", "float('123')", "string(123)"],
    answer: "0"
  },
  {
    question: 'What will print(len({"a": 1, "b": 2, "c": 3})) output?',
    options: ["1", "2", "3", "None"],
    answer: "2"
  },
  {
    question: 'What will print({1, 2, 3} | {3, 4, 5}) output?',
    options: ["{1, 2, 3, 4, 5}", "{3, 4, 5}", "{3, 4, 5}", "Error"],
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