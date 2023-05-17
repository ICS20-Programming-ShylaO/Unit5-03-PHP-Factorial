<!DOCTYPE html>

<!-- ICS20-Programming-Unit5-03-PHP-Factorial -->
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Finding the Factorial, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon[1].png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32[1].png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16[1].png">
    <link rel="manifest" href="./favicon/site[1].webmanifest">

    <!-- Style Sheet and Google's MDL -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css"> 
      
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Finding the Factorial of an Integer, Using PHP</title>
  </head>
  <body>
    <!-- Header -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Calculating Factorials with PHP</span>
        </div> 
      </header>
      <main class="mdl-layout__content">
        <!-- php echo to print the html to the page -->
    <?php
      echo "<h1>Finding the Factorial of Integers</h1>";
      echo "<h3>This program calculates the factorial of a positive integer.</h3>";
    ?>
    <center>
    <img src="./images/factorial_form.png" alt="General Factorial Formula" width="25%" height="25%"><br><br>
      
    <!-- Form for the two factors (integers) -->
      <br><br>
    <form action="./results.php" method="post" target="results">
      <label for="lblInt1">Integer 1:</label>
      <input type="number" id="f-int" step="1" min="0" placeholder="Eg. 5" name="f-int"><br><br>
      <br><br>
      <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
          Calculate Factorial
          </button>
    </form>
      
    <!-- iframe to display factorial of user's integer -->
      <br>
    <iframe id="results" name="results"></iframe>
    </center>
      </main>
  </body>
</html>