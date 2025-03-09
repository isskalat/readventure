// Questions & correct answers
const questions = [
    { question: "What was the main idea Sophia learned about rockets?", choices: [" Energy", "Newton’s Third Law", "Gravity", "Heat"], answer: " Newton’s Third Law" },
    { question: "What did Sophia use to make the air pressure inside the bottle?", choices: ["A pump", "A fan", "A balloon","A heater"], answer: "A" },
    { question: "What made the bottle shoot into the air?", choices: ["The water shooting out", "The cork", "The heat","The gravity"], answer: "A" },
    { question: "How did the water in the bottle affect the rocket’s flight?", choices: ["More water made it fly higher", "More water made it fly lower", "More water didn’t change anything", "More water made it stay still"], answer: "A" },
    { question: "Why was Sophia excited after the experiment?", choices: ["She built a real rocket", "She understood how rockets work", "She made the rocket bigger", "She made a new law of physics"], answer: "B" },
    { question: " What did Sophia use to seal the bottle before pumping air into it?", choices: ["A rubber band", " A cork", "A lid", "Tape"], answer: "B" },
    { question: "What force caused the bottle to go up into the air after the cork popped?", choices: ["Air resistance", "Air pressure", "Gravity", " Friction"], answer: "B" },
    { question: "What did the increase in air pressure inside the bottle cause?", choices: ["The cork to pop out", "The water to freeze", "The bottle to get heavier", "The bottle to float"], answer: "A" },
    { question: "How did Sophia know that Newton’s Third Law was at work during the experiment?", choices: ["She saw that the rocket stayed still", "The bottle flew up as the water was pushed down", "The air pressure didn’t change", "The cork stayed in place"], answer: "B" },
    { question: "What is the relationship between the amount of water in the bottle and the rocket’s height?", choices: ["More water results in a lower height", "More water results in a higher height", "More water has no effect on height", "More water causes the rocket to fly in a circle"], answer: "A" },
];

// Load quiz dynamically
function loadQuiz() {
    const quizContainer = document.getElementById("quiz-container");
    quizContainer.innerHTML = ""; // Clear existing questions if any

    questions.forEach((q, index) => {
        const qNum = index + 1;
        quizContainer.innerHTML += `
            <div class="question" data-question="q${qNum}">
                <p>${qNum}. ${q.question}</p>
                <div class="choices">
                    <button onclick="selectAnswer('q${qNum}', 'A')">A. ${q.choices[0]}</button>
                    <button onclick="selectAnswer('q${qNum}', 'B')">B. ${q.choices[1]}</button>
                    <button onclick="selectAnswer('q${qNum}', 'C')">C. ${q.choices[2]}</button>
                </div>
                <input type="hidden" id="q${qNum}" value="">
                <div class="error" id="error-q${qNum}"></div>
            </div>
        `;
    });
}

// Store user selection
function selectAnswer(question, answer) {
    document.getElementById(question).value = answer;
    document.querySelectorAll(`[data-question="${question}"] button`).forEach(btn => btn.classList.remove('selected'));
    event.target.classList.add('selected');
}

// Submit quiz and check answers
function submitQuiz() {
    let allAnswered = true;
    let score = 0;

    questions.forEach((q, index) => {
        const qNum = index + 1;
        const selected = document.getElementById(`q${qNum}`).value;
        const errorDiv = document.getElementById(`error-q${qNum}`);

        if (selected === '') {
            errorDiv.innerText = "You missed this question!";
            allAnswered = false;
        } else {
            errorDiv.innerText = '';
            if (selected === q.answer) score++;
        }
    });

    if (allAnswered) {
        document.getElementById('result').innerHTML = `You got ${score}/10 correct!`;

        if (score >= 7) {  // Unlock next level if score is 7 or more
            saveProgress(3);
            setTimeout(() => window.location = 'level3.php', 2000);
         } else {
            document.getElementById('retry').style.display = 'block';
        }
        
            
    }
}
function retryQuiz() {
    document.querySelectorAll('.choices button').forEach(button => button.classList.remove('selected'));
    document.querySelectorAll('input[type="hidden"]').forEach(input => input.value = "");
    document.querySelectorAll('.error').forEach(error => error.innerText = "");
    document.getElementById('retry').style.display = 'none';
    document.getElementById('result').innerHTML = "";

}

// Save progress
function saveProgress(level) {
    fetch('testprogrss.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `level=${level}`
    }).then(response => response.text()).then(console.log);
}
document.getElementById('sidebar-toggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('show');
    document.body.classList.toggle('sidebar-open');
});