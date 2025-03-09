// Questions & correct answers
const questions = [
    { question: "What is the energy called that is associated with a moving mass?", choices: ["Potential Energy ", "Kinetic Energy", "Gravitational Energy", "Thermal Energy"], answer: "B" },
    { question: "When Justine tried running at the boulder, he was using what form of energy?", choices: ["Electrical Energy", "Chemical Energy", "Kinetic Energy  ","Stored Energy"], answer: "C" },
    { question: " Why did the bookshelf break when Justine pushed it with kinetic energy?", choices: ["He pushed too slowly", "He pushed too quickly, transferring all his kinetic energy too fast", "He didn’t push hard enough","The bookshelf was already broken"], answer: "B" },
    { question: " What was Justine’s realization after breaking the bookshelf?", choices: ["He needed more speed ", "He needed to apply energy in smaller amounts", "He needed more mass", "He needed to push harder"], answer: "B" },
    { question: "How did Justine break the glass door?", choices: ["By pushing it slowly with a boulder ", "By throwing a smaller stone at it at high speed", "By kicking it with his foot", "By pushing it with all his strength"], answer: "B" },
    { question: "What did Justine try to use to break the glass door at first?", choices: ["A heavy boulder", "A sword", "His bare hands", "A large stick"], answer: "A" },
    { question: "What was the reason the boulder didn’t break the glass door?", choices: ["It was too heavy", "It was too slow", "It was too small", "The door was too strong"], answer: "B" },
    { question: "What did Justine realize about kinetic energy when he couldn't press the big button with his weight alone?", choices: ["He needed to focus on speed more", "He needed more mass", "He needed less energy", " He needed to jump higher"], answer: "B" },
    { question: "How did Justine finally press the big button to open the door?", choices: ["By jumping without carrying anything", "By carrying a boulder and jumping on the button", "By pushing the button with his hands", "By running into the button"], answer: "B" },
    { question: "What did Justine reflect on as he left the temple?", choices: ["How kinetic energy was used in ancient cities to move heavy stones", " How glass doors were designed to resist kinetic energy", "How ancient people avoided using kinetic energy", "How boulders were always too heavy to be moved"], answer: "A" }
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
            saveProgress(9);
            setTimeout(() => window.location = 'level9.php', 2000);
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