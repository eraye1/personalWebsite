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
          <h2>Dynamic Programming</h2>
          <p>Learn dynamic programming.  It's a great algo question for interviews and a great skill to have in software engineering.</p>
          <p><a class="btn btn-primary" href="#DynamicProgramming">What it's about. &raquo;</a></p>
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
          <h4 id="Okta" class="featurette-heading">I'll be joining Okta, a cloud identity and access management company in San Fran in January 2013.</h2>
          <p>I'm excited to announce I'll be joining Okta in January 2013 as a Software Engineer in the Integrations and API group.  I'm a little worried because the people there are incredibly smart and I'm worried I won't measure up.  I guess this gives me motivation to bust my butt and work hard.  #IMadeIt</p
      </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="PerformanceTips" class="featurette-heading"> Performance Tips from Ben Kamens @ Khan Academy. <span class="text-muted"> WAR (Write After Read). </span></h2>
          <p><a class="btn btn-primary" href="http://bjk5.com/post/54202245691/the-app-engine-way">Full Article &raquo;</a></p>
          <p>Software performance is one of my favorite topics and it's great to gain insight from one of the top engineers at Khan Academy.  I've definitely seen a lot of the issues he's mentioned in production code (and fixed them).  Issues where you will load an object only to get an id to join or load another object.  I imagine Khan Academy is using their database mostly as a datastore, it makes sense for them to degrade the performance on the writes to increase performance on the reads.  After all, the users primarily see and care about the read times in the education-consumer space they are in.  </p>
          <p>One other interesting point Ben brought up was the idea of precomputing aggregates like sum, count, or avg so you can get even faster speeds on database reads.  I actually did some work on this exact thing this summer.  Precomputing reports can increase loading times significantly although I think, as per Twitter's retweet count implementation-style, for some results, it's good to only get a a rough estimate, because users might not need the exact number.  </p> 
      </div>
      </div>

 <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="Divide&Conquer" class="featurette-heading">Divide&Conquer. <span class="text-muted"> Be like water, young grasshopper. </span></h2>
          <p>Had a friend from MS send me this interesting interview question.</p>
          <p><strong>Question.</strong> Given a structure that is meant to hold water, return the maximum water it can hold.  The structure is given as a 1D array<sup>1</sup> of integers which represent the heights in the structure.  THe water is returned as a 1D array of integers of the same size as the structure, representing the water that can be at every position.</p>
          <p><strong>Strategy.</strong> It took me some time to figure this out, but you can solve this with divide&conquer.  You just figure out that finding local maximums and filling in the water between them is the way you determine the maximum water it can hold.  Then it becomes finding local maxima.</p>
          <p><strong>Solution.</strong> Not 100% sure this works for all edges cases.  I'll revise it when I get a chance later.  This is definitely a cool problem though.</p>
<code>Java<pre>
List<Integer> fill(List<Integer> structure, List<Integer> water, int start, int end) {
  if (abs(start-end) <= 2)
    return water;
  int max = findMax(structure, start, end);
  int rightMax = findMax(structure, max+1, end);
  int leftMax = findMax(structure, start, max-1);
  for (int i = rightMax; i < max ; i++) {
    water[i] = structure[max] - structure[i];
  }
  for (int i = max+1; i < leftMax ; i++) {
    water[i] = structure[max] - structure[i];
  }
  fill(structure, water, start, leftMax-1);  
  fill(structure, water, rightMax+1, end);
  return water;  
}

