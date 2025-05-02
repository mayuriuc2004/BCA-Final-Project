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
      question: "What is the default value of a boolean variable in Java?",
      options: ["True", "False", "Null", "0"],
      answer: "1"
    },
    {
      question: "Which of the following is not a valid Java identifier?",
      options: ["_myVariable", "123Java", "$money", "finalValue"],
      answer: "1"
    },
    {
      question: "Which keyword is used to prevent method overriding?",
      options: ["static", "final", "super", "private"],
      answer: "1"
    },
    {
      question: "Which data type is used to store a single character?",
      options: ["char", "string", "character", "int"],
      answer: "0"
    },
    {
      question: 'What will be the output of System.out.println(10 + 20 + "Hello");?',
      options: ["Hello30", "30Hello", "10Hello20", "1020Hello"],
      answer: "1"
    },
    {
      question: "Which method is used to find the length of a string in Java?",
      options: ["length()", "size()", "setSize()", "len()"],
      answer: "0"
    },
    {
      question: "Which of the following loops executes at least once, even if the condition is false?",
      options: ["for", "while", "do-while", "foreach"],
      answer: "2"
    },
    { 
      question: "Which operator is used for bitwise AND operation in Java?",
      options: ["&", "&&", "|", "!"],
      answer: "0"
    },
    {
      question: "Which class is the parent of all Java classes?",
      options: ["Main", "Object", "Class", "System"],
      answer: "1"
    },
    {
      question: "What will be the output of System.out.println(2 * 3 + 'Hello' + 5 + 2);?",
      options: ["Hello102", "6Hello52", "6Hello7", "Hello652"],
      answer: "1"
    },  
    {
      question: "Which keyword is used to inherit a class in Java?",
      options: ["extends", "implements", "inherits", "super"],
      answer: "0"
    },
    {
      question: "What is the output of System.out.println(10.0 / 0);?",
      options: ["0", "Compilation Error", "NaN", "Infinity"],
      answer: "3"
    },
    { 
      question: "Which Java collection stores key-value pairs?",
      options: ["List", "Set", "Map", "Queue"],
      answer: "2"
    },
    {   
      question: "Which method is called automatically when an object is created?",
      options: ["init()", "constructor", "main()", "create()"],
      answer: "1"
    },
    {   
      question: "Which package contains the Scanner class in Java?",
      options: ["java.io", "java.util", "java.lang", "java.text"],
      answer: "1"
    },
    {   
      question: "Which statement is used to exit from a loop in Java?",
      options: ["break", "continue", "return", "exit"],
      answer: "0"
    },
    {   
      question: "Which of the following is not a valid Java access modifier?",
      options: ["public", "private", "protected", "external"],
      answer: "3"
    },
    {   
      question: "What does the equals() method compare?",
      options: ["Memory reference", "Content of Objects", "Hash codes", "Class types"],
      answer: "1"
    },
    {
      question: "Which exception is thrown when an array index is accessed out of bounds?",
      options: ["IndexOutOfBoundsException", "NullPointerException", "ClassCastException", "IOException"],
      answer: "0"
    },
    {
      question: "What is method overloading?",
      options: ["Defining multiple methods with the same name but different parameters", "Redefining a method in a subclass", "Using multiple classes in a program", "Declaring a method as static"],
      answer: "0"
    },
    {
      question: "Which class is used for object serialization in Java?",
      options: ["ObjectOutputStream", "FileOutputStream", "BufferedOutputStream", "ByteArrayOutputStream"],
      answer: "0"
    },
    {
      question: "Which keyword is used to create an interface in Java?",
      options: ["interface", "class", "abstract", "implements"],
      answer: "0"
    },
    {
      question: "Which Java feature allows multiple classes to have methods with the same name?",
      options: ["Inheritance", "Encapsulation", "Polymorphism", "Abstraction"],
      answer: "2"
    },
    {
      question: "Which design pattern ensures only one instance of a class exists?",
      options: ["Singleton", "Factory", "Prototype", "Observer"],
      answer: "0"
    },
    {
      question: "Which keyword is used to declare an immutable class in Java?",
      options: ["final", "static", "const", "abstract"],
      answer: "0"
    },
    {
      question: "Which Java feature supports functional programming?",
      options: ["Genetics", "Streams", "Threads", "Serialization"],
      answer: "1"
    },
    {
      question: "Which method is used to get the thread ID in Java?",
      options: ["getId()", "threadId()", "getThreadId()", "id()"],
      answer: "0"
    },
    {
      question: "Which Java feature is used to achieve multiple inheritance?",
      options: ["Abstract classes", "Interfaces", "Static methods", "Inheritance is not allowed"],
      answer: "1"
    },
    {
      question: "Which garbage collection method forces garbage collection?",
      options: ["gc()", "collect()", "clear()", "runGC()"],
      answer: "0"
    },
    {
      question: "What is the default size of an ArrayList in Java?",
      options: ["15", "20", "15", "10"],
      answer: "3"
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