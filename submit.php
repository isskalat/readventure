<?php
session_start();
if (!isset($_SESSION['username'])) {
    die("Please log in first.");
}

// Correct answers
$correctAnswers = [
    'q1' => 'A', // Paris
    'q2' => 'B', // 4
    'q3' => 'B'  // Mars
];

$userAnswers = [
    'q1' => $_POST['q1'] ?? '',
    'q2' => $_POST['q2'] ?? '',
    'q3' => $_POST['q3'] ?? ''
];

$score = 0;
foreach ($correctAnswers as $question => $correctAnswer) {
    if (isset($userAnswers[$question]) && $userAnswers[$question] === $correctAnswer) {
        $score++;
    }
}

// Output result
echo "<h2>Quiz Results</h2>";
echo "You scored $score out of " . count($correctAnswers) . ".<br><br>";

foreach ($userAnswers as $question => $answer) {
    echo "Your answer for $question: $answer <br>";
}

// Optional: Save score to database (if tracking progress)
require 'db.php';
$username = $_SESSION['username'];
$sql = "INSERT INTO user_scores (username, score) VALUES ('$username', '$score')";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
