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
        <title>sfhome</title>
           <link href="https://fonts.googleapis.com/css?family=Asul" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
           
            #bgimg 
            {
                background: url(images/f12.jpg);
                background-repeat: no-repeat;
                background-size:cover;
                background-attachment: fixed;
            }
            
            h1
            {
                color:wheat; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align: center;
                border-spacing: 0;
            }
            
              
            h2
            {
                color:wheat; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align: left;
                border-spacing: 10px;font-size: 20px;
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
                width: 400px;
                height: 400px;
                opacity: .98;
                transition: .5s ease;
                backface-visibility: hidden;
                 float:left;
                border-radius: 7%;
            }
            
            #t1
            {
                align-items: center;
            }
            .t1:hover .images 
            {
                opacity: 0.5;
            }

            .content    
            {
                display: block;
                margin: 0px;
                padding-left: 450px;
                position:relative;
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
                background-color:rgb(red, green, blue);
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
               background-color: black;
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
    background-color: indianred; /* Green */
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
    border-radius:10px;
        padding-left: auto;
                padding-top: auto;
}

.button1 {
    background-color: indianred;
    color: white;
    border: 1px rgb(red, green, blue);
    margin-left: 150px;
    margin-top: 10px;
}

.button1:hover {
   
     background-color: white; 
    color: wheat; 
}

.button2 {
    background-color: wheat;
    color: white;
    border: 2px solid white;
    margin-left: 545px;
    margin-top: 10px;
}

.button2:hover {
   
     background-color: wheat; 
    color: limegreen; 
           }

            #tb {
                width: 95%;
                padding: 20px;
                border: 10px solid yellow;
                border-radius:5px;
                margin: 0;
               }
            
            #le
            {
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                color: wheat;
            }
            
             #le4
            {
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                color: wheat;
                font-size: 30px;
            }
         </style>
    </head>
   
    
    
    <body id="bgimg">
        <h1>THE WORKOUT ZONE</h1>
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
                <a href="plans.php" class="dropbtn">Plans</a>
                        <div class="dropdown-content">
                            <a href="plans.php">Fat loss</a>
                            <a href="plans.php">Mass gain</a>
                            <a href="plans.php">Lean & Fit</a>
                        </div>
                </li>

            
                
                <li class="dropdown">
                <a href="javascript:void(0)" class="active">Nutrition</a>
                        
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
                
                <li style="float:right"><a class="active2" href="about.php">Help/Contact</a></li>
            </ul>
        </div>
    
    <a href="#cs"><button class="button button1">CALORIC SURPLUS</button></a>
    <a href="#cd"><button class="button button1">CALORIC DEFICIT</button></a>
    <a href="#cb"><button class="button button1">CALORIC BALANCE</button><br></a><br><HR>

    <pre><h2 text-align="center"><a name="cs"></a>   CALORIC SURPLUS</h2><hr></pre>
        <div class="content">   
           <div class="t1">
               <a href="https://www.youtube.com/watch?v=Bz3AG-oCXTE"><img src="images/cs.jpg" alt="workouts" class="images" /></a>
            </div>            
        </div>
        <div id="tb">
            
                <h4 id="le4">What is Caloric Surplus ?</h4><hr>
            
            <p id="le">
       A calorie surplus is a state in which you consume more calories than you burn leading to weight gain in the form of muscle or body fat. While a calorie surplus is required to gain weight, simply eating more only leads to unsightly body fat. To gain muscle, you must combine a calorie surplus with a solid strength training routine.  
           </p>
                   
            <h4 id="le4">How to achieve it ?</h4><hr>
            <p id="le">
                Gaining weight is not a blank check to eat whatever you want. Gaining weight the healthy way requires smart food choices.<br><br>

Eat foods high in complex carbs, lean proteins and unsaturated fats: 100% whole wheat bread/pasta, brown rice, vegetables, fruits, beans, nuts, chicken, turkey, some cuts of beef, seafood, low fat/fat free dairy products and vegetable oils (particularly extra virgin olive oil).<br><br>

Stay away from foods high in simple carbs, sugars and saturated/trans fats: fruit juice, soda, doughnuts, muffins, candy, potato chips and white bread (refined flour).<br><br>
                Lean Gains<br>