int findMax(List<Integer> structure, int start, int end) {
  int max = 0;
  int position = start;
  for (int i = start; i < end ; i++) {
    if (structure[i] > max) {
      max = i;
      position = i;
    }
  }
  return position;
}
</pre></code>
          <p>Haven't completely checked this solution over and I likely still need to do some edge case fixing, but there it is!</p>
          <p><sup>1</sup> Just wanted to point out that this problem could be generalized to a 2D array instead.  But then it becomes a very difficult problem.  Finding local maxima no long works as a single maxima can't act as a wall as it can in 1D.  In addition, the walls can be any shape.  Perhaps there is a solution where for each square, we have a set of conditions that show that it is supposed to have water (for example, search around the square until a closed loop of higher height is found, then fill up water up to the minimum of the loop's height.  Then we can repeat this process on every square.)</p>
       </div>
      </div>

 <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="CareerFairInfosession" class="featurette-heading">Tips for a Successful Career Fair / Infosession. <span class="text-muted">Intended Audience: Companies. </span></h2>
          <p>As someone who's been to a good number of career fairs and infosessions, I see a lot of good and a lot of bad. Here's the good.</p>
          <p><strong>Sending Nice People.</strong> It seems obvious, but there's always a couple companies that seem to send people who are rude or just unfriendly.  Candidates aren't just giving you their resume for consideration.  They're also thinking to themselves, "Do I want to spend 8 hours a day for the next five years with you?".</p>
          <p><strong>Short and Sweet.</strong> This is primarily for career fairs, but there is always a long line and lots of companies.  Candidates are there to talk to a bunch of companies.  Rarely does someone go to a career fair just to talk to one company.  Therefore, having really long coding or technical challenges on the spot is a faux pas.  A basic question to establish competency or asking about certain relevant points on the resume is totally fine, but giving candidates a huge worksheet to solve is not.  Rule of thumb is, if it takes more than 10 minutes to solve, you're just annoying the candidates.</p>
          <p><strong>High-level but dive in if needed.</strong> For the more technical infosessions, it's really interesting to listen to the companies that talk about how they're implementing cool new features or tackling issues like internationalization.  But there is definitely a couple infosessions that go overboard and seem more like a Ph.D thesis defense than an infosession.  Be prepared to dive into the details should people ask, but giving a high-level understanding of the problem space and the solution is far more useful and insightful to students than reciting your new paper in Science. It's all about the users and here the users are the people listening to the presentation.</p>
          <p><strong>Bring Food.</strong> Free food is the universal language for infosessions (and I've noticed this happening more often at career fairs as well).  When you bring Chipotle or Corner Bakery for an infosession, prepare for a swarm of students to come, even if your company sells buckets of seawater to camels.</p>
          <p><strong>Have interesting swag.</strong> It's the new revolution in giving out free stuff.  Here's a list of give-mes that every company should have at a career fair or infosession.</p>
          <ul>
            <li>
              Plastic Sunglasses
            </li>
            <li>
              Chart showing your customer growth/lead generation/whatever you can show to show students you have a real business.
            </li>
            <li>
              USB beer openers.
            </li>
            <li>
              Quality T-shirts.
            </li>
          </ul>
          <p><strong>Most Importantly, </strong>make the students feel like you care about them and you put some effort into it.  Companies that seem like they don't care or are overly picky will get the candidates that don't care or are overly picky.</p>
       </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="DynamicProgramming" class="featurette-heading">Dynamic Programming <span class="text-muted"> Linear Programming?  Divide-and-Conquer? Nope, give me good, ole' fashioned DP. </span></h2>
          <p>Dynamic programming is a tool you can use to solve many problems that are simply not solvable otherwise.</p>
          <p><strong>Basic Concepts</strong> So what the heck is this thing?  Well, DP is a fancy term for using an array<sup>1</sup> to store the return values of a function to access later.  These return values would otherwise be computed recursively and we would waste a lot of time working on the same sub-problems. </p>
          <p><strong>Simple Example and Analysis</strong> Let's say you want to write a simple function to find the Fibonacci of a number.  Let's define it like this.  </p>
<code>Java<pre>
int Fibonacci(int input) {
	if (input == 0)
	     return 0;
	else if (input == 1)
	     return 1;
	else {
	     return Fibonacci(input - 1) + Fibonacci(input - 2);
	}
}
</pre></code>

<p><strong>Intuitive Time Complexity:</strong> First, let's use a tree to understand what we are doing.</p>

<ul class="thumbnails" style="list-style-type:none">

           <li class="span12">
             <a class="thumbnail" href="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-ash4/1403590_10151980618150883_369204938_o.jpg">
               <img alt="" src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-ash4/1403590_10151980618150883_369204938_o.jpg">
           <div class="caption">
             <h5>Tree Analysis</h5>
           </div>
             </a>
           </li>          
</ul>

<p>As you can see, You will have many of the same subtrees.  <code>Fibonacci(N-2)</code> is called two times and their subtrees will be identical, so you repeat a lot of work.  This gives us a hint that perhaps we could do this more efficiently. </p>
<p><strong>Calculating Time Complexity: </strong>The overall time efficiency is calculated as follows.</p>
<p>You model the time function to calculate <code>Fibonacci(N)</code> as sum of time to calculate <code>Fibonacci(N-1)</code> plus the time to calculate <code>Fibonacci(N-2)</code> plus the time to add them together (O(1)).</p>
<pre>T(n=1) = O(1)</pre>
<pre>T(n) = T(n-1) + T(n-2) + O(1)</pre>
<p>After solving these any way you choose<sup>2</sup>, you get: O(2<sup>N</sup>) as the upper bound<sup>3</sup></p>
<p><strong>Post-Analysis:</strong> So you're done right?  Wrong.  Exponential solutions are not solvable for any useful value of N.  For example, try solving 2<sup>100</sup>.  If each operation took one second, it would take a trillion times the lifetime of the universe.  Ain't nobody got that kind of patience.  This brute force solution, while simple to code, is unusable with current and foreseeable computational power.</p>

<h4>Dynamic Programming</h5>
<p>Now, let's use dynamic programming to solve this problem.  We see that there are multiple identical subtrees that are computed multiple times.  Let's store those values in an array and just call from that array.  Here's the code:</p>
<code>Java<pre>
int Fibonacci(int input) {
	int[] array = new int[input+1];
        array[0] = 0;
        array[1] = 1;
	for (int i = 2; i < input+1; i++) {
             array[i] = array[i-1] + array[i-2];
        }
  return array[input];
}
</pre></code>
<p><strong>Time Complexity:</strong> Now our time complexity is entirely dependent on the for loop.  We can see that the for loop only iterates N times where N is the value of the input. </p>
<p>Since we do at most 3 constant time tasks (storing and assigning values) per each element in the for loop, we know that the time complexity is O(N).</p>
<p><strong>Conclusion:</strong> Lifetime of the universe to nanoseconds?  Now that's what I call some good algo.  Lastly, if you'd like to learn more, I highly recommend the CRLS algo book.  It's basically the algo "bible".  </p>
<p>Also, for those who might be studying for interviews.  You should learn DP!  1) It will make you a better software engineer.  2) I've gotten asked a DP question in several places, including Google and a couple other places.  This isn't some super abstract subject that no one talks about after the class is over.</p>

