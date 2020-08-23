<?php
session_start();
  include_once 'Controllers/ArticlesController.php';
  $artcon = new Articles();
  $article = null;
  


if(isset($_SESSION['isAdmin'])) {
    if($_SESSION['isAdmin'] == '0' || !isset($_SESSION['Emri'])) {
    header("Location: index.php");
    }
}
else {
    header("Location: index.php");
}
 
if(isset($_GET['id'])) {
    
  $article = $artcon->findId($_GET['id']);
    
}

if(isset($_POST['submit'])) {
  $artcon->updateArticle($_POST);
  header('Location: edit.php?id='.$_GET['id']);
}

  

  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/edit.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,100&display=swap"
    />
    <title>edit</title>
  </head>
  <body>
    <header>
      <div class="headerLeft">
        <a href="lajmi.html"
          ><img src="images/logo.png" height="130" width="120"
        /></a>
        <ul class="HeaderList">
          <li><a href="index.php">News</a></li>
          <li><a href="About_us.php">About Us</a></li>
          <li><a class="Faqja2" href="Subscription.php">Subscription</a></li>
          
        </ul>
      </div>

      <div class="headerRight">
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
      </div>
        
      
    </header>

    <div id="container">
      <form method='POST'>
      <label for="">ID</label><br />
      <fieldset>
        <input name='id' placeholder="Your id" type="text" id="inputat" value="<?php echo $_GET['id']; ?>">
        <br />
      </fieldset>

      <label for="">Title</label><br />
      <fieldset>
        <input name='title' placeholder="Title" type="text" value="<?php echo $article['Title'];?>" id="inputat" /><br />
      </fieldset>

      

      <label for="">Description</label><br />
      <fieldset>
        <textarea name='description'  placeholder="Description" type="textarea" cols="50" rows="10" id="inputat"><?php echo $article['Description'];?></textarea>
        <br />
      </fieldset>

      

      

      <label for="">Admin</label><br />
      <fieldset>
        <input name='admin' placeholder="Admin" type="text" id="inputat" value="<?php echo $_SESSION['id']?>"/><br />
      </fieldset>
      </br>
      <button name='submit'>Submit</button>
      </form>
    </div>
  </body>
</html>
