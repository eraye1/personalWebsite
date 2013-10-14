<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Raymond Wang's interest in chess">
    <meta name="author" content="Raymond Minjian Wang">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <title>Hobbies</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/justified-nav.css" rel="stylesheet">
    <link href="/assets/css/chess.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript">
/* Set Count */

$(document).ready(function() {
	
	/* Get board dimensions */
	var board = $('#chess_board');
	board = {
		width : board.width(),
		height : board.height()
	}
	
	/* Make pieces draggable */
	$('#chess_board a').live('mousedown', function() {
		alert("derp");
		var object = $(this);
		var class_array = $(this).attr('class').split(' ');
		
		element(object,class_array);
		
		return false;
		
	}).draggable({
		containment: [0,0,board.width,board.height],
		grid: [80, 80],
		zIndex: 1000
	}).each(function(i, item){
	
		var piece = $(item).attr('class').split(' ');
		var start_cell = $(item).parent().attr('id').split('');
		
		init_game(piece, start_cell);
	
	});
});



</script>

  </head>

  <body>
 <div class="container">

      <div class="masthead">

        <ul class="nav nav-justified">
          <li><a href="/hobbies/hobbies.php">Hobbies</a></li>
          <li class="active"><a href="/hobbies/chess.php">Chess</a></li>
          <li><a href="/hobbies/volunteer.php">Volunteer</a></li>
          <li><a href="/hobbies/fitness.php">Fitness</a></li>
          <li><a href="/index.php">Home</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Chess</h1>
        <p class="lead">That game that everyone can play, but no one can play well.</p>
      </div>


<table id="chess_board" cellpadding="0" cellspacing="0"  align="center">
	<tr>
		<td id="A8"><a class="chess" href="#" class="rook black">&#9820;</a></td>
		<td id="B8"><a class="chess" href="#" class="night black">&#9822;</a></td>
		<td id="C8"><a class="chess" href="#" class="bishop black">&#9821;</a></td>
		<td id="D8"><a class="chess" href="#" class="king black">&#9819;</a></td>
		<td id="E8"><a class="chess" href="#" class="queen black">&#9818;</a></td>
		<td id="F8"><a class="chess" href="#" class="bishop black">&#9821;</a></td>
		<td id="G8"><a class="chess" href="#" class="night black">&#9822;</a></td>
		<td id="H8"><a class="chess" href="#" class="rook black">&#9820;</a></td>
	</tr>
	<tr>
		<td id="A7"><a class="chess" href="#" class="pawn black">&#9823;</a></td>
		<td id="B7"><a class="chess" href="#" class="pawn black">&#9823;</a></td>
		<td id="C7"><a class="chess" href="#" class="pawn black">&#9823;</a></td>
		<td id="D7"><a class="chess" href="#" class="pawn black">&#9823;</a></td>
		<td id="E7"><a class="chess" href="#" class="pawn black">&#9823;</a></td>
		<td id="F7"><a class="chess" href="#" class="pawn black">&#9823;</a></td>
		<td id="G7"><a class="chess" href="#" class="pawn black">&#9823;</a></td>
		<td id="H7"><a class="chess" href="#" class="pawn black">&#9823;</a></td>
	</tr>
	<tr>
		<td id="A6"></td>
		<td id="B6"></td>
		<td id="C6"></td>
		<td id="D6"></td>
		<td id="E6"></td>
		<td id="F6"></td>
		<td id="G6"></td>
		<td id="H6"></td>
	</tr>
	<tr>
		<td id="A5"></td>
		<td id="B5"></td>
		<td id="C5"></td>
		<td id="D5"></td>
		<td id="E5"></td>
		<td id="F5"></td>
		<td id="G5"></td>
		<td id="H5"></td>
	</tr>
	<tr>
		<td id="A4"></td>
		<td id="B4"></td>
		<td id="C4"></td>
		<td id="D4"></td>
		<td id="E4"></td>
		<td id="F4"></td>
		<td id="G4"></td>
		<td id="H4"></td>
	</tr>
	<tr>
		<td id="A3"></td>
		<td id="B3"></td>
		<td id="C3"></td>
		<td id="D3"></td>
		<td id="E3"></td>
		<td id="F3"></td>
		<td id="G3"></td>
		<td id="H3"></td>
	</tr>
	<tr>
		<td id="A2"><a class="chess" href="#" class="pawn white">&#9817;</a></td>
		<td id="B2"><a class="chess" href="#" class="pawn white">&#9817;</a></td>
		<td id="C2"><a class="chess" href="#" class="pawn white">&#9817;</a></td>
		<td id="D2"><a class="chess" href="#" class="pawn white">&#9817;</a></td>
		<td id="E2"><a class="chess" href="#" class="pawn white">&#9817;</a></td>
		<td id="F2"><a class="chess" href="#" class="pawn white">&#9817;</a></td>
		<td id="G2"><a class="chess" href="#" class="pawn white">&#9817;</a></td>
		<td id="H2"><a class="chess" href="#" class="pawn white">&#9817;</a></td>
	</tr>
	<tr>
		<td id="A1"><a class="chess" href="#" class="rook white">&#9814;</a></td>
		<td id="B1"><a class="chess"href="#" class="night white">&#9816;</a></td>
		<td id="C1"><a class="chess" href="#" class="bishop white">&#9815;</a></td>
		<td id="D1"><a class="chess" href="#" class="king white">&#9813;</a></td>
		<td id="E1"><a class="chess" href="#" class="wife white">&#9812;</a></td>
		<td id="F1"><a class="chess" href="#" class="bishop white">&#9815;</a></td>
		<td id="G1"><a class="chess" href="#" class="night white">&#9816;</a></td>
		<td id="H1"><a class="chess" href="#" class="rook white">&#9814;</a></td>
	</tr>
</table>

      <!-- Site footer -->
      <div class="footer">
        <p>By Raymond Minjian Wang</p> <!--I want to store the last modified date in the database and query it out each time so we establish consistency across pages-->
      </div>

    </div> <!-- /container -->



  </body>
</html>
			