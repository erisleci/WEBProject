<?php
session_start();
include_once 'Controllers/ArticlesController.php';
  $artcon = new Articles();
  
  


  if(isset($_SESSION['isAdmin'])) {
    if($_SESSION['isAdmin'] == '0') {
    header("Location: index.php");
    }
  }
  else {
    header("Location: index.php");
  }

  if(isset($_POST['submit'])) {
    
    
    $artcon->createArticle($_POST);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an article</title>
    <link rel="stylesheet" href="css/create.css" type="text/css">
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
            if(!isset($_SESSION['Emri'])) {
                        
                            
                            
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
        
        <div>
        
        <form method="POST">
            <h2 style="color: red;"><?php
            echo $artcon->createError;?></h2>
            <h2 style="color: green;"><?php
            echo $artcon->createSuccess;?></h2>
            <h2>Shto Lajmin</h2>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
            
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle"> 
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="50" rows="10"></textarea>
            <label for="title">PrimaryCategory</label>
            <select  name="primaryCategory" id="primaryCategory">
               <option value="Actual News">Actual News</option>
               <option value="Sport">Sport</option>
               <option value="Health">Health</option>
               <option value="Politics">Politics</option>
               <option value="Economy">Economy</option>
            </select>   
            <label for="title">SecondaryCategory</label>
            <input type="text" name="secondaryCategory" id="secondaryCategory">
            <label for="file">Zgjedhe Foton</label>
            <input type="file" name="photo" id="photo">        
            <button type="submit" id="shtoButton" name="submit">Shto</button>                     
        </form>
        </div>

    </main>
    
</body>
</html>