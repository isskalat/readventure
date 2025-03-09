// Questions & correct answers
const questions = [
    { question: "What was Cheska's primary goal in the story?", choices: ["To learn about physics", "To clear the pathway", "To study the rock", "To build a cart"], answer: "B" },
    { question: "What concept from physics did Cheska remember from her teacher?", choices: ["Velocity", "Force", "Work","Energy"], answer: "C" },
    { question: "What obstacle was blocking Cheska's pathway?", choices: ["A tree", "A large rock", "A pile of dirt","A fallen log"], answer: "B" },
    { question: "What did Cheska use to move the rock?", choices: ["Her hands", "A ramp and a cart", "A crane", "A pulley system"], answer: "B" },
    { question: "Why did the ramp make it easier to move the rock?", choices: ["It increased the force needed", " It allowed Cheska to push the rock horizontally", " It reduced the amount of force needed by spreading the effort over a longer distance", "It made the rock lighter"], answer: "C" },
    { question: "What did Cheska realize about work in physics?", choices: ["Work is done only when the force is applied vertically", "Work is only done when the object moves in the opposite direction", "Work is done when force moves an object over a distance", "Work is only done if the force is applied in a straight line"], answer: "C" },
    { question: "What did the small angle of the ramp affect?", choices: ["The speed of the rock", "The distance the rock moved", "The amount of force Cheska needed to apply, The amount of work done"], answer: "C" },
    { question: "What does work in physics involve?", choices: ["Force and distance", "Energy and time", "Power and velocity", " Speed and gravity"], answer: "A" },
    { question: "How did Cheska feel at the end of the story?", choices: ["Disappointed she couldn't move the rock", "Excited about what she learned in physics", "AConfused about the ramp", "Angry about the work she had to do"], answer: "B" },
    { question: "What lesson did Cheska learn during her experiment with the rock?", choices: ["Physics can be complicated", " Work in physics is about both force and distance", "Force is the only important factor in moving objects", "Ramps are not useful in physics"], answer: "B" }
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
            setTimeout(() => window.location = 'level4.php', 2000);
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