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
    <div class="container">
      
        <p>this is our contactsheet</p>
        <form method="post" action="PHPFILE.php" enctype="text/plain">
          <label>Name:</label><br />
          <input type="TEST" name="name" size="15" /><br />
          <label>First Name:</label><br />
          <input type="TEST" name="Surname" size="15" /><br />
          <label>Message:</label><br />
          <textarea name="msg" rows="10" cols="20"></textarea>
          <p id="send-or-startOver">
            <input type="submit" value="send" />
            <input type="reset" value="reset Form" />
          </p>
        </form>
        
    </div>

  </body>
</html>
