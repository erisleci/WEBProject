<?php
    session_start();
    include_once 'Controllers/SubscriptionController.php';
    include_once 'Controllers/SubscribeController.php';

    $subscriptionController = new Subscription();
    $subs = $subscriptionController->getSubscriptions();

    $sub = new Subscribe();


if(isset($_GET['subscribeButton'])) {
    
    $sub->insert($_GET);
   
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Subscription.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <header>
                
        <div class="headerLeft">
           <a href="lajmi.html"><img src="images/logo.png" height="130" width="120" ></a>
            <ul class="HeaderList">
                <li><a href="index.php">News</a></li>
                <li><a href="About_us.php">About Us</a></li>
                <li><a class="Faqja2" href="Subscription.php">Subscription</a></li>
                
               
            </ul>

        </div>

        <div class="headerRight"> 
            <ul class="HeaderList">
            <?php
                        if(!isset($_SESSION['Emri'])) {
                        
                            echo '<li id="showLoginForm">Log in</li>';
                            
                           }
                           else {
                               
                               echo '<li>Welcome '.$_SESSION['Emri'].'</li>';
                               echo '<li><a id="logout" href="logout.php">Logout</a></li>';
                               if($_SESSION['isAdmin'] == '1') {
                                echo '<li><a href="dashboard.php">Admin Panel</a></li>';
                               }
                           }
                        ?>                   
            </ul>
        </div>

    </header>


<main>

    <div class="titulli">
        <div><img src="images/output-onlinepngtools.png" alt="" srcset=""></div>
        <div><h1>Subscribe to The Eris</h1></div>
        <div><img id="foto2" src="images/index111.png" alt="" srcset=""></div>
    </div>
    <div id="abonimi">
        
    
    <?php
        foreach($subs as $sub) {

       echo  '<div id="subscriptions">
            <div id="foto"> <img src="images/'.$sub['photo'].'" alt=""></div>
            <div id="contenti">
                <h1 id="subscription_title">'.$sub['Name'].'</h2>
                <h2 id="subscription_sale"><b>60% off for 3 months</b></h3>
                <h2 id="subscription_cost">€'.$sub['Price'].'/Monthly</h3>
                <p id="subscription_description">'.$sub['Description'].'</p>
                 <a id="button" href="#">
                     Find out more
                     <span id="arrow">></span>
                    </a>
                    <br>

            </div>
        </div>';
        }
    ?>
        

        
    
    
    
    </div>
</main>


    <div class="loginDisplay" id="loginDisplay">
        <div class="loginArea">
            <button class="closeButton">X</button>
             <div class="loginContent">
                <h2 style="text-align: center;">Login</h2>
                <div class="errorsDivLogin">
                    
                    
                </div>
                <form class="loginForm" method="POST" action="login.php" onsubmit="return testo()">
                    <label for="email">Email:</label>
                    <input type="text" id="email" placeholder="Your Email" name="email">
                    <label for="password">Password:</label>
                    <input type="password" id="password" placeholder="Your Password" name="password">
                    <div class="submitArea">
                        <a href="#">Forgot your password?</a>
                        <button  id="loginButton">Login</button>
                    </div>
                </form>
                <p>Don't have an account? <span id="showRegistration">Create one</span>.</p>

            </div>
        </div>

        <div class="registerArea">
            <button class="closeButton">X</button>
            <div class="registerContent">
                <h2 style="text-align: center;">Register</h2>
                <div class="errorsDivRegister">
                  
                    
                </div>
                <form class="registerForm" method="POST" action='register.php' onsubmit="return testoRegjistrimin()">
                    
                    <label for="firstName" >First Name:</label>
                    <input type="text" name="firstName" id="firstName" placeholder="First Name">
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" placeholder="Last Name" id="lastName">
                    <label for="emailRegister">Email Address:</label>
                    <input type="text" name="emailAddress" id="registerEmail" placeholder="Email Address">
                    <label for="lastName">Password:</label>
                    <input type="password" name="password" id="registerPassword" placeholder="Password">
                    <label for="lastName">Confirm Password:</label>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password" id="confirmPassword">
                    <button  name="submitRegister" id="registerButton">Register</button>
                </form>
                <p>Already have an account? <span id="showLogin">Click here to login</span></p>
            </div>
    </div> 
    <script src="scripts/script.js"></script>
</body>
</html>