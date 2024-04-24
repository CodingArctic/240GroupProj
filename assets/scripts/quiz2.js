// Set of Quiz Questions
var questions = [
    {
    question: "Which command allows the user to find the functionality, syntax, and options for every UNIX command?",
    answers: {
        a: "ls",
        b: "help",
        c: "docs",
        d: "man"
    },
    correctAnswer: "d"
    },
    {
        question: "What is the syntax of the MKDIR command?",
        answers: {
            a: "mkdir -m (permissions) (directory name)",
            b: "mkdir (options)",
            c: "mkdir (options) (directory name)",
            d: "mkdir -m (directory name)"
        },
        correctAnswer: "c"
    },
    {
        question: "What command outputs the directory the user is currently located in?",
        answers: {
            a: "echo",
            b: "pwd",
            c: "ls",
            d: "cd"
        },
        correctAnswer: "b"
    },
    {
        question: "What two commands allow the user to rename files amongst other things?",
        answers: {
            a: "mv & cp",
            b: "mv & rm",
            c: "cp & rm",
            d: "ls & cd"
        },
        correctAnswer: "a"
    },
    {
        question: "What is the main command a user will use to navigate the file system?",
        answers: {
            a: "rm",
            b: "cd",
            c: "pwd",
            d: "chmod"
        },
        correctAnswer: "b"
    },
    {
        question: "How would a user view the manual page for the RM command?",
        answers: {
            a: "help rm",
            b: "docs rm",
            c: "cd rm",
            d: "man rm"
        },
        correctAnswer: "d"
    },
    {
        question: "Which command is used to change the permissions of a file or directory?",
        answers: {
            a: "ls -l",
            b: "chmod",
            c: "sudo",
            d: "rm"
        },
        correctAnswer: "b"
    },
    {
        question: "What is the current working directory?",
        answers: {
            a: "The directory the user is currently located in",
            b: "Any directory",
            c: "The directory the user was previously located in",
            d: "A directory with specific permissions"
        },
        correctAnswer: "a"
    },
    {
        question: "Which command allows the user to view files and directories that are within the current directory the user is in?",
        answers: {
            a: "pwd",
            b: "chmod",
            c: "man",
            d: "ls"
        },
        correctAnswer: "d"
    }
];

// Get elements by ID
var quizContainer = document.getElementById('quizBody');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(questions, quizContainer, resultsContainer, submitButton);

// Generate quiz HTML
function generateQuiz(questions, quizContainer, resultsContainer, submitButton) {
    var output = [];
    var answers;
    
    for(var i=0; i<questions.length; i++){
        answers = [];
    
        for(letter in questions[i].answers){
            answers.push(
                '<label>'
                    + '<input type="radio" name="question'+i+'" value="'+letter+'">'
                    + letter + ') '
                    + questions[i].answers[letter]
                + '</label>' + '<br>'
            );
        }
    
        output.push(
            '<br>' + '<div class="question">' + questions[i].question + '</div>'
            + '<div class="answers">' + answers.join('') + '</div>'
        );
    }
    
    quizContainer.innerHTML = output.join('');
    submitButton.onclick = function(){
        showResults(questions, quizContainer, resultsContainer);
    }
}

// Compute and show results
function showResults(questions, quizContainer, resultsContainer){
    var answerContainers = quizContainer.querySelectorAll('.answers');
    var questionContainers = quizContainer.querySelectorAll('.question');
    var userAnswer = '';
    var numCorrect = 0;

    for(var i=0; i<questions.length; i++){
        userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
        if(userAnswer===questions[i].correctAnswer){
            numCorrect++;
            questionContainers[i].style.color = 'lightgreen';
        }
        else{
            questionContainers[i].style.color = 'red';
        }
    }
    resultsContainer.innerHTML = "You answered " + numCorrect + " out of " + questions.length + " questions correctly!";
}

