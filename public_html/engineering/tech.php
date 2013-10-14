<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Technology section of my interests">
    <meta name="author" content="Raymond Minjian Wang">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <title>Technology and Engineering</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/justified-nav.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <div class="masthead">

        <ul class="nav nav-justified">
          <li class="active"><a href="/engineering/tech.php">Tech</a></li>
          <li><a href="/engineering/projects.php">Projects</a></li>
          <li><a href="/engineering/interests.php">Interests</a></li>
          <li><a href="https://dl.dropboxusercontent.com/u/41434179/WangRaymond_Resume.pdf">Resume</a>
          <li><a href="/engineering/contact.php">Contact Me</a></li>
          <li><a href="/index.php">Home</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Technology and Engineering</h1>
        <p class="lead">All things engineering, technology and software that I'm interested in.</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Women in Tech</h2>
          <p>Brina Lee explores her path from a non-technical background to becoming the first female engineer at Instagram.  Insightful and inspiring on the challenges in switching fields.</p>
          <p><a class="btn btn-primary" href="#BrinaLeeWIT">My Thoughts &raquo;</a></p>
          <p><a class="btn btn-primary" href="http://www.huffingtonpost.com/brina-lee/my-journey-to-becoming-in_b_4030820.html">Full Article &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>NoSQL</h2>
          <p>Non-relational DB are all the rage now, but many people still treat it as a passing fad, soon to be replaced once against by SQL.  However, this article makes some intriguing points about the driving forces behind NoSQL.</p>
          <p><a class="btn btn-primary" href="#NoSQLForces">My Thoughts &raquo;</a></p>
          <p><a class="btn btn-primary" href="http://www.couchbase.com/why-nosql/nosql-database">Full Article &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Startups</h2>
          <p>There has been an explosive amount of growth in the number of startups the past few years.  But has the quality of these startups caught up to their numbers? Let's explore what makes a good startup.</p>
          <p><a class="btn btn-primary" href="#StartupQuality">My Thoughts &raquo;</a></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="BrinaLeeWIT" class="featurette-heading">Switching into the tech field from a non-technical background. <span class="text-muted">Are you doing it for the right reasons?</span></h2>
                   <p>Given my background as a fresh college grad, this is very near and dear to my heart.  Many of my friends struggle when they hit the market postcollege.  They often confide in me their desires to switch to computer science or software engineering.  While this might be fairly straightforward for my friends who already have an engineering background, it's my friends with the liberal arts degrees that struggle.  This is a good time to get into software and a great step forward for career aspirations in a fast-growing field.  
          <p>But it's daunting from the bottom-up.  How do you break into a field that you have virtually no background in?  How do you take the leap of faith to throw yourself into a field you know mostly from The Social Network and The Internship?
          <p>Software engineering is tremendously fun.  It's engineering in it's purist sense.  You design solutions in your mind to solve complicated issues that might not  have a solution.  You worry about fundamentally real problems like can your problem-solving approach scale to a difficult problem.  You use what you know to select the best tools for the job to create powerful tools that, to the uninitiated, look like magic.  Indeed, ask anyone without a computer science background how Google figures out which webpages to return to you, and you will mostly get shrugs.
          <p>It's these types of problems that should drive people towards computer science.  Everyone sees the perks, the money, the social status that you get as a software engineer.  But people don't see the long hours, the difficult subject matter, and the self-doubt that emerges from this sector.  This isn't investment banking, but it's not reading "Green Eggs and Ham" either.  It's long hours in the lab with little human interaction.  It's putting in extra hours when you could slack off.  It's going out there and siezing opportunities by the horns.</p>
          <p> Brina Lee lays out good advice for those trying to break into the tech field.  Fundamentally, you need to learn some programming yourself and keep knocking on doors until an opportunity presents itself.  Then, leverage that opportunity to open new doors.  Finally, you still will need a degree to really have a chance with any except the most avant-garde companies, so go back and get a masters degree in computer science.  But I worry that many are not going into the field for reasons that will let them succeed and be happy.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="NoSQLForces" class="featurette-heading">What is NoSQL?  <span class="text-muted">Can it truly replace SQL and our current DBMS?!</span></h2>
          	<p>NoSQL is a datastore like SQL but it's meant to solve different problems.  </p>
	<p>First some background on NoSQL.  Most experts agree that NoSQL DBS can be broken down into four primary types, Key-value Stores, Column Family Stores, Document Databases, and Graph Databases.  They solve different problems and have different tradeoffs.  For example, if you're storing a document that you want to search via indexing, it might make more sense to use Lucene on top of a relational database or a document database, than a key-value store.  On the other hand, if you need a massively distributed and parallel hash table, key-value stores are far better than the manual sharding and other boiler-plate code work needed for SQL.  </p>
	<p>One focus in NoSQL is horizontal scaling.  The implementers of these various solutions want you to be able to add more machines to your system to solve scaling issues rather than buy an extremely powerful database from Oracle.  This is possible because of the different assurances offered by these databases as opposed to SQL databases.  SQL databases are focused on ACID, a strict set of principles about consistency and other traits that are desirable in a perfect datastore.  NoSQL recognizes the limitations that this places on your datastore and ensures a weaker set of principles called BASE instead.  These weaker guarantees allow for more optimization for real life issues of scaling out your service.</p>
	<p>Couchbase makes some interesting points about the primary powers driving NoSQL adoption.  Architects are finally recognizing that oftentimes their problem space and dataset is not structured or semistructured.  The amount of data that is structured is growing but at a smaller paced compared to the explosion of non-structured data.  This means to get more performant software and hardware, we must drive these datasets towards NoSQL solutions.  As a bonus, they reduce the costs of scalability in hardware and software.  </p>
	<p>Will NoSQL DBMS ever replace SQL?  I think it's doubtful.  There are some sets of data that are highly structured, where the guarantees of a SQL system is very helpful to the developer.  But does NoSQL have a place next to SQL in real-life web applications now?  Most certainly.</p>
        </div>
      </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="StartupQuality" class="featurette-heading">How do you find a good startup? <span class="text-muted">What traits do successful startups have?</span></h2>
          <p>There is an explosion in the number of startups available today.  With this comes a new problem for software engineers.  How do you filter the good ones from the bad?  This affects not just the industry veterans but even students trying to find an internship.</p>
