function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;
		
		
        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};


function showScores() {
    var gameOverHTML = "<h1>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};


// create questions
var questions = [

    new Question("What is the name of the yoga posture in card one?",["Vinyasa Yoga Splits", "Sirsa Setu Bandhasanasana","Vinyasa Yoga Shoulderstand", "Side Stretch Flow with a Twist"], "Sirsa Setu Bandhasanasana"),
    new Question("What is the name of the yoga posture in card two?",["Plough Flow","Akarna Dhanurasana", "Down To The Earth Hips", "Anjaneyasana", "Akarna Dhanurasana Flow"], "Anjaneyasana"),
    new Question("What is the name of the yoga posture in card three?", ["Utkatasana", "Plough Flow","Groin Opening Backbend to Cat", "Seated Twist Sequence"], "Utkatasana"),
    new Question("What is the name of the yoga posture in card four?", ["Hero to Pigeon", "Utkatasana", "Chaturanga Dandasana", "Seated Twist Sequence"], "Chaturanga Dandasana"),
    new Question("What is the name of the yoga posture in card five?", ["Ustrasana", "Seated Twist Sequence", "Akarna Dhanurasana", "AnjaneyasanaDown To The Earth Hips"], "Ustrasana"),
	new Question("What is the name of the yoga posture in card six?", ["Ardha Chandrasana", "Anjaneyasana", "Bhuja Vrischikasana", "Parsva Sirsasana"], "Ardha Chandrasana"),
	new Question("What is the name of the yoga posture in card seven?", ["Ustrasana", "Parsva Sirsasana", "Sirsa Setu Bandhasanasana", "Bhuja Vrischikasana"], "Parsva Sirsasana"),
	new Question("What is the name of the yoga posture in card eight?", ["Parsva Sirsasana", "Seated Twist Sequence", "Bhuja Vrischikasana", "Yoganidrasana"], "Bhuja Vrischikasana"),
	new Question("What is the name of the yoga posture in card nine?", ["Akarna Dhanurasana Bow", "Anjaneyasana", "Yoganidrasana", "Bhuja Vrischikasana"], "Yoganidrasana"),
	new Question("What is the name of the yoga posture in card ten?", ["Ustrasana", "Akarna Dhanurasana", "Bhuja Vrischikasana", "Sirsa Setu Bandhasanasana"], "Akarna Dhanurasana")
	
];


// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();




