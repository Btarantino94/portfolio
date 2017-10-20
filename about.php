<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width">
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="./lib/css/reset.css" />
    <link type="text/css" rel="stylesheet" href="./lib/css/styles.css" />
    <!-- css ends-->
    <!-- google font-->
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <!--put fonts in head so they load before js-->
    <title>resume page</title>
</head>
<body>
    <!-- header start -->
    <?php include './lib/inc/header.inc.php'; ?>
        <!-- header end -->

    <section id="about_con">
        <div class="headline_con">
            <h1 class="hero_headline">About Me</h1>
        </div>
        <main class="about">
            <div>
                <img id="tag_photo" src="./lib/img/me2.jpg" alt="potrait">
            </div>

            <div>
                <h2>Childhood</h2>
                    <p>I grew up as a military brat. "Brat" stands for Born Raised And Trained. My father was in the Army, thus we are patriots. I moved at least once every three to six months and lived overseas. This built a resilience within me: Move after move, I maintained a joyful, playful, easy going attitude.  I enjoy learning to adapt to new situations and apply these traits to all areas of life. </p>
            </div>

            <div>
                <h2>Youth</h2>
                    <p>My teenage years were significant to me because at that time I branched out on my own. Moving out increased my talent for adaptability. Being an extroverted <a href="http://www.leadershipvisionconsulting.com/strengths-finder-theme-of-woo/">woo (winning others over)</a>, it was exciting for me to make connections, hold a job, while at the same time attending school and providing for myself. I have truly been blessed to meet so many wonderful people.</p>
            </div>
            <div>
                <h2>Adulthood</h2>
                    <p>Now I'm a mother of two beautiful children; one boy (Connor) and one girl (Payton). They drive me everyday to be better and do better. Having children made me develop many wonderful and useful skills such as adaptability, connectedness, independence, consistency, and responsibility. They are my inspiration and motivation to work hard. </p>
            </div>
            <div>
                <div>
                    <h2>Hobbies</h2>
                        <ul>
                            <li>Videogames</li>
                            <li>Reading/Writing</li>
                            <li>Rugby/Football</li>
                            <li>Baking</li>
                        </ul>
                </div>
            </div>

            <div>
                <h2>Life Goals</h2>
                    <ul>
                        <li>Become a Front-end Developer</li>
                        <li>Generate college funds for my chilldren</li>
                        <li>Continue to learn about software development</li>
                    </ul>
            </div>

        </main> 
        <!-- container end -->
    </section>
    <!-- footer start -->
   <?php include './lib/inc/footer.inc.php'; ?>
    <!-- footer end -->
    <!-- jquery validation plugin -->
    <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="./lib/js/form-validation.js?v=1508274945"></script>
    <script src="./lib/js/navfunction.js?v=1508274945"></script>             
    <!-- call jquery validation plugin -->
    <script src='./lib/js/jqueryValidate.js'></script> 
</body>
</html>