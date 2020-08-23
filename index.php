<?php

session_start();

include_once 'Controllers/ArticlesController.php';
include_once 'Controllers/SubscribeController.php';

$artContr = new Articles();
$sub = new Subscribe();


if(isset($_GET['subscribeButton'])) {
    
    $sub->insert($_GET);
   
}



?>

<!doctype HTML>
<html>
    <head>
        <title>The Eris</title>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        
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

            <main>
                <div class = "carousel-container">
                    <div class="carousel-slide">
                        

                    

        <div class="slide">

            <img src="images\health-minister.jpg" id="lastClone" alt=""style="width: 800px;">
            <div class="textBox">
                <div class="text">
                    <h5>COVID-19</h5>
                    <h2>Coronavirus: Extraordinary Meeting of EU Health Ministers on Thursday</h2>
                    <p>Health Ministers of the European Union Member States are set to meet this Thursday, February 12.</p>
                    <button>Read More...</button>
                </div>
            </div>
        </div>   


            <div class="slide">
            <img src="images/ubtnight.jpg" alt="" style="width: 800px;">
            <div class="textBox">
                <div class="text">
                    <h5>Tech</h5>
                    <h2>"UBT" to Create 20,000 Lessons with EON Reality’s AVR Platform</h2>
                    <p>The new initiative is built to transform and augment UBT’s existing curriculum in architecture, design engineering and medical sciences for remote learning.</p>
                    <button>Read More...</button>
                </div>
            </div>
            </div>


            <div class="slide">
            <img src="images/biden.jpg" alt="" style="width: 800px;">
            <div class="textBox">
                <div class="text">
                    <h5>Election</h5>
                    <h2>Biden team sees lessons in Clinton's loss as Trump renews 2016 playbook</h2>
                    <p>Hillary Clinton's 2016 bid for the presidency ended in a demoralizing defeat for Democrats four years ago.</p>
                    <button>Read More...</button>
                </div>
            </div>
            </div>

            

            <div class="slide">
            <img src="images\europeeconomy.jpg" alt="" style="width: 800px;">
            <div class="textBox">
                <div class="text">
                    <h5>Ecoonomy</h5>
                    <h2>Coronavirus in Europe: How will the EU €500bn rescue deal help people and businesses?</h2>
                    <p>The emergency rescue package promises to make available more than half a trillion euros to cushion the impact of the coronavirus pandemic across Europe.</p>
                    <button>Read More...</button>
                </div>
            </div>
            </div>

            <div class="slide">
            <img src="images\health-minister.jpg" alt=""style="width: 800px;">
            <div class="textBox">
                <div class="text">
                    <h5>COVID-19</h5>
                    <h2>Coronavirus: Extraordinary Meeting of EU Health Ministers on Thursday</h2>
                    <p>Health Ministers of the European Union Member States are set to meet this Thursday, February 12.</p>
                    <button>Read More...</button>
                </div>
            </div>
            </div>   


            <div class="slide">
            <img src="images/ubtnight.jpg" id="firstClone" alt="" style="width: 800px;">
            <div class="textBox">
            <div class="text">
                <h5>Tech</h5>
                <h2>"UBT" to Create 20,000 Lessons with EON Reality’s AVR Platform</h2>
                <p>The new initiative is built to transform and augment UBT’s existing curriculum in architecture, design engineering and medical sciences for remote learning.</p>
                <button>Read More...</button>
            </div>
            </div>



</div>

