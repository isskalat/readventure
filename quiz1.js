// Questions & correct answers
const questions = [
    {question: "What shape is the puck used in the game of hockey?", choices:["Square","Triangle","Circle","Rectangle"], answer: "C" }, 

{question: "What is the color of the puck in the game of hockey?", choices: ["White","Blue","Black", "Red"], answer: "C" }, 

{question: "Which law of motion explains why the puck accelerates when Jeremiah hits it with his stick?", choices: ["Newton's First Law","Newton's Second Law","Newton's Third Law"," Law of Inertia"],  answer: "B" }, 

{question: "According to Newton's Second Law of Motion, what happens when Jeremiah applies force to the puck?", choices: ["The puck stays at rest","The puck accelerates in the direction of the force","The puck moves at a constant speed","The puck changes direction randomly"], answer: "B" }, 

{question: "What is the effect of the force applied by Jeremiah’s stick to the puck?", choices: ["It causes the puck to stop","It changes the puck's direction","It causes the puck to freeze in the place","It makes the puck bounce off the ice"], answer: "B" }, 

{question: "According to Newton's First Law of Motion, what happens when there is no external force acting on the puck?", choices: ["The puck continues to move in a straight line at a constant speed","The puck changes direction","The puck stops moving","The puck accelerates rapidly"], answer: "A" }, 

{question: "What law of motion explains why Jeremiah continues to move across the rink despite external forces from his opponents?", choices: ["Newton's First Law","Newton's Second Law","Newton's Third Law","Law of Inertia "], answer: "A" }, 

{question: "What was Jeremiah's goal in the game of hockey when he was chasing the puck?", choices: ["To stop the puck from moving","To pass the puck to a teammate","To shoot the puck into the goal and win the game","To block the opponent’s shots"], answer: "C" }, 

{question: "What happens to the direction of the puck when Jeremiah uses his stick?", choices: ["The puck moves straight ahead without change","The puck changes direction and continues towards the goal","The puck jumps into the air","The puck stops moving entirely"], answer: "B" }, 

{question: "In the context of Newton's Laws, how does the force applied by Jeremiah help him achieve the winning goal?", choices: ["It slows the puck down and keeps it in one spot","It applies enough force to change the puck’s direction towards the goal","It keeps the puck bouncing off the ice","It makes the puck float above the ice"], answer: "B" },
];

/*************  ✨ Codeium Command 🌟  *************/
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
            saveProgress(2);
            setTimeout(() => window.location = 'level2.php', 2000);
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