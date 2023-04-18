<!DOCTYPE html>
<html>
   <head>
      <!--Metadata-->
      <meta charset="utf-8" />
      <meta name="description" content="Unit4-02-PHP-ColdHot" />
      <meta name="keywords" content="immaculata, ics2o" />
      <meta name="author" content="Sirine Cherkaoui" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!--Favicon-->
      <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
      <link rel="manifest" href="./fav/site.webmanifest" />
      <link rel="stylesheet" href="./css/style.css" />
      <title>Temperature Checker, with PHP</title>
   </head>
   <body>
      <!-- Header -->
      <header>
         <h1>Temperature Checker, with PHP</h1>
      </header>
      <main>
         <br>
         <br>
         <!--image-->
         <center><img src="./images/guess.png" alt="Guessing" width="200" height ="200"></center>
         <br>
         <br>
        
        <!--Label for Celsius-->
	<label for="celsius-input">Enter degrees Celsius:</label>
<input type="number" id="celsius-input" placeholder="Enter degrees Celsius">
  <!--Button-->
	<button onclick="checkTemperature()">Process</button>
  <!--Result Id-->
	<p id="temperature-message"></p>
        
               <?php

 if(isset($_POST['celsius-input'])){
            $celsius-input = $_POST['celsius-input'];
   
            // Check if the user's guess is correct
            if($celsius-input < 15){
                echo "<script>
                          document.getElementById('temperature-message').innerHTML = '<h2>It's cold outside!</h2>';
                      </script>";
            } else {
                echo "<script>
                          document.getElementById('temperature-message').innerHTML = '<h2>It's hot outside!</h2>';
                      </script>";
            }
    ?>
   </body>
</html>
