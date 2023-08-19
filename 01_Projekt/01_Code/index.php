<!DOCTYPE html>
<?php require 'header.php'?> 
<body>
  
    <div class="container">
      <div class="content">
        <h2>Welcome</h2>
        <p>
          This is our website <br />ff <br />brdd <br />sdsds<br />ff <br />brdd
          <br />sdsds<br />ff <br />brdd <br />sdsds
        </p>

        <?php require 'posts.php'?> 
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
