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
        <title>fhome</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="main.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
         <style>
           
            #bgimg 
            {
                background: url(images/fity.jpg);
                background-repeat: no-repeat;
                background-size:cover;
                background-attachment: fixed;
            }
        

            h1
            {
                color:wheat; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align: center;
                border-spacing: 0;
            }
            
              
            h3
            {
                color:rgb(13, 224, 189); font-family:sans-serif; text-align: center;
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
                opacity: .99;
                background-color:wheat;
        }

            .dropdown:hover .dropdown-content   
            {
                display: block;
            }
            
            .active
            {
                background-color:limegreen;
                border-radius: 5px;
            }
            
             .active2
            {
                background-color:#999;
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
                height: 300px;
                opacity: 10%;
                opacity: .9;
                transition: .5s ease;
                backface-visibility: hidden;
                 float:left;
                  border-radius: 7%;
            }
            
            .t1:hover .images 
            {
                opacity: 0.5;
            }

            .ti{
                position: absolute;
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
                position: center;
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
                background-color:black;
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
			
            
         </style>
    </head>
   
    
    
    <body id="bgimg">
        
     <div id="header">
            <h1>THE WORKOUT ZONE</h1>
            <ul class="navbar">
                <li ><a class="active" href="index.php">Home</a></li>

                <li class="dropdown">
                <a href="workout.php" class="dropbtn">Workouts</a>
                        <div class="dropdown-content">
                            <a href="workout.php">Gym workouts</a>
                            <a href="workout.php">Home workouts</a>
                        </div>
                </li>
                
               <li class="dropdown">
                <a href="plans.php" class="dropbtn">Plans</a>
                        <div class="dropdown-content">
                            <a href="plans.php">Fat loss</a>
                            <a href="plans.php">Mass gain</a>
                            <a href="plans.php">Lean & Fit</a>
                        </div>
                </li>

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
                            <a href="signup.html">Forgot my password</a>
                        </div>
                </li>
                
                 <li class="dropdown">
                 <a href="signup.html" class="dropbtn">Signup</a>
                        <div class="dropdown-content">
                            <a href="signup.html">I'm new here</a>
                            <a href="about.php">Terms and Conditions</a>
                        </div>
                </li>
                  

                <li class="dropdown">
                 <a href="logout.php" class="dropbtn">Logout</a>
                        <div class="dropdown-content">


                        <?php if (isset($user)): ?>
        
                            <p><a href="logout.php" style="font-weight: bold;">Log out</a></p>
        
            <?php else: ?>
        
                          <p><a href="login.php" style="font-weight: bold;">Log in</a> or <a href="signup.html" style="font-weight: bold;">sign up</a></p>
        
            <?php endif; ?>
                           
                        </div>
                </li>
                
                </li>
                <li style="float:right"><a class="active2" href="about.php">Help/Contact</a></li>
            </ul>
        </div>
        
        <div class="content">   
           <div class="t1">
            <a href="http://localhost/fitness_web_app/workout.php">
                <img src="images/hwk.jpg" alt="workouts" class="images" />
            </a>
            </div>

            <div class="t1">
            <a href="http://localhost/fitness_web_app/plans.php">
            <img src="images/flplan.jpg" alt="plans" class="images" />
                </a>
            </div>

            <div class="t1">
            <a href="http://localhost/fitness_web_app/nutrition.php">
            <img src="images/hnut.jpg" alt="nutrition" class="images" />
            
            </a>
            </div><br>

             <div class="t1">
            <a href="http://localhost/fitness_web_app/challenges.php">
                <img src="images/hch.jpg" alt="challenges" class="images" />
            </a>
            </div>

            <div class="t1">
            <a href="http://localhost/fitness_web_app/login.php">
            <img src="images/HLS.jpg" alt="login" class="images" />
            </a>
            </div>

            <div class="t1">
            <a href="http://localhost/fitness_web_app/about.php">
            <img src="images/hab.jpg" alt="aboutus" class="images" />
            
            </a>
            </div>
        </div>
        <hr>
            
        <div id="footer">
            <ul id="feet">
                 <li id="li1"><a href="https://github.com/farhan020-hub"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                <li id="li1"><a href="https://www.instagram.com/a.azizla/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li id="li1"><a href="https://plus.google.com/111164765000672897616"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>           
                <li id="li1"><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>                            
            </ul>
        </div>
      
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    