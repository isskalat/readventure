// Questions & correct answers
const questions = [
    { question: "What was Thomas passionate about?", choices: ["Running", "Skateboarding", "Biking", "Swimming"], answer: "B" },
    { question: "What natural force did Thomas feel as he started pushing?", choices: ["Gravity", "Friction", "Wind","Magnetism"], answer: "C" },
    { question: "What happened to Thomas' kinetic energy as he pushed harder?", choices: ["It decreased", "It stayed the same", "It increased","It disappeared"], answer: "C" },
    { question: "What physics lesson did Thomas recall while skateboarding?", choices: ["The law of conservation of mass", "The relationship between motion and energy", "The principle of buoyancy", "The formula for speed"], answer: "B" },
    { question: " What obstacle caused Thomas to fall?", choices: ["A pothole", " A small rock", "A puddle of water", " A crack in the pavement"], answer: "B" },
    { question: " Why did Thomas' skateboard stop but his body kept moving?", choices: ["Because he jumped off in time", " Because his kinetic energy transferred to his body", "Because he applied the brakes too hard", "Because the wind stopped him"], answer: "B" },
    { question: "What law of motion did Thomas experience during his fall?", choices: ["Newton’s First Law (Inertia)", " Newton’s Second Law (Force = Mass × Acceleration)", " Newton’s Third Law (Action & Reaction)", "The Law of Gravity"], answer: "A" },
    { question: " How did Thomas react after tumbling through the grass?", choices: ["He was angry", "He cried", "He laughed", "He gave up skateboarding"], answer: "C" },
    { question: "What lesson did Thomas take away from this experience?", choices: ["He should never skateboard again", " He should ride more carefully", "He should always wear protective gear", "He should practive skateboarding on flat ground"], answer: "B" },
    { question: "What did Thomas decided to do at the end of the story?", choices: ["Go home and rest", "Call his friends to join him", "Resume his ride with more awareness", "Try a new trick"], answer: "C" },
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
            saveProgress(8);
            setTimeout(() => window.location = 'level8.php', 2000);
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