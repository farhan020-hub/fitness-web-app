<?php

session_start();

if( ! isset($_SESSION["user_id"]) ){  
    die('Only  logged in users can access this page!'); 
    } 

    if (isset($_SESSION["user_id"])) {
    
        $mysqli = require __DIR__ . "/database.php";
        
        $sql = "SELECT * FROM user
                WHERE id = {$_SESSION["user_id"]}";
                
        $result = $mysqli->query($sql);
        
        $user = $result->fetch_assoc();
    }







?>

<!DOCTYPE html>
<html>
    <head>
<title>SmartSuggestion</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

       <style>
            
            #tb {
    width: 100%;
    padding: 20px;
    border: 5px solid limegreen;
    border-radius:10px;
    margin: 0;
}
  
            
             .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:5px;
        padding-left: auto;
                padding-top: auto;
}
        .button2 {
    background-color: limegreen;
    color: white;
    border: 2px solid white;
    margin-left: 550px;
}

.button2:hover {
   
     background-color: gainsboro; 
    color: limegreen; 
}
            
             #bgimg 
            {
                background: url(images/bmipic.jpg);
                background-repeat: no-repeat;
                background-size:cover;
                background-attachment: fixed;
            }
        </style>
    </head>
<body id="bgimg">
<div class="w3-container">
    <div id="tb">
    <h2 style="color:gray; font-family:sans-serif; text-align: center; background-color: white; 
                border-spacing: 0">Calculate your BMI<br>Find ot which plan suits you the best</h2><hr>

  <button  onclick="document.getElementById('id01').style.display='block'" class="button button2">Calculate BMI</button>
    </div>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Calculate your BMI</h2>
      </header>
      <div class="w3-container">
        <script>
function bmi()
{
var h=parseFloat(document.getElementById('height').value);
var w=parseFloat(document.getElementById('weight').value);
var c=h/100;
var d=c*c;
var ans=w/d;

if(0<ans && ans<=18.50)
{
document.getElementById('answer').innerHTML="Your BMI is "+ans.toFixed(2)+". You are UNDERWEIGHT !!!.<br>I'd recommend you to take the &quotMASS GAIN&quot plan";
}

else if(18.51<=ans && ans<=24.90)
{
document.getElementById('answer').innerHTML="Your BMI is "+ans.toFixed(2)+". You are just fine !!!.<br>I'd recommend you to take the &quotLEAN & FIT &quot plan";
}

else if(24.91<=ans && ans<=34.90)
{
document.getElementById('answer').innerHTML="Your BMI is "+ans.toFixed(2)+". You are OVERWEIGHT !!!.<br>I'd recommend you to take the &quotFAT LOSS&quot plan";
}

else if(34.91<=ans)
{
document.getElementById('answer').innerHTML="Your BMI is "+ans.toFixed(2)+". You are really OVERWEIGHT !!!. Don't want to live long huh!<br>I'd recommend you to take the &quotFAT LOSS&quot plan right now !!";
}

}
</script>

          <body>
<h1>BMI</h1><Hr>
Enter height(cm):-<input type="number" id="height" value="30"><br>
Enter weight(kg):-<input type="number" id="weight" value="60"><br><BR>
<input type="submit" class="button button1" value="CALCULATE BMI" onclick="bmi()">
<p id="answer"></p>
 <a href="plans.php"><button class="button button1">BACK TO PLANS</button></a>
</body>
      </div>
      <footer class="w3-container w3-teal">
        <p>FIND OUT WHICH PLAN SUITS YOU THE BEST !</p>
      </footer>
    </div>
  </div>
</div>
          
</body>
</html>
