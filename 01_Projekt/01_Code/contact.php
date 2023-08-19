<!DOCTYPE html>
<html lang="en">
  <?php require 'header.php'?> 
  <body>
  
    <div class="container">
      <div class="content">
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
        <aside class="related-posts">
          <h4>Related posts</h4>

          <ul>
            <li>
              <img
                src="img/related-1.jpg"
                alt="Person programming"
                width="75"
                width="75"
              />
              <a href="#">How to Learn Web Development</a>
              <p>By Jonas Schmedtmann</p>
            </li>
            <li>
              <img
                src="img/related-2.jpg"
                alt="Lightning"
                width="75"
                heigth="75"
              />
              <a href="#">The Unknown Powers of CSS</a>
              <p>By Jim Dillon</p>
            </li>
            <li>
              <img
                src="img/related-3.jpg"
                alt="JavaScript code on a screen"
                width="75"
                height="75"
              />
              <a href="#">Why JavaScript is Awesome</a>
              <p>By Matilda</p>
            </li>
          </ul>
        </aside>
        <!-- Footer -->
      </div>
    </div>
    <footer>
      <!-- ul stantds for unorganzied list. each list item is set with the li tag.
    for a ordered list 1,2,3 you canuse the ol tag. -->
      <div class="navigation">
        <div>
          <ul class="footerlists">
            <li class="listtitle">Content</li>
            <li><a href="index.html">Home</a></li>
            <li><a href="review.html">Reviews</a></li>
            <li><a href="blog.html">Blog</a></li>
          </ul>
        </div>
        <div>
          <ul>
            <li class="listtitle">Information</li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="partner.html">Partner</a></li>
          </ul>
        </div>
        <div>
          <ul>
            <li class="listtitle">Webshop</li>
            <li><a href="webshop.html">Webshop</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
