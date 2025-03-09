<?php
include 'conne.php'; // Your database connection file

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);

if(isset($data['username'])) {
    $username = $data['username'];

    // Fetch user level
    $query = "SELECT level FROM profile WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        echo json_encode(["success" => true, "level" => $row['level']]);
    } else {
        echo json_encode(["success" => false, "message" => "User not found"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}
?>
