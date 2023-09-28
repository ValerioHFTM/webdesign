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
  <div class="container">
    <h2>Snowboard NITRO Cinema 2021</h2>
    <p>
      Go to<a href="https://sportconcept.com/snowboard/snowboard/6738-Nitro-cinema">
        Nitro Snowboards</a>
    </p>
    <h5>Supplier Description</h5>
    <p class="manufacturerDescription">
      The Cinema's Directional Twin shape is perfect for ripping around your local mountain and exploring the entire
      trail map, while effortlessly creating your own progression curve and memories by using the friendly ride of the
      Gullwing Nitro Cinema.
      The Cinema's Directional Twin shape was developed to provide the perfect blend of sidecut, flex, and forgiveness
      to help you learn faster and progress from the groomers into the park. Built to be the perfect all-mountain
      explorer with a flex that is playful and more fun, thanks to its Gullwing Rocker and Park Flex, allowing you to
      jib your way through the trail map. Developed to offer the stability and catch-free ride needed for experienced
      riders to quickly learn new tricks in the park, while offering enough forgiveness for beginners to easily learn
      how to link turns on the groomers.

    </p>
    <img src="../02_Images/Snowboard/Board Cinema.png" alt="Tasmaian Tiger Raid Pack mk III, Front, Green"
      class="product">
    <h4 class="summary">Summary: 10 / 10</h4>
    <p>
      In our reviews we try to be as fast forward as possible. <br />
      This is why we rate all the snowboards we tested by the same
      schematic.<br />
      For each category we rate the product on a scale from 1 to 10 <br />
      (10 being the highest, because its the highest)
    </p>
    <ul>
      <li>Size</li>
      <li>Flex</li>
      <li>On snow feel</li>
      <li>Turning experience</li>
      <li>Speed</li>
      <li>Getting Air/Park</li>
    </ul>
    <h4>The Review in details</h4>
    <h5>Size</h5>
    <p>
      The Nitro Cinema Felt great on my legs. It is light which makes a feeling that I have nothing attached to my legs.
      The size 159 fits my weight well stance is very comfortable as it's natural, I have no problem with turns in it,
      although I'm used to smaller sizes.
    </p>
    <h5>Flex</h5>
    <p>
      Very good flex, it's in my opinion the better ones I tried. <b>It's not too soft yet it's not crazy stiff </b>.
      Really a
      pleasant pop and a great response to tearing up the slope.
    </p>
    <h5>On snow feel</h5>
    <p>
      So easy to ride and so forgiving for those that skid turns or just want a ride that is less likely than camber to
      catch an edge. Like all hybrid rocker boards, it has that semi-stable feel underfoot that wants to auto-spin one
      footing or flat basing in harder snow but it becomes pretty stable in softer snow.
    </p>
    <h5>Turning experience</h5>
    <p>
      Again it's really good, it can edge really nice, but also depends on how "how low can you go" and "if you're brave
      enough". Speed and your own limits are key here. I'm not having years of expereience but
      the turning experience was much better than competition.
    </p>
    <h5>Find your size</h5>

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

      $sql = "SELECT Name FROM snowboard WHERE Weight_from <= $weight AND Weight_until >= $weight";
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
  <?php require 'posts.php' ?>
  <?php require 'footer.php' ?>
</body>

</html>