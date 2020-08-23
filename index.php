<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- load w3.css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Hello!</title>
    
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css">
    
    <!-- import the webpage's javascript file -->
    <script src="/script.js" defer></script>
  </head>  
  
  <body>
    <div class="w3-container">
      <?php include 'header.php';?>
      <div class="w3-bar w3-black">
            <?php include 'menu.php';?>
      </div>
    </div>
    <h1>Hi there!</h1>
    
    <p>
      I'm your cool new webpage. Made with <a href="https://glitch.com">Glitch</a>!
    </p>

    <!-- include the Glitch button to show what the webpage is about and
          to make it easier for folks to view source and remix -->
    <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div>
    
    <div class="w3-container">
      <?php include 'footer.php';?>
      <?php include 'menu.php';?>
    </div>
    
    
    <script src="https://button.glitch.me/button.js" defer></script>
    
    
  </body>
</html>
