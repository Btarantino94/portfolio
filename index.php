 <!-- require "./lib/inc/db.inc.php" -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width">
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="./lib/css/reset.css" />
    <link type="text/css" rel="stylesheet" href="./lib/css/styles.css" />
    <link type="text/css" rel="stylesheet" href="./lib/css/style2.scss" />
    <!-- css ends-->
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <!--put fonts in head so they load before js-->
    <title>home page</title>
</head>

<body id="home_bod">
    <!-- header start -->
    <?php include './lib/inc/header.inc.php'; ?>
        <!-- header end -->
        <!-- container hero image start -->
    <section id="homepage_hero">
        <div id="container">
            <h1 id="homepage_hero_headline">Britanny Tarantino</h1>
            <p id="subtext">Portfolio</p>
        </div>
        <!-- container for hero image end -->
    </section>
    <section id="homeintro">
        <div id="welcome">
        <h2>Welcome!</h2>
        <p>My name is Britanny Tarantino, I am an aspiring web developer and this is my portfolio site. I have a passion for web development and a wide skill set fueled by an insatiable curiosity. You can find some of the projects I've worked on in the <a href="myprojects.php">project</a> tab in my navigation bar. After you look around my site, please <a href="contact.php">contact me</a>. I'd appriciate hearing from you.</p>
        </div>
        <div id="topline">
        <p><a href="about.php">Click Here to Learn More</a></p>
        </div>
    </section>
  <!--   <section id="validate">
        <h2>W3C Validated</h2>
        <p>This site has been W3C validated for both HTML 5 and CSS 3.0. (Yes, I know that the -webkit- and -moz- prefixes don't validate, but it's a necessary evil of using CSS3 at this point.)</p>
    </section> -->
    <section id="textbox">
        <div id="webbox">
            <h2>Aspiring Web Developer</h2>
            <p id="pbox">Code is like poetry to me. Each part is coherent and singular in its purpose; when written with passion each piece fits together like the parts of a complex mosaic. I've learned a great deal and plan on learning so much more. If you look behind the scenes, a pattern is revealed that says something about the poet behind the code.</p>
        </div>
    </section>
    <!-- jquery validation plugin -->
    <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="./lib/js/form-validation.js?v=1508274945"></script>
    <script src="./lib/js/navfunction.js?v=1508274945"></script>
    <!-- call jquery validation plugin -->
    <script 
        src='./lib/js/jqueryValidate.js'>
    </script>

        <!-- footer start -->
    <?php include './lib/inc/footer.inc.php'; ?>
            <!-- footer end -->
</body>
</html>