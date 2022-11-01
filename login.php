<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;

    
} 
?>


<!DOCTYPE html>
<html>
    <head>
        <title>fhome</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="main.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
           form {border: 3px solid #3f3e3e;}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: red;
    color: white;
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
    margin: 10px 0 8px 0;
}

img.avatar {
           width: 20%;
           height: 25%;
           border-radius: 50%;
       }

.container {
    padding: 16px;
    font-size: medium;
    
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
                background: url(images/moh.jpg);
                background-repeat: no-repeat;
                background-size:cover;
                background-attachment: fixed;
            }
            
            h1
            {
                color:rgb(red, green, blue); font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align: center;
                border-spacing: 0;
            }
            
              
            h3
            {
                color:rgb(red, green, blue); font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align: center;
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
                background-color: red;
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
                position:absolute;
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
                background-color:wheat;
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
                  background-color: green; /* Green */
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
    background-color: wheat;
    color: white;
    border: 2px solid #4CAF50;
    margin-left: 330px;
    margin-top: 10px;
}

.button1:hover {
   
     background-color: white; 
    color: limegreen; 
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
                <a href="javascript:void(0)" class="active">Login</a>
                </li>
                
                 <li class="dropdown">
                <a href="signup.html" class="dropbtn">Signup</a>
                        <div class="dropdown-content">
                            <a href="signup.html">I'm new here</a>
                            <a href="about.php">Terms and Conditions</a>
                        </div>
                </li>
                </li>
                
                <li style="float:right"><a class="active2" href="about.php">Help/Contact</a></li>
            </ul>
        </div>


    <br><hr>    
    <h1  style="color: red">Login</h1>
    
    
    
    <form method="post">

    <div class="imgcontainer">
    <img src="images/Contacts-icon.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><h3 style="color: red">Email</h3></label>
    <input type="text" placeholder="Enter Email" name="email" style="margin-left: 320px;" id="email"
     value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"><br>

    <label for="password"><h3  style="color: red">Password</h3></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" style="margin-left: 320px;" >
        
    <button type="submit" style="margin-left: 320px;">Login</button><br>
    <label style=" margin-left: 640px " >
        <input type="checkbox" checked="checked" name="remember"><p style=" margin-left: 580px; color: black" > Remember me</p>
    </label>
  </div>

  <div class="container">
      <a href="signup.html"><button type="button" class="cancelbtn">Cancel</button></a>
    <span class="psw"><a href="signup.html" style="background-color: green;">Forgot password</a></span>
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








