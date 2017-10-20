<header>
   <div id="nav_con">
      <div id="logo">
         <a href="index.php"><img class="logo" src="./lib/img/logo.png" alt="logo"></a>
      </div>
      <!-- <button class="js_menu" type="button">
   <span class="bar"></span>
</button> -->
      <nav> <!-- id is used for dropdown class in mobile -->
         <ul id="topnav" class="mynav">
            <li><a class="" href="index.php">Home</a></li>
            <li><a class="" href="about.php">About Me</a></li>
            <li><a class="" href="resume.php">Resume</a></li>
            <li><a class="selected" href="myprojects.php">My Projects</a></li> 
            <li><a class="" href="contact.php">Contact</a></li>
            <!-- unicode character set = hamburger icon -->
          <!-- onClick calls js function when clicked, shows/ hides dropdown  -->
          <li class="home-icon"><a href="#" onClick="toggleMobileDropdown()">&#9776;</a></li> 
         </ul><!-- topnav -->
      </nav>
     <!--  <img src="img/cart_icon.png" alt="cart" id="cart_icon"> -->
   </div><!--container-->
   <script type="text/javascript" src="navfunction.js"></script>
</header>