// Questions & correct answers
const questions = [
    { question: "What force do Ana and Pauleen use to move their scooters forward?", choices: ["Gravity", "Friction", "Push from their feet", "Air resistance"], answer: "C" },
    { question: " Why did Pauleen move ahead of Ana at the start of the race?", choices: ["She had a better scooter", "She used more power", " She had a stronger wind push"," She had a head start"], answer: "B" },
    { question: "According to Zade, what is \"work\" in physics?", choices: ["Doing homework", "Using force to move something", "Running really fast","Studying hard"], answer: "B" },
    { question: " What is the relationship between power and work?", choices: ["Power is how fast work is done", "Work and power are the same thing", "Work happens without power", "Power is only about strength"], answer: "A" },
    { question: "If Ana wanted to increase her speed, what should she do?", choices: ["Push harder and more frequently", "Stop using force", "Rely only on gravity", "Slow down her movements"], answer: "A" },
    { question: "  What happens when Ana starts kicking the ground harder and faster?", choices: ["She stays at the same speed", "She begins to move slower", "She speeds up and catches up to Pauleen", "Her scooter stops moving"], answer: "C" },
    { question: "What everyday example does Zade use to explain power?", choices: ["Carrying books upstairs", "Running a marathon", "Riding a bike", "Doing math problems"], answer: "A" },
    { question: "If two people do the same amount of work, who has more power?", choices: [" The one who takes the most time", "The one who finishes faster", "The one who uses less force", "The one who does no work"], answer: "B" },
    { question: "What does Ana realize about power at the end of the story?", choices: [" It's all about being stronger", "It's about using energy quickly", "It's about working harder, not faster", " It doesn't affect speed"], answer: "B" },
    { question: " What key physics concept does this story illustrate?", choices: ["Power is the speed of doing work", "Work is only done when standing still", "More mass means more speed", "Gravity makes scooters faster"], answer: "A" }
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
            saveProgress(7);
            setTimeout(() => window.location = 'level7.php', 2000);
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