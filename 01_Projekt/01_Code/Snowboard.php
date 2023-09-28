<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travelling Guide</title>
  </head>
  <body>
    <?php require 'header.php'?>
    <?php require 'Snowboard_content.php'?>

    <form action="Snowboard_copy.php" method="post">
      <label for="height">Height (in cm):</label>
      <input type="text" name="wzrost" id="wzrost" required><br>

      <label for="weight">Weight (in kg):</label>
      <input type="text" name="weight" id="weight" required><br>

      <input type="submit" value="Calculate">
    </form>    
  </div>
    <?php require 'footer.php'?>
  </body>
</html>
