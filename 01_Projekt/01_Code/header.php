<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travellin</title>
  </head>

    <header>
      <h1><a href="index.php">Websitenames</a></h1>
      <!-- he said during class i is for italic but this is oldschool. usually you are suppose to use em for emphasize -->
      <!-- to put something in Bold in a sentence you can use the statement strong  -->
      <!-- the <br/> tag is used to make a break inside a p -->

      <aside class="intro">
        <p>
          This is a website from <strong>Mateusz</strong> and
          <em>Valerio</em>
        </p>
      </aside>

      <button href="contact.php" class="contactbutton">Contact</button>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="review.html">Reviews</a>
            <ul class="dropdown-content">
              <li><a href="review.html">Backpacks</a></li>
              <li><a href="review.html">Shelter</a></li>
              <li><a href="review.html">Category 3</a></li>
            </ul>
          </li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="webshop.html">Webshop</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>
</html>