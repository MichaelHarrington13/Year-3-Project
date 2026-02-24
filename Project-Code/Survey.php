<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Survey Page </title>

<style>



</style>
</head>

<body>

<div class="header">
<div>Logo</div>
<div>Substance Use Survey</div> <!--make this a link -->
<div>Contact Number </div>
</div>

<div class="card">

<div class="question" id="questionText"></div>

<div class="answer-box">

<div class="answer" id="trueBtn" onclick="selectAnswer(true)">True</div>
<div class="answer" id="falseBtn" onclick="selectAnswer(false)">False</div>

<div class="buttons">
<button class="prev" onclick="prevQuestion()">Previous</button>
<button class="next" id="nextBtn" onclick="nextQuestion()" disabled>Next</button>

</div>
</div>
</div>

<script>

    
</script>