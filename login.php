<?php
    session_start();
    require_once 'Controllers/UsersController.php';
    
    $usc = new Users;
    if(isset($_POST['email'])) {
        
       
        $user = $usc->login($_POST);
        
        
        
        if($user == null && $usc->error == "") {
            $_SESSION['errorMessage'] = 'Wrong username/password';
           
        }
        else {
            $_SESSION['errorMessage'] = $usc->error;
        }
        if($user != null) {
            $_SESSION['isAdmin'] = $user['isAdmin'];
            
            $_SESSION['email'] = $user['Email'];
            $_SESSION['Emri'] = $user['Emri'];
            $_SESSION['id'] = $user['ID'];
            $_SESSION['errorMessage'] = "";
            header("Location: index.php");
        }
    }
    
    

    if(isset($_SESSION['email'])) {
        header("Location: index.php");
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login</title>
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
                <li><a href="register.php" class="Faqja2">Register</a></li>
                 
            
            </ul>
        </div>

        

    </header>

    <main>
        <div class="loginContent">
            <h2>Login</h2>
            <?php
            if(isset($_SESSION['errorMessage'])) {
            echo '<div class="errorsDivLogin">'.$_SESSION['errorMessage'].'</div>';
            }
            ?>
            <form method="POST" onsubmit="return testo()">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password"> 
                <button  name="login" id="loginButton">Login</button>
            </form>

        </div>

    </main>
    

    
    
    
    
    <script src="scripts/script.js"></script>
    
</body>
</html>