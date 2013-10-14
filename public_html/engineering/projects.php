<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projects Raymond Wang has been involved in.">
    <meta name="author" content="Raymond Minjian Wang">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <title>Projects</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/justified-nav.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <div class="masthead">

        <ul class="nav nav-justified">
          <li><a href="/engineering/tech.php">Tech</a></li>
          <li class="active"><a href="/engineering/projects.php">Projects</a></li>
          <li><a href="/engineering/interests.php">Interests</a></li>
          <li><a href="https://dl.dropboxusercontent.com/u/41434179/WangRaymond_Resume.pdf">Resume</a>
          <li><a href="/engineering/contact.php">Contact Me</a></li>
          <li><a href="/index.php">Home</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Projects</h1>
        <p class="lead">My hobby projects in electrical engineering and computer science.</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>StickTogether and TrackMyTrip</h2>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
              <span class="sr-only">60% Complete (success)</span>
            </div>
        </div>
        
        <h5>StickTogether (Project Lead): Android application that helps outdoor travelers in groups stay together.</h4>
          <ul>
            <li>Developed business plan & pitch deck.</li>
            <li>Built the backend Java wrapper handling SQLite queries and modifications.</li>
            <li>Built UI and alert systems.  </li>
          </ul>
          <p><a class="btn btn-primary" href="https://github.com/eraye1/stickTogether"> See Code! <span class="glyphicon glyphicon-star"></span></a></p>

         <h5>TrackMyTrip (Dev):  A website integrated with StickTogether to find friends who got lost hiking or camping.</h4>
           <ul>
             <li>Front-end via HTML/CSS and Twitter Bootstrap. </li>
             <li>Back-end via MySQLite database management and integration. </li>
           </ul>
           <p><a class="btn btn-primary" href="https://github.com/eraye1/TrackMyTrip">See Code! <span class="glyphicon glyphicon-star"></span></a></p>
          <p><a class="btn btn-success" href="#StickTogetherAndTrackMyTrip">More Details!</a></p>
         </div>

        
        <div class="col-lg-4">
          <h2>Embedded Systems and Sensors</h2>
            <div class="progress">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
              <span class="sr-only">20% Complete (danger)</span>
            </div>
        </div>
        
        <h5>Embedded Systems</h4>
          <ul>
            <li>Xilinix Programming</li>
            <li>FPGA</li>
            <li>C programming</li>
          </ul>
        <h5>Sensors</h4>
          <ul>
            <li>Accelerometer</li>
            <li>Gyroscopes</li>
          </ul>
          <p><a class="btn btn-success" href="#CS152B">More Details!</a></p>
         </div>

        <div class="col-lg-4">
          <h2>Politech and leveraging technology in politics</h2>
            <div class="progress">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
              <span class="sr-only">10% Complete (danger)</span>
            </div>
        </div>
        
        <h5>Working with APIs</h4>
          <ul>
            <li>JSON</li>
            <li>AJAX calls</li>
          </ul>
        <h5>Mobile Dev</h4>
          <ul>
            <li>Front-end</li>
            <li>Threading</li>
            <li>Battery Management</li>
          </ul>
          <p><a class="btn btn-success" href="#Politech">More Details!</a></p>
         </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="StickTogetherAndTrackMyTrip" class="featurette-heading">Getting separated from others.  Not America's favorite pastime.</h2>
          <p>Taking trips or traveling with other people is one of the defining features of modern life.  Sadly, there hasn't been a push to really eliminate one of the biggest issues in group traveling: getting lost.  Getting separated from your friends or family is annoying at best and traumatic at worst.</p
          <p>StickTogether and TrackMyTrip seek to mitigate these problems.  StickTogether is a BlueTooth-based scanner that will detect when others leave a 10 meter radius and alert you when others are getting separated from you.  TrackMyTrip allows the user to periodically update their location online so when and if they get lost, others can find their last known location.</p>
          <p><a class="btn btn-success" href="https://dl.dropboxusercontent.com/u/41434179/Final%20Presentation.pptx">Pitch <span class="glyphicon glyphicon-download"></span></a></p>
          <p><a class="btn btn-success" href="https://dl.dropboxusercontent.com/u/41434179/StickTogether%20Business%20Plan%20-%20Draft.doc">Plan <span class="glyphicon glyphicon-download"></span></a></p>        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="CS152B" class="featurette-heading">Embedded Systems and Sensors</h2>
	<p>I'm taking CS152B this quarter, which is focused on interfacing sensors, actuators, and hardware with software to make POCs.</p> 	
        <p>Still learning the tools, so this is a work in progress. </>
        </div>
      </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="Politech" class="featurette-heading">The only way to have a functional political system is to have an educated population. </h2>
          <p>There has been a lot of press about how President Obama's tech setup allowed him to more effectively reach out to his supporters.  Given that politics is not terribly popular in tech circles, there is room here for innovation.</p>
          <p>The idea of Politech is to create a mobile app that can let citizens directly and easily identify their representatives, get updated on key bills and votes, and donate to causes they support.</p>
          <p>Bits of pieces of functionality (like searching for bills, finding representatives via ZIP code) have already been built, so API integrations will be key.  Stay tuned!
        </div>
      </div>
       <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="Personal Website Todo" class="featurette-heading">Improvements to this website I have yet to do.</h2>
          <ul>
            <li>Centralized datasource for last-updated-time on each page.  Thus, single update propagates to all pages.</li>
            <li>More privacy protections for contact-me information.  Spam prevention.</li>
            <li>Implementing MixPanel or GA to track user interaction.</li>
            <li>Find Me in contact me replaced by an embedded Google Maps and a pin.</li>
            <li>Embed powerpoint slides and documents in Projects page.</li>
            <li>Enable website for mobile.</li>
            <li>Finish writing the hobbies and education pages.</li>
            <li>Cron jobs that test features/check uptime.</li>
          </ul>        
        </div>
      </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="Personal Website Done" class="featurette-heading">Cool things to this website I've already done.</h2>
          <ul>
            <li>Clean UI via Twitter Bootstrap</li>
            <li>Ability to download files and view my resume via Dropbox</li>
            <li>Interactive interests graph via arbor.js</li>
            <li>Full hosting via 000webhost</li>
            <li>Directing robots away from my contact page for privacy protection via metatags.</li>
          </ul>        
        </div>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>By Raymond Minjian Wang</p> <!--I want to store the last modified date in the database and query it out each time so we establish consistency across pages-->
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
			