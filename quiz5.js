// Questions & correct answers
const questions = [
    { question: "What is \"power\" in physics?", choices: [" The amount of strength you have", "The amount of work you do in a certain time", "How high you can jump", "How far you can run"], answer: "B" },
    { question: "If you do the same amount of work but faster, what happens to your power?", choices: ["Power decreases", "Power stays the same", "Power increases","Power disappears"], answer: "C" },
    { question: "What happens when you push something harder and faster?", choices: [" It uses less power", "It takes more time", "It uses more power","It doesn't move"], answer: "C" },
    { question: " What is an example of using power?", choices: [" Running a race and finishing quickly", "Sleeping for a long time", "Watching TV", "Standing still for an hour"], answer: "A" },
    { question: "If you push a merry-go-round slowly, how much power do you use?", choices: ["More power", " Less power", " No power", "The same power"], answer: "B" },
    { question: " Which of the following shows you're using more power?", choices: ["Pushing a toy car gently", "Pushing a heavy box slowly", "Pedaling your bike fast", "Sitting and relaxing"], answer: "C" },
    { question: " What happens to a car's power when it drives faster?", choices: ["The car uses less power", "The car uses more power", "The car stops moving", "The car uses no power"], answer: "B" },
    { question: "If Mia pushes a merry-go-round hard and fast, what will happen?", choices: ["The merry-go-round moves slowly", "The merry-go-round moves faster", "The merry-go-round stops", "The merry-go-round doesn't move"], answer: "B" },
    { question: "What is the best way to make a merry-go-round spin faster?", choices: [" Push it slowly", "Push it harder and faster", "Let it sit still", "Push it lightly"], answer: "B" },
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
            saveProgress(6);
            setTimeout(() => window.location = 'level6.php', 2000);
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