// Questions & correct answers
const questions = [
    { question: "What type of energy did the rock have while it was balanced on the hill?", choices: ["Kinetic energy ", " Potential energy", "Thermal energy", " Electrical energy"], answer: "B" },
    { question: " What caused the rock’s potential energy to change into kinetic energy?", choices: ["The wind", " The force of Charles pushing it", "The weight of the rock","The sun’s heat"], answer: "B" },
    { question: " How did the rock's energy change as it rolled downhill?", choices: [" It stayed the same", "It lost energy", " Its potential energy turned into kinetic energy"," It gained potential energy"], answer: "C" },
    { question: "What force pulled the rock down the hill?", choices: ["He needed more speed ", "He needed to apply energy in smaller amounts", "He needed more mass", "He needed to push harder"], answer: "B" },
    { question: "If Charles had not pushed the rock, what would have happened to its potential energy?", choices: ["It would remain the same", " It would turn into heat energy", " It would disappear", " It would turn into kinetic energy on its own"], answer: "A" },
    { question: "What happened to the rock’s speed as it rolled downhill?", choices: ["It slowed down", "It stayed at the same speed", " It stopped moving", " It increased"], answer: "D" },
    { question: "Where did the rock's potential energy come from?", choices: ["Its height on the hill", "The weight of Charles", "The stream below"," The noise it made"], answer: "A" },
    { question: "What happened when the rock splashed into the water?", choices: [" It turned into potential energy again ", "It created waves and sound energy", " It stopped moving forever", "It floated on the water"], answer: "B" },
    { question: "What did Charles learn from his experience with the rock?", choices: ["Potential energy does not exist", " Rocks cannot store energy", "Small actions can lead to big consequences", "Energy is only found in moving objects"], answer: "C" },
    { question: " How could Charles increase the potential energy of another rock?", choices: ["Move it to a higher place", "Push it down a hill", " Make it smaller", "  Put it in the water"], answer: "A" },
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
            setTimeout(() => window.location = 'level10.php', 2000);
         } else {
            document.getElementById('retry').style.display = 'block';
        }
        
            
    }
}
/*************  ✨ Codeium Command ⭐  *************/
/**
 * Resets the quiz to its initial state.
 * Removes selected class from all buttons
 * Resets all hidden input values
 * Resets all error messages
 * Hides retry button
 * Resets result message
 */
/******  082e2d5f-3814-4684-bc5a-0f9aa9016c64  *******/function retryQuiz() {
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