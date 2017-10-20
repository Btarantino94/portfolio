<!DOCTYPE html>
<html>

<head>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="./lib/css/reset.css" />
    <link type="text/css" rel="stylesheet" href="./lib/css/styles.css" />
    <!-- css ends-->
    <!-- google font-->
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <title>resume page</title>
</head>
<body class="body">
    <!-- header start -->
    <?php include './lib/inc/header.inc.php'; ?>
        <!-- header end -->

    <section class="hero">
        <div class="headline_con">
            <h1 class="hero_headline">Resume</h1>
            <!-- <p><a href="./lib/docs/BritannyTarantinoResume.pdf" id="resumeLink" target="blank">Download PDF</a></p> -->
        </div>
        <!-- container end -->
    </section>
    <!-- begin resume -->
    <main class="resume">
        <p><a href="./lib/docs/BritannyTarantinoResume.pdf" id="LinkRes" target="blank">Download PDF</a></p>
            <div id="resume_body">
                <h2 id="resume_name">Britanny Tarantino</h2>
                <p id="resume_sub">2225 Hudson Landings dr. Apt. A Gastonia, NC 28054 | Cell: 980-925-1789 | E-Mail: Btarantino94@gmail.com</p>
                <ul>
                    <li>Motivated tech academy graduate with experience in eight different languages including Javascript and CSS. Outgoing and detail-oriented, proficient at building and maintaining professional relationships.<li>
                    <li class="resumetitle">Objective:</li> 
                    <li class="activitytext">To obtain a position as a software engineer in the constantly growing and changing technology field.</li>
                    <li class="resumetitle">Skills:</li>
                </ul>
                <ul id="skilllist1">
                    <li class="activitytext1"> &#8594; Communication</li>
                    <li class="activitytext1"> &#8594; Multitasking</li>
                    <li class="activitytext1"> &#8594; Prioritizing</li>
                    <li class="activitytext1"> &#8594; Organization</li>
                    <li class="activitytext1"> &#8594; Teamwork</li>
                    <li class="activitytext1"> &#8594; Fluent in Spanish and English</li>
                </ul>
                <ul id="skilllist2">
                    <li class="activitytext2"> &#8594; Technical skills</li>
                    <li class="activitytext2"> &#8594; Initiative and problem-solving abilities</li>
                    <li class="activitytext2"> &#8594; Reliable</li>
                    <li class="activitytext2"> &#8594; Computer Languages</li>
                    <li class="activitytext2"> &#8594; Decision Making</li>
                    <li class="activitytext2"> &#8594; Proficient in Microsoft Office including Excel and Powerpoint</li>
                </ul>
                <ul>

                    <li class="resumetitle">Professional Experience:</li>
                    <li class="jobdates"><time datetime="2017-06">June 2017</time> to <time datetime="2017-10">October 2017</time></li>
                    <li class="jobtext">Road to Hire Tech Academy Fort Mill, SC</li>
                    <li class="jobtext">Student</li>
                    <li class="activitytext">Extensively trained in both technological and team building skills. Build webpages using HTML, CSS, C#, React, Jquery, SQL, AJAX, PHP and JavaScript. Maintained a punctual, professional brand. </li>

                    <li class="jobdates"><time datetime="2017-12">December 2015</time> to <time datetime="2017-08">August 2017</time>
                    <li class="jobtext">Securitas Security Services USA, Inc. Charlotte, NC<li>
                    <li class="jobtext">Security Officer</li>
                    <li class="activitytext">Secures premises and personnel by patrolling property; monitoring surveillance equipment; inspecting buildings, equipment, and access points; permitting entry.</li>

                    <li class="jobdates"><time datetime="2017-06">June 2014</time> to <time datetime="2017-07">July 2014</time>
                    <li class="jobtext">Walmart Supercenter Claremont, NH<li>
                    <li class="jobtext">Cake Decorator /Production </li>
                    <li class="activitytext">Planned, coordinated and supervised the work activity throughout the day.  Established and maintained a positive, professional relationship with co-workers and customers through effective, accurate, timely, and reliable communication and action.</li>

                    <li class="jobdates"><time datetime="2017-06">June 2009</time> to <time datetime="2017-10">August 2005</time>
                    <li class="jobtext">Crazy Greek Diner Jersey City, NJ<li>
                    <li class="jobtext">Waitress/ Server </li>
                    <li class="activitytext">Helped patrons select food and beverages by presenting menu. Maintained table settings by removing courses as completed. Maintained sanitation, health, and safety standards in work areas.</li>

                    <li class="resumetitle">Education:</li>
                    <li class="jobtext">Central Piedmont Community College Charlotte, NC</li>
                    <li class="jobtext">Claremont Adult Learning Center Claremont, NH</li>
                    <li class="activitytext">High School Diploma</li>

                    <li class="resumetitle">Activities and Honors</li>
                    <li class="jobtext">Spectrum Club</li>
                    <li class="activitytext">Established to provide a sense of community and support for LGBTQ students and their allies at CPCC.</li>
                    <li class="jobtext">Time Out Youth</li>
                    <li class="activitytext">Volunteered during gay pride charlotte parade.</li>
                </ul>
            </div><!--end of resume-->
        </main>

 

    <!-- <div class="resume_con">
            <figure class="resume"><img src="./lib/img/bresume.jpg" alt="resume"></figure>
            <p>download file</p>
    </div> -->
        <!-- footer start -->
       <?php include './lib/inc/footer.inc.php'; ?>
            <!-- footer end -->


</body>

</html>