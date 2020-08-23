<?php
session_start();


include_once 'Controllers/ArticlesController.php';
include_once 'Controllers/SubscribeController.php';

$articleCon = new Articles();

$article = $articleCon->getArticles()[0];

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lajmi.css">
    <title>Document</title>
</head>

<body>

    <header>
                
        <div class="headerLeft">
            <img src="images/logo.png" height="130" width="120" >
            <ul class="HeaderList">
                <li><a class="Faqja2" href="index.php">News</a></li>
                <li><a class="Faqja2" href="About_us.php">About Us</a></li>
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

    <div class="lajmet">
        <div class="others">
            <ul class="sidenews">
                <li class='titulli_listes'></li>
                <li><a href="#">Google travel data show lockdown fatigue in U.S., Australia; other countries stay home</a></li>
                <li ><a href="#">Uber must face lawsuit claiming it stifled competition, drove out rival Sidecar</a></li>
                <li><a href="#">Wall Street tumbles as renewed tariff threat adds to uncertainties</a></li>
                <li ><a href="#">Milot Rashica: Aston Villa, Brighton, West Ham & Wolves chase forward as Liverpool interest cools</a></li>
                <li><a href="#">LeBron James, Anthony Davis and other star players had conference call to agree they don’t want to cancel season</a></li>
                
            </ul>

            <ul class="sidenews"> 
                <li class='titulli_listes'>Similar</li>
                <li><a href="#">Coronavirus may never go away, World Health Organization warns</a></li>
                <li ><a href="#">'Flexible DNA' may be key to overcoming fearful memories</a></li>
                <li><a href="#">Heart attacks, heart failure, stroke: COVID-19's dangerous cardiovascular complications</a></li>
                <li ><a href="#">Coronavirus 'could cost global economy $8.8tn' says ADB</a></li>
                <li><a href="#">Coronavirus pushes German economy into recession</a></li>
                <li ><a href="#">Trump dumps Russia, woos China instead</a></li>
            </ul>




        </div>

        <div class="kryesor">

            <p class="titulli"><?php echo $article['Title'];?></p>
            <p class="nentitulli"><?php echo $article['Subtitle'];?></p>
            <div class="lajmi_foto">
                <img src="images/<?php echo $article['Photo'];?>">
            </div>

            <div class="lajmi_teksti">
                
                <p>
                <?php echo $article['Description'];?>
                </p>
            </div>
        </div>

    

            

        




    </div>

    <footer>
        <div class="upperFooter">
            <div class="kolonat">

                <div id="footerLogo">
                    <img src="images/logo.png">
                </div>
                <div id="aboutUs">
                    <h3>About Us</h3>
                    <p>We want to help bring talented students</p>
                </div>
                <div>
                    <h3>Contact Us</h3>
                    <div class="kontakt">
                        <img src="images/phone-46-16.ico">
                        <p>&nbsp;&nbsp;+38345476852</p>
                    </div>
                    <div class="kontakt">
                        <img src="images/email-11-16.ico">
                        <p>&nbsp;&nbsp;info@theeris.com</p>
                    </div>
                </div>


            </div>
            <div class="kolonat">
                <h3>Information</h3>
                <ul>
                    <li>About Us</li>
                    <li>More Search</li>
                    <li>Blog</li>
                    <li>Testimonials</li>
                    <li>Events</li>
                </ul>
            </div>
            <div class="kolonat">
                <h3>Helpful Links</h3>
                <ul>
                    <li>Services</li>
                    <li>Supports</li>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                    <li>&nbsp;</li>
                    
                </ul>
            </div>
            <div class="kolonat">
           
                 <form class="subscribeForm">
                    <label for="subscribeBox">Subscribe for more</label>
                    <br>
                    <input type="search" placeholder="Enter your email" id="subscribeBox">
                    <br>
                    <button type="button" id="subscribeButton">Subscribe</button>
                </form>   
                <div  class="backtop">
                <a href='#'><img  src="images/top.png" height="30" width="30"></a>
                 </div>
        </div>
          

        </div>
        <div class="lowerFooter">
            <img src="images/facebook-4-48.ico" alt="facebook icon">
            <img src="images/instagram-4-48.ico" alt="instagram icon">
            <img src="images/twitter-4-48.ico" alt="twitter icon">
            <img src="images/google-plus-4-48.ico" alt="google plus icon">
        </div>
    </footer>

    <div class="loginDisplay" id="loginDisplay">
                <div class="loginArea">
                    <button class="closeButton">X</button>
                     <div class="loginContent">
                        <h2 style="text-align: center;">Login</h2>
                        <div class="errorsDivLogin">
                            
                            
                        </div>
                        <form class="subscribeForm" method='get'>
                            <label for="subscribeBox">Subscribe for more</label>
                            <p style="color: red"><?php echo $sub->error;?></p>
                            
                            <input type="search"  placeholder="Enter your email" id="subscribeBox" name='email'>
                            <br>
                            
                            <button name='subscribeButton' id="subscribeButton">Subscribe</button>
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
                        <form class="registerForm" method="POST" action="register.php" onsubmit="return testoRegjistrimin()">
                            
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