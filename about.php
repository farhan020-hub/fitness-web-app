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


<!DOCTYPE HTML>
<html>
    <head>
        <title>fhome</title>
        <link rel="stylesheet" href="main.css" >
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

           form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
            #bgimg 
            {
              
                background-repeat: no-repeat;
                background-size:cover;
                background-attachment: fixed;
            }
            
            h1
            {
                color:rgb(41, 75, 102); font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align: center;
                border-spacing: 0;
            }
            
              
            h3
            {
                color:rgb(25, 65, 88); font-family:sans-serif; text-align: center;
                border-spacing: 0;
            }
            
            body {margin:0;}

            
            li 
            {
                float: left;
            }

          li a, .dropbtn 
            {
                display: inline-block;
                color:aliceblue;
                text-align: center;
                padding: 6px 20px;
                text-decoration: none;
                padding-top: 0px;
                border-spacing: 2px;
            }
            
          li a:hover:not(active), .dropdown:hover .dropbtn 
            {
                background-color: #999;
                border-radius: 5px;
                opacity: .95;
            }

    

            li.dropdown
            {
                display: inline-block;
            }

            .dropdown-content 
            {
                display: none;
                position: absolute;
                background-color: indianred;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1; 
                border-radius: 5px;
                opacity: .8;
            }

            .dropdown-content a 
            {
                color: black;
                padding: 8px 16px; 
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover 
            {
                opacity: .5;
                background-color:indianred;
        }

            .dropdown:hover .dropdown-content   
            {
                display: block;
            }
            
            .active
            {
                background-color:rgb(25, 41, 87);
                border-radius: 5px;
            }
            
             .active2
            {
                background-color:rgb(27, 34, 71);
                 border-radius: 5px;
            }
            div.ex1
            {
                width:500px;
                margin: auto;
            }
            
           #header
            {
                padding-top: 0;
                padding-bottom: 0;
            }
            
            .images
            {
                display: inline;
                margin: 35px;
                padding: 10px;
                width: 350px;
                height: 280px;
                opacity: .95;
                transition: .5s ease;
                backface-visibility: hidden;
                 float:left;
                border-radius: 7%;
            }
            
            .t1:hover .images 
            {
                opacity: 0.5;
            }

            .content    
            {
                display: block;
                margin: 0px;
                padding: 0px;
                position: relative;
                top: 0px;  
                height: 100%;
                max-width: 100%;
                overflow-y: hidden;
                overflow-x:auto;
            }
            
            .foot
            {
                display: flex;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%-50%);
            }
			#li1
			{
			  padding-left:80px;
			  height:40px;
			  padding-top:0px;
			  margin-left:20px;
              width:80px;
			  height:80px;
			}
			#li11
			{
			    padding-left:50px;
			  height:40px;
			  padding-top:50px;
			  margin-left:235px;
			  width:80px;
			  height:80px;
			
			
			}
            
            #li1:a
            {
                width: 40px;
                height: 60px;
                background-color:lime;
                text-align: center;
                line-height: 40px;
                font-size: 20px;
                margin: 0 10px;
                align-items: center;
				color:red;
            }
			
			#feet
            {
                list-style-type: none;
                padding: 5px;
                overflow: hidden;
                background-color:rgb(49, 18, 44);
                height:40px;
				padding-top:20px;
                top: 0;
                width: 100%;
			  
            }

            #head
            {
                list-style-type: none;
                margin: 0;
                padding: 5px;
                overflow: hidden;
                background-color:black ;
                top: 0;
                width: 100%;
				height:40px;
				padding-top:20px;
               
            }
			#head:hover
            {
                list-style-type: none;
                margin: 0;
                padding: 5px;
				padding-top:20px;
                overflow: hidden;
                background-color:black;
                top: 0;
                width: 100%;
				
            }
			
            .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: black;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:10px;
        padding-left: auto;
                padding-top: auto;
}

               h3
            {
                 color:black; font-family:sans-serif; text-align: center;
                border-spacing: 10px;
            }
            
             h1
            {
                color:lime; font-family:sans-serif; text-align: center;
                border-spacing: 0;
            }
            
            
            
.button1 {
    background-color: limegreen;
    color: black;
    border: 2px solid #4CAF50;
    margin-left: 330px;
    margin-top: 10px;
}

.button1:hover {
   
     background-color: black; 
    color: rgb(83, 35, 37); 
}
            body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bg1, .bg2, .bg3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: black;

}
.bg1 {
  background-image: url("images/ab1.jpg");
  min-height: 100%;
  
}

.bg2 {
  background-image: url("images/ab2.png");
  min-height: 400px;
}

