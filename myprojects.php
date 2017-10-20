<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width">
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="./lib/css/reset.css" />
    <link type="text/css" rel="stylesheet" href="./lib/css/styles.css" />
    <!-- <link type="text/css" rel="stylesheet" href="./lib/css/style2.scss" /> -->
    <!-- css ends-->
    <!-- product slide css starts -->
    <link rel="stylesheet" type="text/css" href="./lib/css/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./lib/css/slick/slick-theme.css" />
    <!-- product slide css ends  -->
    <!-- script tag for slider -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <!--put fonts in head so they load before js-->
    <!-- jquery validation plugin -->
    <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="./lib/js/form-validation.js?v=1508274945"></script>
    <script src="./lib/js/navfunction.js?v=1508274945"></script>

    <title>My Project Page</title>
</head>
<body class="body">
    <!-- header start -->
    <?php include './lib/inc/header.inc.php'; ?>
        <!-- header end -->

    <section class="hero_con">
        <div class="headline_con">
            <h1 class="hero_headline">My Projects</h1>
            <!-- <p class="subtext">Personal projects, School Projects, and more</p> -->
        </div>
        <!-- container end -->
    </section>

    <body>
        <main class="codenav">
          <div class="codenav_container">
            <!--  use type radio so you can choose from one tab to another -->
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">HTML Challenges</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">CSS Challenges</label>

            <input id="tab3" type="radio" name="tabs">
            <label for="tab3">Javascript Challenges</label>

            <input id="tab4" type="radio" name="tabs">
            <label for="tab4">Jquery Challenges</label>

            <input id="tab5" type="radio" name="tabs">
            <label for="tab5">React Challenges</label>

            <input id="tab6" type="radio" name="tabs">
            <label for="tab6">PHP Challenges</label>

            <input id="tab7" type="radio" name="tabs">
            <label for="tab7">C# Challenges</label>

            <input id="tab8" type="radio" name="tabs">
            <label for="tab8">Personal Projects</label>

            <!-- html challenges -->
            <section id="content1">
              <ul>
               <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/bozJzE" target="blank">HTML Form:</a></h2>
                        <p>Create an HTML form with a GET method.</p>
                    </li>

                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/yoYwGO?editors=1100" target="blank">Navigation Dropdown:</a></h2>
                        <p>Horizontal navigation of 5 items, w/ dropdown menu.</p>
                    </li>
               
                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/oejXbj?editors=1111" target="blank">Name List:</a></h2>
                        <p>Given a string of full names, used javascript to make them alphabetical-by-Last-Name. Made last names bold and red using CSS.</p>
                    </li>
              </ul>
            </section>
            <!-- css challenges -->
              <section id="content2">
              <ul>
                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/RLvvpP" target="blank">Mock Box Model Site:</a></h2>
                  <p>Box model site used positioning, built out what I saw in the image provided.</p>
                </li>
                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/KvWLaY" target="blank">Color Wheel:</a></h2>
                  <p>Recreate the pie chart w/css.</p>
                </li>
                <li>
                  <h2><a href="https://codepen.io/Btarantino/pen/eGxoMR" target="blank">Rainbow Box Layout:</a></h2>
                  <p>Used provided HTML and created square patterns entirely in CSS.</p>
                </li>
              </ul>
            </section>
            <!-- javascript challenges -->
          <section id="content3">
              <ul>

                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/RgmamK?editors=0011" target="blank">Counting Names:</a></h2>
                        <p>String of full names and color, counting the characters it contains using javascript.</p>
                    </li>
                <li> 
                    <h2><a href="https://codepen.io/Btarantino/pen/YxzvYL?editors=1012" target="blank">Dog Life:</a></h2>
                        <p>Created a function that receives the total amount of miles you want the dog to runs, when he/she eats, when the dog rests and if/if not the dog passes out from exhaustion.</p>
                </li>
                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/WZPKJm" target="blank">Visitor Tag:</a></h2>
                        <p>Created an application that creates customized visitor tags.</p>
                </li>
                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/GvOQGp" target="blank">Tabata Timer:</a></h2>
                        <p>Created a tabata timer with javascript.</p>
                </li>
                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/XeOoGZ?editors=1011" target="blank">Movie Rating Object Constructor:</a></h2>
                        <p>Created an object constructor for movies that shows rating, and movie info.</p>
                </li>
              </ul>
            </section>
               <!-- jquery challenges -->
           <section id="content4">
              <ul>
                <li> 
                    <h2><a href="https://codepen.io/Btarantino/pen/KvyQBy" target="blank">Simple jquery Form</a></h2>
                        <p>A regular form but with jquery.</p>
                </li>
                <li> 
                    <h2><a href="https://codepen.io/Btarantino/pen/LzqoVa" target="blank">Slider:</a></h2>
                        <p>A slider using jquery.</p>
                </li>
                <li> 
                    <h2><a href="https://codepen.io/Btarantino/pen/ZJbGrd" target="blank">Tic Tac Toe Game</a></h2>
                        <p>Created a tic tac toe game against the computer.</p>
                </li>
              </ul>
            </section>
            <!-- react challenges -->
            <section id="content5">
              <ul>
                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/KXJYLW" target="blank">React Table:</a></h2>
                  <p>React list that filteres team and info per team.</p>
                </li>
                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/mMzdwX" target="blank">React Contact List:</a></h2>
                  <p>Contact list built with react, you can search through contacts.</p>
                </li>
                <li>
                    <h2><a href="https://codepen.io/Btarantino/pen/WEaNVe" target="blank">Contact app:</a></h2>
                  <p>Built an application that allows you to submit your contact info.</p>
                </li>
                <li>
                  <h2><a href="http://lperez.road2hire.ninja/commentApp/" target="blank">Comment App:</a></h2>
                  <p><a href="https://github.com/Btarantino94/react-book" target="blank">GitHub for Contact app</a></p>
                  <p>Build an application that allows you to comment and reply. Also be able to like and dislike the comments and replies.</p>
                </li>
                <li>
                    <h2><a href="http://btarantino.road2hire.ninja/guessinggame/" target="blank">Guessing Game App:</a></h2>
                    <p><a href="https://github.com/Btarantino94/guessinggame" target="blank">GitHub for Guessing Game App</a></p>
                  <p>Build an application that allows you to guess a number until you guess the correct one.</p>
                </li>
                <li>
                    
                </li>
                <li>
                    
                </li>
                <li>
                    
                </li>
              </ul>
            </section>
            <!-- php challenges -->
           <section id="content6">
              <ul>
                <li>
                    
                </li>
                <li>
                    
                </li>
                <li>
                    
                </li>
                <li>
                    
                </li>
                <li>
                    
                </li>
                <li>
                    
                </li>
              </ul>
            </section>
            <!-- c# challenges -->
            <section id="content7">
              <ul>
                <li>
                    <h2><a href="https://github.com/Btarantino94/Visual_Studio" target="blank">All of my C# challenges:</a></h2>
                    <p>All on github.</p>  
                </li>
              </ul>
            </section>
            <!-- personal projects -->
            <section id="content8">
              <ul>
                <li>
                  <h2><a href="http://btarantino.road2hire.ninja/biography/" target="blank">My first website:</a></h2>
                  <p>First iteration of this site.</p>
                </li>
                <li>
                  <h2><a href="https://codepen.io/Btarantino/pen/brEQmJ" target="blank">Bioshock Poster:</a></h2>
                  <p>Built a poster with keyframes in sass.</p>
                </li>
                <li>
                  <h2><a href="https://codepen.io/Btarantino/pen/rGPgzZ" target="blank">Team Switch:</a></h2>
                  <p>A sass version of one of my react challenges.</p>
                </li>
                <li>
                   <h2><a href="http://btarantino.road2hire.ninja/PHPFinal/lib/index.php" target="blank">E-Commerce:</a></h2>
                  <p>A website simply used to practice making a e-com type of layout.</p> 
                </li>
              </ul>
            </section>

          </div> <!-- end codenav container -->
          <div id="featuredpens">
            <h1>Featured Pens:</h1>
            <p data-height="265" data-theme-id="light" data-slug-hash="rGPgzZ" data-default-tab="css,result" data-user="Btarantino" data-embed-version="2" data-pen-title="Team change 08/30/2017" class="codepen">See the Pen <a href="https://codepen.io/Btarantino/pen/rGPgzZ/">Team change 08/30/2017</a> by Britanny Tarantino (<a href="https://codepen.io/Btarantino">@Btarantino</a>) on <a href="https://codepen.io">CodePen</a>.</p>
                <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
            <!-- <p data-height="268" data-theme-id="0" data-slug-hash="ClnAe" data-user="afkatja" data-default-tab="result" class='codepen'>See the Pen <a href='https://codepen.io/Btarantino/pen/rGPgzZ'>?</a> by Britanny Tarantino (<a href='https://codepen.io/Btarantino/'>@BritannyTarantino</a>) on <a href='http://codepen.io'>CodePen</a></p> -->
          </div>
        </main> <!-- end codenav -->

        <!-- call jquery validation plugin -->
    <script 
        src='./lib/js/jqueryValidate.js'>
    </script>

        <!-- footer start -->
    <?php include './lib/inc/footer.inc.php'; ?>
            <!-- footer end -->
</body>
</html>