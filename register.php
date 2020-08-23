<?php
    session_start();
    $_SESSION['errorsDivRegister'] = '';
    include_once 'Controllers/UsersController.php';
    if(isset($_POST['emailAddress'])) {
        $ucr = new Users();
        if(!$ucr->insertUser($_POST)) {
            $_SESSION['errorsDivRegister'] = 'Email already exists';
        }
        else {
            $_SESSION['errorMessage'] = 'You have registered successfully! Please login';
            header("Location: login.php");
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
            </ul>
        </div>

        

    </header>

    <main>
        <div class="registerContent">
            <h2>Login</h2>
            <?php
            echo '<div class="errorsDivRegister">'.$_SESSION['errorsDivRegister'].'</div>';
           ?>
            <form method="POST" onsubmit="return testoRegjistrimin()">
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

        </div>

    </main>
    

    
    
    
    
    <script src="scripts/script.js"></script>
    
</body>
</html>