<p>There are a few traits that separate a bad startup from a good one.</p>
<p>Does the executive team have a vision?  Now every CEO will tell you they have a vision, but does the executive team as a whole have a dream you believe in and can see becoming the next great wave in technology?  For Google, it was utilizing high technology to solve the worlds every day problems.  This manifests in it's search engineer, it's acquisitions, and even it's research (self-driving cars).  For Facebook, it was connecting everyone in the world virtually and bringing their social life online.  Every good startup needs to have a clear, huge vision.</p>
<p>Is there transparency and fairness.  Unpaid internships in software are mostly useless.  Why?  Because if they don't pay you, they won't value you.  You will be given the most mundane tasks simply because if you left, no one would care.  This comes back to transparency and fairness.  Is the startup willing to compensate you fairly for your skills?  
<p>Do the founders have teeth in the game?  The biggest issue on engineers in college today is the bombardment from business majors that see engineers as either wielders of an unknown magic or glorified mules on their warpath to wealth and social status.  Almost invariably, any startup weekend or hackathon is infested with business majors who are convinced they are smarter than everyone else, have the next big thing, and just need you to build it.  That being said, there are good startups founded by people from non-technical backgrounds.  But they have some defining traits.  The non-technical cofounders need to have teeth in the game.  Whether it's a full business plan written up and 100K in seed capital from their own pockets or a dedication to understanding the product and learning about technology, the truely good non-technical founders will have them.  There is an easy way to tell.  You can walk into most pitches from non-technical founders and ask them about the difference between HTML and CSS.  If they can't tell you, you're wasting your time.
<p>Is the industry saturated?  An example of this is the cloud storage space now.  DropBox and Google Drive has cornered the consumer market, while Box is carving out it's empire in corporate.  There are other smaller players like SkyDrive or iCloud.  But most of the fundamental problems in this sector have been solved and it's become a competitive market.  If you want to dive into any of the companies in this space that aren't one of the front-runners or at least a big player, it's going to be very difficult to compete.  The main competitors have all the agility of a new startup, with the funding and strength of major venture capitalists or large corporations.  In this kind of field, even perfect execution might not be enough to fight off the advantages in scaling and name brand that the big players already have.  It's just not worth it to risk years of your life here.</p>
<p>Is the startup in the right stage for you?  Startups range from the 2-man garage bootstrapping variety to the 200-person multimillion dollar revenue variety these days.  While a fresh grad out of school might have the gumption for an 80-hour workweek in bootstrapping a startup, an older software engineer with kids to feed and a family to sustain might not be able to risk it all on a fool's errand.</p>
<p>You knew it was coming and so did I.  Is the startup lean?  But I think this has caveats.  There should be an emphasis on the most important parts of the business.  You might not need a keg in your office, but having top-notch computers and tools in the hands of your engineers should be an obvious investment.</p>
<p>It's an exciting time for startups.  Hopefully this gives people more food for thought.  </p>
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
			