<?php

//This keyword is going to include a.php where our arrays are declared.
include("a.php");

/* Isset makes sure that options, is validated or has input because our if else if statement 
is based on that input.
*/ 

if(isset($_POST["options"])) {

    if($_POST["options"] == "Games") {
        //This is the first echo paragraph about PS5 games on the market.
          echo "Based on the answers you provided, we've come up with some great game suggestions you'll love. <br>
          <br>
          These hot-selling PS5 games have already hit the market and can be found online or at your local store.
          <br>
          <br>
          "; 
        //This is the first foreach loop that's looping through the array for market games.
          foreach($gameArray as $value)
          echo "$value <br>";
        

        //This is the second echo paragraph about Upcoming games on the market.
         echo "<br> Don't worry if none of those games sparked your interest. The PS5 gaming market is forever expanding 
         and these are some of the most anticipated PS5 games to look forward to.
         <br>
         <br>
         ";
        //This is the second foreach loop that's looping through the upcoming games.
         foreach($gArray as $value)
          echo "$value <br>";


    } elseif ($_POST["options"] == "Accessories") {
          //This is the first echo paragraph about sony accessories.
          echo "Based on the answers you provided, we've come up with some great accessories to pair with your PS5.<br>
          <br>
          These are Playstation branded accessories for the PS5.
          <br>
          <br>
          ";
          //This is the first foreach loop that's looping through the array for sony accessories.
          foreach($accessoryArray as $value)
          echo "$value <br>";

          //This is the second echo paragraph about aftermarket accesories
          echo "<br> While Playstation has an excellent line of accessories, these are some more aftermarkets accessories for your PS5. 
          <br>
          <br>
          ";
        //This is the first foreach loop that's looping through the array for aftermarket accessories
          foreach($aArray as $value)
          echo"$value <br>";

     } elseif ($_POST["options"] == "Design") { 
         //This is the first echo paragraph about design mods.
          echo "Based on the answers you provided, we've come up with some ideas to help you modify your PS5. 
          <br>
          <br>
          These are controller mods you can do.
          <br>
          <br>
          ";
          //This is the first foreach loop that's looping through the array for design mods.
          foreach($designArray as $value)
          echo "$value <br>
          ";

          //This is the second echo paragraph about console mods
          echo "<br> Don't forget to pair your controller with a matching console.
          <br>
          <br>
          ";
          //This is the second foreac loop that's lopping through the array for design mods
          foreach($dArray as $value)
          echo "$value <br>";

     } else { 
         echo("Error, please go back to form.");

     }
    }


?>
