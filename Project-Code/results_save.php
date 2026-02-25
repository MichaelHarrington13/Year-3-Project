<?php
session_start();
include "db.inc.php";

/* Must be logged in */
if (!isset($_SESSION["user_id"])) {
    http_response_code(401);
    exit("Not logged in");
}

/* Read JSON from survey */
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["answers"])) {
    http_response_code(400);
    exit("No answers received");
}

$answers = $data["answers"];

/* Ensure we got all 10 answers */
if (count($answers) !== 10) {
    http_response_code(400);
    exit("Expected 10 answers");
}

/* Calculate score */
$score = array_sum($answers);
$total = count($answers);
$user_id = $_SESSION["user_id"];

/* Save answers in session (optional) */
$_SESSION["answers"] = $answers;

/* Insert into database */
$sql = "INSERT INTO survey_results (user_id, score, total_questions)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "iii", $user_id, $score, $total);
mysqli_stmt_execute($stmt);

echo "Saved";
?>