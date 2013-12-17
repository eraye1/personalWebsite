<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="robots" content="noindex">  <!--Don't index this page because it has my contact information-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Photos">
    <meta name="author" content="Raymond Minjian Wang">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Photo Album</title>
    <style>
    li {list-style: none;}
    h5 {text-align: center;}
    </style>
  </head>

  <body>

    <div class="container">

      <div class="page-header">
        <h1>Photo Album</h1>
        <!--<p class="lead">What would you do if you knew you could not fail?<span class="text-muted"> -Anonymous</span></p> -->
        <blockquote>
          <p>What would you do if you knew you could not fail?</p>
          <small>Anonymous</small>
        </blockquote>
      </div>

      <h3>My time at UCLA</h3>
      <p>My time at UCLA has been amazing.</p>

       <ul class="thumbnails">
<?php
$mysql_host = "mysql17.000webhost.com";
$mysql_database = "a4613277_time";
$mysql_user = "a4613277_time";
$mysql_password = "raymond1";
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
$query = "SELECT * FROM photoLinks ORDER BY timestamp DESC";

$mysqli_result_caption_links =  mysqli_query($con,$query) or die(mysqli_error($con));

while ($row = $mysqli_result_caption_links->fetch_array()) {
   printf ("<li class=\"span12\">");
   printf ("<a class=\"thumbnail\" href=\"%s\">", $row[1]);
   printf ("<img alt=\"\" src=\"%s\">", $row[1]);
   printf ("<div class=\"caption\">");
   printf ("<h5>%s</h5>", $row[0]);
   printf ("</div></a></li>");
}

mysqli_close($con);
?>


<!-- 
<p>old static version.  luckily php got my back </p>

           <li class="span12">
             <a class="thumbnail" href="https://scontent-b-lax.xx.fbcdn.net/hphotos-prn2/v/1373746_10151979466610883_1032757126_n.jpg?oh=508ebfa51c2124bdf9c5e173715b2d35&oe=52713287">
               <img alt="" src="https://scontent-b-lax.xx.fbcdn.net/hphotos-prn2/v/1373746_10151979466610883_1032757126_n.jpg?oh=508ebfa51c2124bdf9c5e173715b2d35&oe=52713287">
           <div class="caption">
             <h5>Wolfgang Puck.</h5>
           </div>
             </a>
           </li>           

           <li class="span12">
             <a class="thumbnail" href="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-ash4/774632_10152420533930258_1669267606_o.jpg">
               <img alt="" src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-ash4/774632_10152420533930258_1669267606_o.jpg">
           <div class="caption">
             <h5>PennApps Hackathon.</h5>
           </div>
             </a>
           </li>           

           <li class="span12">
             <a class="thumbnail" href="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-prn2/1397758_10200898056673839_497850230_o.jpg">
               <img alt="" src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-prn2/1397758_10200898056673839_497850230_o.jpg">
           <div class="caption">
             <h5>UCLA vs Cal 2013 Game.  38-10 Bruins, breaking into the AP Top 10.</h5>
           </div>
             </a>
           </li>           
           
           <li class="span12">
             <a class="thumbnail" href="https://scontent-b-lax.xx.fbcdn.net/hphotos-prn1/603921_10200865211374101_2069131461_n.jpg">
               <img alt="" src="https://scontent-b-lax.xx.fbcdn.net/hphotos-prn1/603921_10200865211374101_2069131461_n.jpg">
           <div class="caption">
             <h5>Lakers Game.</h5>
           </div>
             </a>
           </li>
             <li class="span12">
             <a class="thumbnail" href="https://scontent-a-lax.xx.fbcdn.net/hphotos-frc1/1004631_10201588045689019_1633932063_n.jpg">
               <img alt="" src="https://scontent-a-lax.xx.fbcdn.net/hphotos-frc1/1004631_10201588045689019_1633932063_n.jpg">
           <div class="caption">
             <h5>Volunteering with Byron and Christian.</h5>
           </div>
             </a>
           </li>
             <li class="span12">
             <a class="thumbnail" href="https://scontent-b-lax.xx.fbcdn.net/hphotos-frc3/1380399_10200615375013587_756791186_n.jpg">
               <img alt="" src="https://scontent-b-lax.xx.fbcdn.net/hphotos-frc3/1380399_10200615375013587_756791186_n.jpg">
           <div class="caption">
             <h5>Tailgating!</h5>
           </div>
             </a>
           </li>
             <li class="span12">
             <a class="thumbnail" href="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc1/906134_10151943189255883_28382816_o.jpg">
               <img alt="" src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc1/906134_10151943189255883_28382816_o.jpg">
           <div class="caption">
             <h5>LA County Fair</h5>
           </div>
             </a>
           </li>
             <li class="span12">
             <a class="thumbnail" href="https://scontent-a-sjc.xx.fbcdn.net/hphotos-prn1/564395_10151936938885883_474407332_n.jpg">
               <img alt="" src="https://scontent-a-sjc.xx.fbcdn.net/hphotos-prn1/564395_10151936938885883_474407332_n.jpg">
           <div class="caption">
             <h5>Lunch @ Kerckoff</h5>
           </div>
             </a>
           </li>
             <li class="span12">
             <a class="thumbnail" href="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-frc3/1267246_10151928283715883_1350591211_o.jpg">
               <img alt="" src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-frc3/1267246_10151928283715883_1350591211_o.jpg">
           <div class="caption">
             <h5>Lunch @ Wolfgang Puck with Kalvin</h5>
           </div>
             </a>
           </li>
             <li class="span12">
             <a class="thumbnail" href="https://scontent-a-sjc.xx.fbcdn.net/hphotos-frc1/1006303_10151839107095883_1655701542_n.jpg">
               <img alt="" src="https://scontent-a-sjc.xx.fbcdn.net/hphotos-frc1/1006303_10151839107095883_1655701542_n.jpg">
           <div class="caption">
             <h5>Kickback with Alyssa and Alexa!</h5>
           </div>
             </a>
           </li>
             <li class="span12">
             <a class="thumbnail" href="https://scontent-a-sjc.xx.fbcdn.net/hphotos-ash4/485557_10151675248625883_427811707_n.jpg">
               <img alt="" src="https://scontent-a-sjc.xx.fbcdn.net/hphotos-ash4/485557_10151675248625883_427811707_n.jpg">
           <div class="caption">
             <h5>Vegas with Molly and crew.</h5>
           </div>
             </a>
           </li>
       </ul>

    <hr class="featurette-divider">
-->
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

 </div>

     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </div> <!-- /container -->
  </body>
</html>
			