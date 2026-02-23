<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Substance Use Survey</title>

<style>

*{
box-sizing:border-box;
margin:0;
padding:0;
font-family:Arial;
}

body{
background:#f3f3f3;
}


.page{
max-width:1100px;
margin:auto;
background:white;
min-height:100vh;
display:flex;
flex-direction:column;
border-radius:18px;
box-shadow:0 10px 35px rgba(0,0,0,0.08);
overflow:hidden;
}


.header{
display:flex;
border-bottom:1px solid #e5e5e5;
}

.header div{
flex:1;
padding:20px;
text-align:center;
border-right:1px solid #e5e5e5;
font-weight:500;
}

.header div:last-child{
border-right:none;
}

.about-section{
padding:40px;
}

.about-section h2{
text-align:center;
margin-bottom:20px;
}

.about-box{
background:#fafafa;
border:1px solid #e5e5e5;
border-radius:14px;
padding:25px;
line-height:1.6;
}

.graph-section{
display:flex;
gap:30px;
padding:40px;
justify-content:center;
}

.graph-card{
flex:1;
background:#fafafa;
border-radius:14px;
border:1px solid #e5e5e5;
padding:25px;
text-align:center;
}

.graph-placeholder{
height:180px;
background:#e8e8e8;
border-radius:10px;
margin-bottom:10px;
}


.button-area{
display:flex;
justify-content:center;
padding:30px 40px 50px;
}

.start-btn{
background:#0018f9;
color:white;
padding:16px 32px;
border-radius:12px;
text-decoration:none;
font-size:16px;
}

.start-btn:hover{
background:#222;
}


@media (max-width:800px){

.page{
border-radius:0;
}

.header{
flex-direction:column;
}

.header div{
border-right:none;
border-bottom:1px solid #eee;
}

.graph-section{
flex-direction:column;
}

.about-section{
padding:25px;
}

}

</style>
</head>

<body>

<div class="page">

<div class="header">
<div>085 876 3069</div>
<div>Substance Use Survey</div>
<div>Account Information (to view graphs) </div>
</div>

<div class="about-section">
<h2>About Us</h2>

<div class="about-box">

<p>
Example Text Example Text Example Text Example Text Example Text
</p>

<br>


</div>
</div>

<div class="graph-section">

<div class="graph-card">
<div class="graph-placeholder"></div>
Example addict
</div>

<div class="graph-card">
<div class="graph-placeholder"></div>
Example non-addict
</div>

</div>

<div class="button-area">
<a href="Survey.php" class="start-btn">Start Survey</a>
</div>

</div>

</body>
</html>

