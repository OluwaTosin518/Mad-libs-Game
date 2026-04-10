<!DOCTYPE html>
<html>
 <head>
    <title>
        Mad libs game
    </title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <section>
   <h1>
      <p>
      Let's Play a Game!!
      </p>
   </h1>
   <ol>
   
   <li>
      <p>
      Fill out the following instruction on the form.
      </p>
</li>


   <li>
      <p>
      Click on the submit button.
</p>
   </li>
   </ol>
   
    <form action="Madlibs.php" method="get">
    Name: <input type="texts" name="name">
    
    
   <p>
    Pets: <input type="texts" name="pets">
    </p>
    
    <p>
    Number: <input type="number" name="number">
</p>
    
    <p>
<input type="submit" name="submit">
</p>
    </form>
    </p>
 </body>
</html>
<?php
$name = $_GET["name"];
$Pets = $_GET["pets"];
$number = $_GET["number"];

echo "$name hates $Pets <br>";
echo "Because $Pets are wild animals<br>";
echo "Especialy those with $number eyes";
?>

</section>
 




 


