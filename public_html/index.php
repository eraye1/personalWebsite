<!DOCTYPE html>
  <html>
   <head>
      <title>Raymond's Personal Website</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Raymond's personal website, where he can finally try out the little he knows about web apps.">
      <meta name="author" content="Raymond Wang">
      <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
      <link href="/assets/css/carousel.css" rel="stylesheet">

   </head>

   <body>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
         <img src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-frc3/1403330_10151984496765883_91467180_o.jpg" alt="ocp">
         <div class="container">
 <!--/assets/pics/ocp.jpg-->

           <div class="carousel-caption">
              <h1>Welcome to the website of Raymond Wang</h1>

            </div> 
          </div>
        </div>
        <div class="item">
          <!--<img src="/assets/pics/prof.jpg" alt="prof" height="500" width="500">-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Resume</h1>
              <p>You can download my resume here.</p>
              <p><a class="btn btn-large btn-primary" href="https://dl.dropboxusercontent.com/u/41434179/WangRaymond_Resume.pdf"><span class="glyphicon glyphicon-cloud-download"></span> Download</a></p>
            </div>
          </div>
        </div>
        <div class="item">
                       <img src=" http://postgradproblems.com/wp-content/uploads/2013/08/757913ac9efccba3c21197be09ac509c.jpg" alt="ocp">
           <div class="container">
            <div class="carousel-caption">



<a href="https://www.facebook.com/raymond.a.wang" target="_TOP" title="Raymond Array Wang" style="padding:25px;"><img src="https://badge.facebook.com/badge/637420882.4577.1439698060.png"/></a>
<a href="http://www.linkedin.com/in/arrays"><img src="http://www.linkedin.com/img/webpromo/btn_myprofile_160x33.png" width="160" height="33" border="0" alt="View Raymond Wang's profile on LinkedIn"></a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="/assets/pics/software.jpg" alt="family" height="140" width="140">
          <h2>Software Engineering</h2>
          <p>Any sufficiently advanced technology is indistinguishable from magic. <span class="text-muted">- Arthur C. Clarke</span></p>
          <p><a class="btn btn-default" href="/engineering/tech.php">See more about my interests in the tech world &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/assets/pics/ucla.jpg" alt="ucla" height="140" width="140">
          <h2>Photo Album</h2>
          <p>Highlights from my more recent journeys.  Yes, I have friends. </p>
          <p><a class="btn btn-default" href="/photo.php">See more about my life &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="/assets/pics/chess.jpg" alt="chess" height="140" width="140">
          <h2>Interests</h2>
          <p>Avid chess player, reader, and hiker.  I also enjoy biking, swimming, and politics.</p>
          <p><a class="btn btn-default" href="/hobbies/hobbies.php">See more about my hobbies &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">So what kind of things am I interested in? <span class="text-muted">Everything!</span></h2>
          <p class="lead">I love staying fit and active.   Eating healthy and exercising regularly is important to me. This is from my Costa Rica trip!</p>
        </div>
        <div class="col-md-5">    
          <img src="/assets/pics/Diving.jpg" alt="Diving" height="375" width="500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img src="/assets/pics/family.jpg" alt="family" height="330" width="440">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Family. <span class="text-muted">My mom and sister.</span></h2>
          <p class="lead">They encourage me, support me, and I hope to have a family as amazing as they are one day.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And volunteer work! <span class="text-muted">UCLA Unicamp</span></h2>
          <p class="lead">I love working with kids and encouraging them to reach for their dreams.  They are the ones that will carry on the mantle when we are gone.</p>
        </div>
        <div class="col-md-5">
          <img src="/assets/pics/volunteer.jpg" alt="family" height="330" width="440">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- Site footer -->
<?php include 'config.php'; ?>
<?php 

$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
$page = "\"index\"";
$query = "SELECT updateTime FROM pageUpdateTimes where page = $page";

$last_update =  mysqli_query($con,$query) or die(mysqli_error($con));;
$row = mysqli_fetch_array($last_update);

print "<footer>";
print " <p class=\"pull-right\"><a href=\"#\">Back to top</a></p>";
print " <p>By Raymond Minjian Wang &middot; Last Updated: $row[0]</a></p>";
print "</footer>";
mysqli_close($con);
?>

    </div><!-- /.container -->

     <!-- Scripts -->
     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
     <script src="/assets/js/holder.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45589092-1', 'comeze.com');
  ga('send', 'pageview');

</script>
   </body>
</html>
		