<br>

<p><sup>1</sup> usually 1D or 2D, although I suppose there's nothing stopping more dimensions</p>
<p><sup>2</sup> this is called a <a href="http://en.wikipedia.org/wiki/Recurrence_relation">"recurrence relation"</a>.</p>
<p><sup>3</sup> this isn't tight, but let's not go overboard here.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="DeepestTree" class="featurette-heading">Working with Trees! <span class="text-muted">Shoutout to the Stanford football team.  Fear the Tree! </span></h2>
          <p>Trees are one of the tricky interview questions.  They're actually really useful structures to know and use.</p>
          <p>Recursion is often used in tree problems so make sure you brush up on how those functions call each other.</p>

          <p><strong>Question:</strong> Given a binary tree, return its height.</p>
<code>Java<pre>
class Node() {
  Node left;
  Node right;
}

int height(Node head) {
  if (head == null || (head.left == null && head.right == null)) 
    return 0;
  else
    return 1+max(height(head.left), height(head.right));
}
</pre></code>
          <p>Simple problem and trees get way trickier but they're definitely a cool tree structure.</p>
       </div>
      </div>


      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <h4 id="TailRecursion" class="featurette-heading">Tail Recursion <span class="text-muted">Yes, it's black magic. </span></h2>
                   <p>Tail recursion is one of the secret tips that people rarely get taught.  True tail-recursive functions are basically iterative in speed, with the same logical efficiency that recursive solutions tend to. </p>
          <p>Below is an example I took from stackoverflow.  This is a tail-recursive version of the original code.  </p>
          <code>Python<pre>def tailrecsum(x, running_total=0):  
     if x == 0: 
          return running_total  
     else: 
          return tailrecsum(x - 1, running_total + x)</pre></code>
          <p>The key to tail recursion is not having any operators that interact with the return result on each call through the stack.</p>
          <p>This lets the compiler pass along the values as it computes, as opposed to waiting for the entire call stack to hit the bottom before computing the intermediate values.<p>
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
<p>Is there transparency and fairness.  Unpaid internships in software are mostly useless.  Why?  Because if they don't pay you, they won't value you.  You will be given the most mundane tasks simply because if you left, no one would care.  This comes back to transparency and fairness.  Is the startup willing to compensate you fairly for your skills?  There might be some gems here, but the risk of wasting your time is too high. </p>
<p>Do the founders have teeth in the game?  The biggest issue on engineers in college today is the bombardment from business majors that see engineers as either wielders of an unknown magic or glorified mules on their warpath to wealth and social status.  Almost invariably, any startup weekend is infested with business majors who are convinced they are smarter than everyone else, have the next big thing, and just need you to build it.  That being said, there are good startups founded by people from non-technical backgrounds.  But they have some defining traits.  The non-technical cofounders need to have teeth in the game.  Whether it's a full business plan written up and 100K in seed capital from their own pockets or a dedication to understanding the product and learning about technology, the truely good non-technical founders will have them.  There is an easy way to tell.  You can walk into most pitches for tech-related companies from non-technical founders and ask them about the difference between HTML and CSS.  If they can't tell you, you're wasting your time. </p>
<p>Is the industry saturated?  You might have a revolutionary concept or see one, but realize with great disruptive power comes great failures.  It all depends on your risk adversity.  If you are willing to lay down everything for a wild idea, by all means, go for it. </p>
<p>Is the startup in the right stage for you?  Startups range from the 2-man garage bootstrapping variety to the 200-person multimillion dollar revenue variety these days.  While a fresh grad out of school might have the gumption for an 80-hour workweek in bootstrapping a startup, an older software engineer with kids to feed and a family to sustain might not be able to risk it all on a fool's errand.</p>
<p>You knew it was coming and so did I.  Is the startup lean?  But I think this has caveats.  There should be an emphasis on the most important parts of the business.  You might not need a keg in your office, but having top-notch computers and tools in the hands of your engineers should be an obvious investment.</p>
<p>It's an exciting time for startups.  Hopefully this gives people more food for thought.  </p>
        </div>
      </div>
 

      <hr class="featurette-divider">

      <!-- Site footer -->
<?php include '../config.php'; ?>
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
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
				