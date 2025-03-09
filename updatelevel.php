<?php
include 'conne.php'; // Your database connection file

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);

if(isset($data['username'], $data['level'])) {
    $username = $data['username'];
    $level = $data['level'];

    // Update the user's level
    $query = "UPDATE profile SET level = ? WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("is", $level, $username);

    if ($stmt->execute()) {
        echo "Level updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Invalid data received";
}
?>
