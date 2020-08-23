<?php
    session_start();
    include_once 'Controllers/ArticlesController.php';
    include_once 'Controllers/SubscribeController.php';

    $articleController = new Articles();
    $articles = $articleController->getArticles();
    $sub = new Subscribe();

    if(isset($_SESSION['isAdmin'])) {
        if($_SESSION['isAdmin'] == '0' || !isset($_SESSION['Emri'])) {
        header("Location: index.php");
        }
    }
    else {
        header("Location: index.php");
    }
    if(isset($_GET['subscribeButton'])) {
    
        $sub->insert($_GET);
       
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Document</title>
</head>


<body>
<header>
                
                <div class="headerLeft">
                    <img src="images/logo.png" height="130" width="120" >
                    <ul class="HeaderList">
                        <li><a href="index.php">News</a></li>
                        <li><a href="About_us.php">About us</a></li>
                        <li><a href="Subscription.php"> Subscription</a></li>
                    </ul>
            
                </div>
            
                <div class="headerRight"> 
                    <ul class="HeaderList">
                    <?php
                    echo '<li>Welcome '.$_SESSION['Emri'].'</li>';
                                           echo '<li><a id="logout" href="logout.php">Logout</a></li>';
                                           if($_SESSION['isAdmin'] == '1') {
                                            echo '<li><a href="dashboard.php">Admin Panel</a></li>';
                                           } 
                                           ?>                   
                    </ul>
                </div>
            
            </header>
            
    
    <main>
    <div class="Header_create">
        <h3 id="panel_header">News panel:</h3>
        <a href="create.php" id="create">Create</a>
        
    </div>
    <div class="artikujt">
        <?php
            foreach($articles as $article) {
                $admin = $articleController->findAdmin($article['admin']);
                echo
                '<div class="lajmi">
                <div class="foto" style="background: url(images/'.$article['Photo'].') no-repeat; background-size: cover;"> </div>
                <h3>'.$article['Title'].'</h3>
            
                  <div class="editat">
                      <p><i>Last Updatet by: '.$admin['Emri'].'</i></p>
                      <a href="edit.php?id='.$article['ID'].'" id="edit">edit</a>
                      <a href="remove.php?id='.$article['ID'].'" id="remove">remove</a>
                    </div>
            </div>';
            }
        ?>
    
        
  </div>

  



    </main>

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


</body>
</html>