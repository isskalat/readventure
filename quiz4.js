// Questions & correct answers
    const questions = [
        { question: "What was the problem Nicole needed to solve at the docks?", choices: [" The boat was stuck", "The path was blocked by a heavy barrel", "The rope was tangled", "The dock was too slippery"], answer: "B" },
        { question: "What concept from physics did Nicole remember in the story?", choices: ["Velocity", "Work", "Speed","Energy"], answer: "B" },
        { question: "How did Nicole attach the barrel to herself to move it?", choices: ["She used a chain", "She tied a rope around the barrel", "She used a pulley system","She placed it on a cart"], answer: "B" },
        { question: "Why was lifting the barrel not an option?", choices: ["The barrel was too light", "The barrel was too far away", "The barrel was too heavy to lift", "The barrel was too small"], answer: "C" },
        { question: "What did Nicole apply to move the barrel?", choices: ["A push", " A force", "A lever", "A speed"], answer: "B" },
        { question: "What made it difficult for Nicole to move the barrel?", choices: ["The weight of the barrel", "The friction from the dock", "The height of the barrel", "The direction of the wind"], answer: "B" },
        { question: "What did Nicole realize about moving the barrel over a distance?", choices: ["The force needed would be the same no matter the distance", "The distance moved made the force easier to apply", "The shorter the distance, the easier it would be", "Moving the barrel a longer distance required more force"], answer: "B" },
        { question: "What was Nicole's goal in the story?", choices: ["To lift the barrel", "To clear the path for the boats", "To measure the weight of the barrel", "To tie the rope to the post"], answer: "B" },
        { question: "How did Nicole feel after successfully moving the barrel?", choices: ["Confused about how she did it", "Proud and accomplished", "Angry that it took so long", "Frustrated she couldn’t lift it"], answer: "B" },
        { question: "What key lesson did Nicole learn in the story?", choices: ["Force only works in a straight line", "Work is done when a force moves an object over a distance", "Work is only done when an object is lifted", " Force is not needed to move an object"], answer: "A" }
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
                    <button onclick="selectAnswer('q${qNum}', 'D')">D. ${q.choices[3]}</button>
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
            saveProgress(4);
            setTimeout(() => window.location = 'level5.php', 2000);
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