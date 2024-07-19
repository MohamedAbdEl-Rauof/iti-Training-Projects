<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <?php
    $students = array(  "Joe" => "Smarties", "Ahmed" => "Pringles", "Cassie" => "Marmite crisps", "Ben" => "Mr Kiplings cakes");

      foreach ($students as $student => $food) {
        echo "<p>$student likes $food foods.</p>";
      }
    ?>
  </body>
</html>


