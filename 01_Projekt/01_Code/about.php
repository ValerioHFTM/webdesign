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
      <div class="about">
        <h2>about</h2>
        <div class="content">
        <p>
          Well, This is us.
          <br />
          The guy on the right, that's Mateusz. Mateusz is always working and has a pretty cool motorcycle. Needles to say the girls are all running after him. <br />
          or so I heard <br />
          The fancy lad on the left side is Valerio. He is always sleepy but his mom says shes proud. 
        </p>
        </div>
        <div class="image left-image">
          <img
                src="../02_Images/TTRaidPackMK3/TT_Raid_Pack_mk3_Action.jpg"
                alt="Valerio"
                class="valerio"
                >
                
          </div>
          <div class="image right-image">
          <img
                src="../02_Images/TTRaidPackMK3/TT_Raid_Pack_mk3_Action.jpg"
                alt="Mateusz"
                class="mateusz"
                >
          </div>
        </div>
    </div>
    <?php require 'posts.php'?> 
    <?php require 'footer.php'?> 
  </body>
</html>
