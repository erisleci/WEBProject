<?php
    session_start();
    include_once 'Controllers/AboutUsController.php';
    include_once 'Controllers/SubscribeController.php';

    $aboutUs = new AboutUs();
    $content = $aboutUs->getAboutUs();
    $sub = new Subscribe();
    if(isset($_GET['subscribeButton'])) {
          
        $sub->insert($_GET);
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/About_us.css">
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
<div class="para">
    <div class="About_us_titulli"><h1><?php echo $content[0]['Title'];?></h1></div>
    <div class="pjesa1">
        <div class="Teksti">
            <?php
        echo $content[0]['Description'];?>
        </div>
    </div>
    
    <div class="About_us_titulli2"><h1><?php echo $content[1]['Title'];?></h1></div>
    <div class="pjesa1">
        <div class="Teksti">
        <?php
        echo $content[1]['Description'];?>
        </div>
    </div>

    <div class="About_us_titulli3"><h1><?php echo $content[2]['Title'];?></h1></div>
    <div class="pjesa1">
        <div class="Teksti">
        <?php
        echo $content[2]['Description'];?>
        
        </div>
    </div>

    <div class="About_us_titulli2"><h1><?php echo $content[3]['Title'];?></h1></div>
    <div class="pjesa1">
        <div class="Teksti">
        <?php
        echo $content[3]['Description'];?>
        </div>
    </div>
</div>


<div class="Joini"><h1>Join the Eris</h1></div>
    <div class="dyta">
   
       <!--
        <div class="textBox">
            <div class="text">
                <h1>Work for us</h1>
                <button>Read More...</button>
            </div>
        </div>
       --> 

       
       
       <div class="kontenti">
         <h3><?php echo $content[4]['Title']; ?></h3>
         <img src="images/<?php echo $content[4]['img']; ?>" alt="">
         <div class="Tekstinjo">
            <?php echo $content[4]['Description']; ?>
         </div>
       </div>

       <div class="kontenti">
         <h3><?php echo $content[5]['Title']; ?></h3>
         <img src="images/<?php echo $content[5]['img']; ?>" alt="">
         <div class="Tekstinjo">
         <?php echo $content[5]['Description']; ?>
         </div>
        </div>

    <div class="kontenti">
         <h3><?php echo $content[6]['Title']; ?></h3>
         <img src="images/<?php echo $content[6]['img']; ?>" alt="">
         <div class="Tekstinjo">
         <?php echo $content[6]['Description']; ?>
         </div>
    </div>

    </div>

    

</div>


<div class="Services"><h2>Services</h2></div>

<div class="treta">
<div class="artikujt">
  <div class="lajmi">
      <div class="foto" style="background: url(images/kontakt-682~384x216.jpg) no-repeat; background-size: cover;"> </div>
      <h6 id="sherbimi">Customer Service</h6>
      <h3>Contact with The Eris</h3>
      <h5><a href="#">Here is how you can contact The Eris</a></h5>
  </div>

  <div class="lajmi">
      <div class="foto" style="background: url(images/-fragen-und-antworten-100~384x216.jpg) no-repeat; background-size: cover;">  </div>
     
      <h6 id="sherbimi">The Enterprise</h6>
      <h3><a href="#">Questions & Answers</a></h3>
      <h5>Frequently asked Questions</h5>
    </div>
  <div class="lajmi">
      <div class="foto" style="background: url(images/unternehmen-a-z-100~384x216.jpg) no-repeat; background-size: 100% 100%;">
          
      </div>
      <h6 id="sherbimi">The Enterprise</h6>
      <h3><a href="#">Enterprise A - Z</a></h3>
      <h5>Everything about our Enteprise from A to Z</h5>
  </div>
  <div class="lajmi">
      <div class="foto" style="background: url(images/konzern-100~384x216.jpg) no-repeat; background-size: cover;">
          
      </div>
      <h6 id="sherbimi">The Enteprise</h6>
      <h3><a href="#">Our Journalists</a></h3>
      <h5>Everything about our Journalists</h5>
  </div>

  <div class="lajmi">
    <div class="foto" style="background: url(images/konzern-102~384x216.jpg) no-repeat; background-size: cover;"> </div>
    <h6 id="sherbimi">Policies</h6>
    <h3>Policies and standards</h3>
    <h5><a href="#">Read about our policies and standards in our publications</a></h5>
</div>
</div>
    </div>

    <footer>
        <div class="upperFooter">
            <div class="kolonat">

                <div id="footerLogo">
                    <img src="images/logo.png" alt="logo">
                </div>
                <div id="aboutUs">
                    <h3>About Us</h3>
                    <p>We want to help bring talented students</p>
                </div>
                <div>
                    <h3>Contact Us</h3>
                    <div class="kontakt">
                        <img src="images/phone-46-16.ico" alt="phone logo">
                        <p>&nbsp;&nbsp;+38345476852</p>
                    </div>
                    <div class="kontakt">
                        <img src="images/email-11-16.ico" alt="email logo">
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
           
            <form class="subscribeForm" method='get'>
                            <label for="subscribeBox">Subscribe for more</label>
                            <p style="color: red"><?php echo $sub->error;?></p>
                            
                            <input type="search"  placeholder="Enter your email" id="subscribeBox" name='email'>
                            <br>
                            
                            <button name='subscribeButton' id="subscribeButton">Subscribe</button>
                        </form>   
                <div  class="backtop">
                <a href='#'><img  src="images/top.png" alt="topLogo" height="30" width="30"></a>
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
                        <form class="loginForm" method="POST" action="login.php" onsubmit="return testo()">
                            <label for="email" >Email:</label>
                            <input type="text" id="email" placeholder="Your Email" name="email">
                            <label for="password">Password:</label>
                            <input type="password" id="password" placeholder="Your Password" name="password">
                            <div class="submitArea">
                                <a href="#">Forgot your password?</a>
                                <button name="loginButton"  id="loginButton">Login</button>
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


</html>