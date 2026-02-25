<?php
session_start();

if (!isset($_SESSION["user_id"])) {
  header("Location: index.php");
  exit();
}

$answers = $_SESSION["answers"] ?? [];
if (count($answers) !== 10) {
  die("No complete survey found. Please take the survey again.");
}

$score = array_sum($answers);

/* DAST-10 interpretation */
if ($score == 0) {
  $level = "No problems reported";
  $action = "None at this time";
} elseif ($score <= 2) {
  $level = "Low level";
  $action = "Monitor; re-assess at a later date";
} elseif ($score <= 5) {
  $level = "Moderate level";
  $action = "Further investigation recommended";
} elseif ($score <= 8) {
  $level = "Substantial level";
  $action = "Intensive assessment recommended";
} else {
  $level = "Severe level";
  $action = "Intensive assessment recommended";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>DAST-10 Results</title>

<style>
*{box-sizing:border-box;margin:0;padding:0;font-family:Arial;}
body{
  min-height:100vh;
  background:#f3f3f3;
  display:flex;
  justify-content:center;
  align-items:center;
  padding:16px;
}
.card{
  width:100%;
  max-width:520px;
  background:#fff;
  border-radius:20px;
  padding:32px 24px;
  box-shadow:0 15px 40px rgba(0,0,0,0.08);
  text-align:center;
}
h2{margin-bottom:18px;color:#333;}
.score{
  font-size:44px;
  font-weight:700;
  margin:10px 0 18px;
}
.level{
  font-size:18px;
  font-weight:700;
  margin-bottom:8px;
}
.action{
  color:#555;
  line-height:1.5;
  margin-bottom:18px;
}
.btns{
  display:flex;
  gap:12px;
  justify-content:center;
  flex-wrap:wrap;
}
a.btn{
  display:inline-block;
  padding:12px 18px;
  border-radius:12px;
  text-decoration:none;
  font-weight:700;
}
.primary{background:#3f3f3f;color:#fff;}
.primary:hover{background:#222;}
.secondary{background:#e9e9e9;color:#222;}
.secondary:hover{background:#dcdcdc;}
</style>
</head>

<body>
  <div class="card">
    <h2>DAST-10 Results</h2>

    <div class="score"><?php echo $score; ?> / 10</div>

    <div class="level"><?php echo $level; ?></div>
    <div class="action"><b>Suggested Action:</b> <?php echo $action; ?></div>

    <div class="btns">
      <a class="btn primary" href="Survey.php">Take Again</a>
      <a class="btn secondary" href="HomePage.php">Back to Home</a>
    </div>
  </div>
</body>
</html>