.bg3 {
  background-image: url("images/ab3.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: black;
}

.caption span.border {
  background-color: rgb(49, 18, 44);
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}





/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}




         </style>
    </head>
   
    
    
    <body id="bgimg">
        <div id="header">
            <ul class="navbar">
                <li class="dropdown"><a  href="index.php">Home</a>
                     <div class="dropdown-content">
                            <a href="index.php">Home Page</a>
                            <a href="about.php">About us</a>
                        </div>
                </li>
                
                <li class="dropdown">
                <a href="workout.php" >Workouts</a>
                     <div class="dropdown-content">
                            <a href="workout.php">Gym workouts</a>
                            <a href="workout.php">Home workouts</a>
                        </div>
                </li>
                
               <li class="dropdown">
                <a href="plans.html" class="dropbtn">Plans</a>
                        <div class="dropdown-content">
                            <a href="plans.html">Fat loss</a>
                            <a href="plans.html">Mass gain</a>
                            <a href="plans.php">Lean & Fit</a>
                        </div>
                </li>
                
               <li class="dropdown">
                <a href="nutrition.php" class="dropbtn">Nutrition</a>
                        <div class="dropdown-content">
                            <a href="nutrition.php">Caloric surplus</a>
                            <a href="nutrition.php">Caloric deficit</a>
                            <a href="nutrition.php">Caloric Balanced</a>
                        </div>
                </li>
               
              <li class="dropdown">
                <a href="challenges.php" class="dropbtn">Challenges</a>
                        <div class="dropdown-content">
                            <a href="challenges.php">Beginners mode</a>
                            <a href="challenges.php">Intermediate mode</a>
                            <a href="challenges.php">Advanced mode</a>
                             <a href="challenges.php">SuperSane mode</a>    
                        </div>
                </li>
                
                
                <li class="dropdown">
                <a href="login.php" class="dropbtn">Login</a>
                    <div class="dropdown-content">
                            <a href="login.php">I'm back</a>
                            <a href="signin.html">Forgot my password</a>
                        </div>
                </li>
                
                <li class="dropdown">
               <a href="signup.html" class="dropbtn">Signup</a>
                        <div class="dropdown-content">
                            <a href="signup.html">I'm new here</a>
                            <a href="about.php">Terms and Conditions</a>
                        </div>
                </li>
                </li>

                <li class="dropdown">
                 <a href="logout.php" class="dropbtn">Logout</a>
                        <div class="dropdown-content">


                        <?php if (isset($user)): ?>
        
                            <p><a href="logout.php" style="font-weight: bold;">Log out</a></p>
        
            <?php else: ?>
        
                          <p><a href="login.php" style="font-weight: bold;">Log in</a> or <a href="signup.html" style="font-weight: bold;">sign up</a></p>
        
            <?php endif; ?>
            
                <li style="float:right"><a class="active2" href="about.php">Help/Contact</a></li>
            </ul>
        </div>
            
<div class="bg1">
    
  <div class="caption">
    <span class="border">ABOUT THE WORKOUT ZONE </span>
  </div>
</div>

<div style="color: black;background-color:lightblue;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="color: black ;text-align:center;">Our Goal</h3><hr>
  <pre><h4 style="color: black">
     TOPIC: fitness and nutrition.
SITE NAME: https://theworkoutzone.com

DESCRIPTION: This is a fitness web application that is specifically designed for
 all people who find it very difficult to manage a fix
workout timetable and diet with their daily life routine.

(i)TARGETED AUDIENCE: For all people above the age of 15 whether female or male
a) workout benefiting all people
b) specified diet for vegetarians and mass gainers.
c) with and without supplements.

(ii)SITE AIM: to provide people with a guide that provides them with a
flexible workout and diet plan to meet their respective
fitness goals in
a) mass gaining
b) weight/fat loss
c) shredding
d) lean bulking etc…

that would be possible to be followed parallelly with their
day to day schedule.

(iii)UNIQUENESS: Unlike other fitness websites and apps that are mainly set up
for profit instead of assisting the users to attain their phyisical goal, this web app 
assist users to reach their weight goals and also to maintain a healthy diet as it provides useful
workouts and diet plans for both vegiterians, mass gainers and those who want to loss weight.

SITE DESCRIPTION: contain pages for:

a) for workout plans for different muscle groups both at home and the gym.
b) for different diet plans.
c) links directing to video tutorials on how to
d) perform particular exercises.
e) images for visual understanding by the users.
f) a separate common comment section for users.
q&amp;a to provide one to one solutions.</h4></pre>
</div>

<div class="bg2">
  <div class="caption">
    <span class="border" style="background-color:lightblue;font-size:25px;color: black;">IF IT DOESN'T CHALLENGE YOU<BR>IT DOESN'T CHANGE YOU</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:lightblue;text-align:center;padding:50px 80px;text-align: justify;">
    <h4>Q/A forum<br><hr>
        <pre>Doubts:
1)Does the website store the age, weight, height and BMI of the student and suggest a workout
plan based on that?
    -Reply-
1)-yes the user will enter all his details when he logs in for the first time and can later on make
changes to keep it upto date with his her current growth status
Comments:
It is a pretty good idea as it focuses on the users,which is unlike the regular fitness apps
that covers the diets of vegetarians/mass gaining people at the expense of their money</pre></h4>
  </div>
</div>

<div class="bg3">
  <div class="caption">
    <span class="border" style="background-color:lightblue;font-size:25px;color: black;">THAT'S ALL FOLKS!</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:black;background-color:lightblue;text-align:center;padding:50px 80px;text-align: justify;">

    <h4><pre>User Reviews:<HR>
        The fitness web app very useful and it has helped me to reduce weight and also
        acheive my weight goal.
  </pre></h4>
  </div>
</div>

<!-- /container -->
<button class="btn btn-primary scroll-top" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button>

<div class="bg3">
  <div class="caption">
    <span class="border">CONTACT ME BELOW<br> +254712345678</span>
  </div>
</div>
<hr>


 
            
        <div id="footer">
            <<ul id="feet">
                 <li id="li1"><a href="https://github.com/farhan020-hub"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                <li id="li1"><a href="https://www.instagram.com/a.azizla/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li id="li1"><a href="https://plus.google.com/111164765000672897616"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>           
                <li id="li1"><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>                            
            </ul>
        </div>

        

    </body>
</html>