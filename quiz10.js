// Questions & correct answers
const questions = [
    { question: "What type of energy does Max have when he is sitting still on the swing?", choices: ["Kinetic energy ", " Potential energy", "Thermal energy", " Electrical energy"], answer: "B" },
    { question: "When Max is at the highest point of his swing, what kind of energy is at its maximum?", choices: ["Kinetic energy", "Potential energy", "Electrical energy","Chemical energy"], answer: "B" },
    { question: "What force pulls Max back down when he reaches the highest point?", choices: ["Friction", "Magnetism", "Gravity","Air resistance"], answer: "C" },
    { question: "How does Max increase his potential energy while swinging?", choices: [" By stopping suddenly", " By pumping his legs harder to go higher", "By jumping off the swing", "By sitting still"], answer: "B" },
    { question: "What happens to Max’s potential energy as he swings downward?", choices: ["It stays the same", " It turns into kinetic energy", "It disappears completely", "It increases"], answer: "B" },
    { question: " If Max wanted to gain more potential energy, what should he do?", choices: ["Swing lower", " Swing higher", " Stop moving", "Jump off the swing"], answer: "B" },
    { question: "What moment in the story represents the highest potential energy?", choices: ["When Max is sitting still on the swing", "When Max reaches the highest point before swinging down", "When Max is moving the fastest","When Max lets go of the swing"], answer: "B" },
    { question: " Why did Max feel weightless for a moment at the peak of his swing?", choices: ["Because his kinetic energy disappeared", "Because gravity wasn’t acting on him", "Because he temporarily stopped moving upward before swinging back down", " Because the wind was pushing him"], answer: "C" },
    { question: "What happens to Max’s potential energy after he lets go of the swing?", choices: ["It stays the same", "It turns into kinetic energy as he falls", "It turns into electrical energy", "It disappears"], answer: "B" },
    { question: "What lesson did Max learn about energy from swinging?", choices: [" Swinging does not require energy", "He can turn potential energy into motion by using his own force", " Gravity does not affect swings", "The higher he swings, the less energy he has"], answer: "B" },
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
            saveProgress(10);
            setTimeout(() => window.location = 'readventure.php', 2000);
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