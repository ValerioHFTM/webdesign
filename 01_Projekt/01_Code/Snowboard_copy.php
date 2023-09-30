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
  <?php require 'header.php' ?>
  <?php require 'Snowboard_content.php'?>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $weight = floatval($_POST["weight"]);

      $sql = "SELECT Name FROM snowboards WHERE Weight_from <= $weight AND Weight_until >= $weight";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $deska = $row["Name"];
      } else {
        $deska = "There is no snowboard for this weight, sorry buddy you need to go for a diet.";
      }
    }

    ?>

<h2>Recommended snowboard size is</h2>
<p><?php echo $deska; ?></p>


  </div>
  <?php require 'footer.php' ?>
</body>

</html>