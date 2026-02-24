<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Survey Page </title>

<style>
*{
box-sizing:border-box;
margin:0;
padding:0;
font-family:Arial;
}

body{
background:#f3f3f3;
min-height:100vh;
display:flex;
flex-direction:column;
align-items:center;
}

.header{
width:100%;
max-width:900px;
display:flex;
justify-content:space-between;
background:white;
border-radius:20px;
margin-top:20px;
overflow:hidden;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
background: #0F52BA;
color: white;
}

.header div{
flex:1;
padding:18px;
text-align:center;
border-right:1px solid #eee;
font-weight:600;
}

.header div:last-child{
border-right:none;
}

.card{
width:100%;
max-width:900px;
background:white;
margin-top:20px;
border-radius:20px;
padding:40px 20px;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
text-align:center;
}

.question{
font-size:24px;
margin-bottom:30px;
}


.answer-box{
max-width:400px;
margin:auto;
border:1px solid #ddd;
border-radius:14px;
padding:25px;
}

.answer{
border:1px solid #ccc;
border-radius:10px;
padding:14px;
margin:10px 0;
cursor:pointer;
transition:0.2s;
}

.answer:hover{
background:#f5f5f5;
}

.answer.selected{
background:#444;
color:white;
border-color:#222;
}


.buttons{
display:flex;
justify-content:space-between;
margin-top:20px;
}

button{
padding:12px 22px;
border:none;
border-radius:10px;
font-weight:600;
cursor:pointer;
}

.prev{
background:#e53935;
color:white;
}

.next{
background:#4CAF50;
color:white;
}

button:disabled{
opacity:0.5;
cursor:not-allowed;
}

@media (max-width:600px){

.question{
font-size:20px;
}

.card{
padding:30px 15px;
}

}

</style>
</head>

<body>

<div class="header">
<a href="HomePage.php">Logo</a>
<div>Substance Use Survey</div>
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

const questions = [
"Have you used drugs other than those required for medical reasons?",
"Do you abuse more than one drug at a time?",
"Are you always able to stop using drugs when you want to?",
"Have you had “blackouts” or “flashbacks” as a results of drug use?",
"Do you ever feel bad or guilty about your drug use?",
"Does your spouse (or parents) every complain about your involvement with drugs?",
"Have you neglected your family because of your use of drugs?",
"Have you engaged in illegal activities in order to obtain drugs?",
"Have you ever experienced withdrawal symptoms (felt sick) when you stopped taking drugs?",
"Have you had medical problems as a result of your drug use (e.g. memory loss, hepatitis, convulsions, bleeding, etc.)?"
];


let currentQuestion = 0;
let answers = [];

function loadQuestion(){

document.getElementById("questionText").innerText =
(currentQuestion + 1) + ". " + questions[currentQuestion];

document.getElementById("trueBtn").classList.remove("selected");
document.getElementById("falseBtn").classList.remove("selected");

document.getElementById("nextBtn").disabled = true;

if(answers[currentQuestion] !== undefined){

if(answers[currentQuestion] === true){
document.getElementById("trueBtn").classList.add("selected");
}else{
document.getElementById("falseBtn").classList.add("selected");
}

document.getElementById("nextBtn").disabled = false;

}

}

function selectAnswer(value){

answers[currentQuestion] = value;

document.getElementById("trueBtn").classList.remove("selected");
document.getElementById("falseBtn").classList.remove("selected");

if(value){
document.getElementById("trueBtn").classList.add("selected");
}else{
document.getElementById("falseBtn").classList.add("selected");
}

document.getElementById("nextBtn").disabled = false;

}

function nextQuestion(){

if(answers[currentQuestion] === undefined){
return;
}

if(currentQuestion < questions.length - 1){

currentQuestion++;
loadQuestion();

}else{

window.location.href = "results.php";

}

}

function prevQuestion(){

if(currentQuestion > 0){
currentQuestion--;
loadQuestion();
}

}

loadQuestion();

</script>

</body>
</html>