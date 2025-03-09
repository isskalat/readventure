// Questions & correct answers
const questions = [
    { question: "What is 2 + 2?", choices: ["3", "4", "5"], answer: "B" },
    { question: "What is the capital of France?", choices: ["Berlin", "Madrid", "Paris"], answer: "C" },
    { question: "What color is the sky?", choices: ["Blue", "Green", "Red"], answer: "A" },
    { question: "How many legs does a spider have?", choices: ["6", "8", "10"], answer: "B" },
    { question: "What is H2O?", choices: ["Oxygen", "Hydrogen", "Water"], answer: "C" },
    { question: "Which planet is closest to the sun?", choices: ["Venus", "Mars", "Mercury"], answer: "C" },
    { question: "Who wrote Romeo and Juliet?", choices: ["Shakespeare", "Dickens", "Hemingway"], answer: "A" },
    { question: "Which gas do plants use for photosynthesis?", choices: ["Carbon Dioxide", "Oxygen", "Nitrogen"], answer: "A" },
    { question: "How many continents are there?", choices: ["5", "6", "7"], answer: "C" },
    { question: "Which is the largest ocean?", choices: ["Atlantic", "Indian", "Pacific"], answer: "C" }
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
            saveProgress(2);
            setTimeout(() => window.location = 'level3.php', 2000);
        } else {
            document.getElementById('result').innerHTML += "<br>Try again!";
        }
    }
}

// Save progress
function saveProgress(level) {
    fetch('testprogrss.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `level=${level}`
    }).then(response => response.text()).then(console.log);
}
