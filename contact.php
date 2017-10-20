<!DOCTYPE html>
<html>
<head>
   <!-- linking my reset.css -->
   <link type="text/css" rel="stylesheet" href="./lib/css/reset.css" />
   <!-- linking my css -->
   <link type="text/css" rel="stylesheet" href="./lib/css/styles.css" />
   <!-- google kaushan font -->
   <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
   <!--  The HTML meta element represents metadata that cannot be represented by other HTML meta-related elements, like base, link, script, style or title. -->
   <meta charset="utf-8"> 
   <meta name="viewport" content="width=device-width">
   <meta content="IE=edge" http-equiv="X-UA-Compatible">
   <meta content="width=device-width, initial-scale=1 user-scalable=0" name="viewport">
   <!-- google font -->
   <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <!--put fonts in head so they load before js-->
   <title>contact page</title>
</head>
<body id="contact_body">
    <!-- header start -->
    <?php include './lib/inc/header.inc.php'; ?>
    <!-- header end -->
   <section>
      <div id="contact">
         <h1 class="hero_headline">Contact Me!</h1>
         <div>
            <p class="subtext">You can send me an email below:</p>
            <p>My Email: Btarantino94@gmail.com</p>
            <div id="row">
               <form method="POST" autocomplete="on" id="contact-form" name="contact-form" action="https://formspree.io/britannyc@aol.com">
                  <!--  in the input below I am giving the input a class col-md-6 and col-sm-12  which will span half the screen on mobile phone (md) and 1/2 of the screen on tablets(sm) -->
                  <p>Full Name:</p><input class="col-md-6 col-sm-12" id="form-name" name="name" oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please complete this field.')" placeholder="Full Name" required="" type="text">
                  <p>Email:</p><input class="col-md-6 col-sm-12" id="form-email" name="email" placeholder="Email" required="" type="email">
                  <p>Message:</p><textarea class="col-sm-12" id="form-text" name="message" placeholder="Message" required=""></textarea>
                  <br>
                  <input class="btn btn-default btn-block col-sm-12" id="form-button" type="submit" value="Send">
               </form>
            </div>
         </div>
      </div>
      <!-- container -->
      <!-- jquery validation plugin -->
      <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
      <script src="./lib/js/form-validation.js?v=1508274945"></script>
      <script src="./lib/js/navfunction.js?v=1508274945"></script>
     </section>
        <!-- footer start -->
       <?php include './lib/inc/footer.inc.php'; ?>
            <!-- footer end -->
</body>
</html>