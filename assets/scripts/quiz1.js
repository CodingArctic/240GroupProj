// Set of Quiz Questions
var questions = [
        {
        question: "What is the multi-level hierarchy structure that all files in a UNIX system are organized into?",
        answers: {
            a: "Directory Tree",
            b: "Binary Tree",
            c: "Directory",
            d: "File"
        },
        correctAnswer: "a"
        },
        {
            question: "What directory is located at the very top of the file system?",
            answers: {
                a: "sudo",
                b: "branch",
                c: "root",
                d: "key"
            },
            correctAnswer: "c"
        },
        {
            question: "What symbol often represents the root directory?",
            answers: {
                a: "/",
                b: "*",
                c: "()",
                d: "~"
            },
            correctAnswer: "a"
        },
        {
            question: "Which group cannot be assigned permissions on a UNIX system?",
            answers: {
                a: "Owner",
                b: "Group",
                c: "Other (also known as World)",
                d: "Neo"
            },
            correctAnswer: "d"
        },
        {
            question: "Which command allows the user to check the ownership permissions of a file or directory?",
            answers: {
                a: "rm",
                b: "man",
                c: "ls -l",
                d: "mkdir"
            },
            correctAnswer: "c"
        },
        {
            question: "Which absolute values should be used to assign the owner read, write, and execute permissions as well as the group and other users with read and execute permissions?",
            answers: {
                a: "655",
                b: "755",
                c: "890",
                d: "325"
            },
            correctAnswer: "b"
        },
        {
            question: "What is the syntax for the 'chmod' command?",
            answers: {
                a: "chmod (options) (file/directory)",
                b: "chmod (options) (permissions)",
                c: "chmod (options) (permissions) (file/directory)",
                d: "chmod (options) (file/directory) (permissions)"
            },
            correctAnswer: "c"
        },
        {
            question: "What permissions can be assigned to users in a UNIX system?",
            answers: {
                a: "Read, Write, Execute",
                b: "Read, Write, Do",
                c: "Read and Write",
                d: "View, Do, Edit"
            },
            correctAnswer: "a"
        },
        {
            question: "Why are ownership permissions important for web development?",
            answers: {
                a: "Permissions dictate where users can access your website from",
                b: "Permissions dictate who your user can share your website with",
                c: "Permissions dictate how long users can access your website",
                d: "Permissions dictate what is visible to the user"
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