</div>
</div>
                        

                <button id="prevBtn">&#8249;</button>
                <button id="nextBtn">&#8250;</button>



           

            </main>

            <div class="titulli_lajmeve"><h2>Actual News</h2></div>
              <div class="artikujt">
                <?php
                    $counter = 0;
                    $articles = $artContr->getArticlesByCategory('Actual News');
                    foreach($articles as $article) {
                        if($counter % 2 === 0 || $counter === 0) {
                            
                            echo '<div class="lajmi">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="'.$article['Link'].'">'.$article['Title'].'</a></h3>
                            </div>';

                            $counter++;

                        }
                        else {
                            
                            echo
                            '<div class="lajmi_hint">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="'.$article['Link'].'">'.$article['Title'].'</a></h3>
                            </div>';
                            $counter++;
                        }
                    }

                ?>
                
              
            </div>

            
            
            <div class="titulli_lajmeve">
                <h2>Sport</h2> </div>

                <div class="artikujt">
                <?php
                    $counter = 0;
                    $articles = $artContr->getArticlesByCategory('Sport');
                    
                    foreach($articles as $article) {
                        
                        if($counter % 2 === 0 || $counter === 0) {
                            
                            echo '<div class="lajmi">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="#">'.$article['Title'].'</a></h3>
                            </div>';

                            $counter++;

                        }
                        else {
                            
                            echo
                            '<div class="lajmi_hint">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="#">'.$article['Title'].'</a></h3>
                            </div>';
                            $counter++;
                        }
                    }

                ?>
            </div>
                




                <div class="titulli_lajmeve">
                    <h2>Politics</h2>   </div>


                <div class="artikujt">
                <?php
                    $counter = 0;
                    $articles = $artContr->getArticlesByCategory('Politics');
                    
                    foreach($articles as $article) {
                        
                        if($counter % 2 === 0 || $counter === 0) {
                            
                            echo '<div class="lajmi">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="#">'.$article['Title'].'</a></h3>
                            </div>';

                            $counter++;

                        }
                        else {
                            
                            echo
                            '<div class="lajmi_hint">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="#">'.$article['Title'].'</a></h3>
                            </div>';
                            $counter++;
                        }
                    }

                ?>

                 </div>

                
                    <div class="titulli_lajmeve">
                        <h2>Health</h2>   </div>
            
            
                    <div class="artikujt">
                    <?php
                    $counter = 0;
                    $articles = $artContr->getArticlesByCategory('Health');
                    
                    foreach($articles as $article) {
                        
                        if($counter % 2 === 0 || $counter === 0) {
                            
                            echo '<div class="lajmi">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="#">'.$article['Title'].'</a></h3>
                            </div>';

                            $counter++;

                        }
                        else {
                            
                            echo
                            '<div class="lajmi_hint">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="#">'.$article['Title'].'</a></h3>
                            </div>';
                            $counter++;
                        }
                    }

                ?>
            
                    </div>



             
                 <div class="titulli_lajmeve">
                    <h2>Economy</h2>   </div>
        
        
                <div class="artikujt">
                <?php
                    $counter = 0;
                    $articles = $artContr->getArticlesByCategory('Economy');
                    
                    foreach($articles as $article) {
                        
                        if($counter % 2 === 0 || $counter === 0) {
                            
                            echo '<div class="lajmi">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="#">'.$article['Title'].'</a></h3>
                            </div>';

                            $counter++;

                        }
                        else {
                            
                            echo
                            '<div class="lajmi_hint">
                                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"></div>
                            
                                <h5>'.$article['SecondaryCategory'].'</h5>
                                <h3><a href="#">'.$article['Title'].'</a></h3>
                            </div>';
                            $counter++;
                        }
                    }

                ?>
        
                </div>
               
           

            



            <footer>
                <div class="upperFooter">
                    <div class="kolonat">

                        <div id="footerLogo">
                            <img src="images/logo.png" alt="website logo">
                        </div>
                        <div id="aboutUs">
                            <h3>About Us</h3>
                            <p>We want to help bring talented students</p>
                        </div>
                        <div>
                            <h3>Contact Us</h3>
                            <div class="kontakt">
                                <img src="images/phone-46-16.ico" alt="phone icon">
                                <p>&nbsp;&nbsp;+38345476852</p>
                            </div>
                            <div class="kontakt">
                                <img src="images/email-11-16.ico" alt="email icon">
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