A common misconception is that eating “clean” or healthy foods leads to fat-free weight gain. The only factor controlling how much fat you gain during a bulking cycle is how many calories you consume relative to how many you burn. Eating too much, even healthy foods, causes body fat rather than muscle gains.<br>

When attempting to gain weight, increase calories slowly and closely monitor weight and body fat percentage. If your body fat percentage is increasing too much, decrease calorie consumption
    
            </p> 
            
        </div>
    <hr>
    
  <pre><h2 text-align="center"><a name="cd" style="text-decoration:solid;"></a>   CALORIC DEFICIT</h2><hr></pre>
<div class="content">   
           <div class="t1">
               <a href="https://www.youtube.com/watch?v=VUt8ckGybWE"><img src="images/cd.jpg" alt="workouts" class="images" /></a>
            </div>            
        </div>
       <div id="tb">
            
                <h4 id="le4">What is Caloric Deficit ?</h4><hr>
            
            <p id="le">
                A caloric deficit is any shortage in the amount of calories consumed relative to the amount of calories required for maintenance of current body weight (energy homeostasis). A deficit can be created by reducing input/calories consumed (lower food intake, aka dieting).       
            </p>
                   
            <h4 id="le4">How to achieve it ?</h4>
            <p id="le">
                The Calorie Deficit Sweet Spot<br>
The easiest way to ensure you eat fewer calories than you burn is, of course, to eat very little. If you have an apple for breakfast, a small salad for lunch, a piece of toast for dinner and nothing else, you can be pretty sure you're maintaining a calorie deficit. But you'll also be miserable with hunger and a lack of energy.<br><br>

The optimal calorie deficit is large enough to stimulate steady fat loss, but not so large that you're always hungry and lethargic. Avoiding a calorie deficit that is too large is even more important for athletes, who need to keep their muscles well-fueled for training. The calorie deficit "sweet spot" for athletes is 300 to 500 calories per day.<br><br>

Do the Math
Your ultimate goal is to figure out exactly how many calories to eat daily to lose weight without being hungry and lethargic and without sabotaging your training. To do that you need to figure out how many calories you burn each day and then subtract your target deficit of 300 to 500 calories from that number.<br><br>

There are two components to your total calories burned daily: calories burned at rest and calories burned in workouts.<br>

To begin, add up the total number of hours you train in a typical week and divide that number by seven to yield the average number of hours you train daily. For example, suppose you train seven hours per week on average. This works out to one hour per day. Next, multiply this number by your body weight in pounds and the average number of calories you burn per pound of body weight per hour of training. The average number of calories you burn per hour of training is influenced by your speed. Use this table to get the appropriate multiplier.
            </p> 
            
        </div>
    <hr>
     <pre><h2 text-align="center"><a name="cb"></a> CALORIC BALANCE</h2><hr></pre>
<div class="content">   
           <div class="t1">
               <a href="https://www.youtube.com/watch?v=tWHjUTfo2nY&list=PLp1bG7NW7gxSpUCsMQ_zTI1XhjQt4T_KA"><img src="images/cb.jpg" alt="workouts" class="images" /></a>
            </div>            
        </div>
           <div id="tb">
            
                <h4 id="le4">What is Caloric Balance ?</h4><hr>
               
            <p id="le">
                 Caloric balance is like a scale. To remain in balance and maintain your body weight, the. calories consumed (from foods) must be balanced by the calories used (in normal body functions, daily activities, and exercise).
       
            </p>
                   
            <h4 id="le4">How to achieve it ?</h4>
            <p id="le">
                The Caloric Balance Equation<br><br>
When it comes to maintaining a healthy weight for a lifetime, the bottom line is /calories count!
Weight management is all about balance—balancing the number of calories you consume with the
number of calories your body uses or "burns off."<br><br>
 A calorie is defined as a unit of energy supplied by food. A calorie is a calorie regardless of its
source. Whether you're eating carbohydrates, fats, sugars, or proteins, all of them contain
calories.<br><br>
 Caloric balance is like a scale. To remain in balance and maintain your body weight, the
calories consumed (from foods) must be balanced by the calories used (in normal body
functions, daily activities, and exercise).
            </p> 
            
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