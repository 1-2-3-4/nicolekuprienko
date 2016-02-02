/* written using jQuery 2.0.1 as another external js source */

$(document).ready(function() {
	//click event handler to keep track of whose turn it is, changes h2 text to match
	
	var player = 0;
	var tile = "X";

	$("div.square").click(function playerTracker() {
		if (player == 0) {
			player++;
			$("h2").html("Player Two's Turn");
			$("h2").css("color", "#ff99cc");
			tile = "X";
		}

		else {
			player = player - 1;
			$("h2").html("Player One's Turn");
			$("h2").css("color", "#9999ff");
			tile = "O";
		}

		var span_id = "span#" + $(this).find("span").attr('id'); //find span in the div class from first function ("div_square")
		var displayValue =  $(span_id).css('display');
		
		if (displayValue == "none") {
			$(span_id).html(tile);
			$(span_id).css("display", "block");
		}
		//if someone clicks an already clicked square, put in code to pop up an error and not advance player tracker

		//this code checks to see if someone has won the game
		if (playerWinner(tile) == true) {
			$("div#winner_annoucement").css("display", "block");
			if (tile == "X") {
				$("h2").html("Player One Wins!");
				$("h2").css("color", "#9999ff");
			}
			else {
				$("h2").html("Player Two Wins!");
				$("h2").css("color", "#ff99cc");
			}
		}

		else if ($("span#span1").css('display') == "block" && $("span#span2").css('display') == "block" && $("span#span3").css('display') == "block" && $("span#span4").css('display') == "block" && $("span#span5").css('display') == "block" && $("span#span8").css('display') == "block" && $("span#span6").css('display') == "block" && $("span#span9").css('display') == "block" && $("span#span7").css('display') == "block" ) {
			$("div#winner_annoucement").css("display", "block");
			$("h2").html("Stalemate! Refresh to Play Again");
			$("h2").css("color", "black");
		}

		else {

		}

	});
	
	//this function highlights available squares when they are moused over
	$("div.square").mouseover(function highlightTiles() {
		var span_id = "span#" + $(this).find("span").attr('id'); //find span in the div class from first function ("div_square")
		var displayValue =  $(span_id).css('display');
		var div_id = "div#" + $(this).attr('id');

		if (displayValue == "none") {
			$(div_id).css("background-color", "brown");
			$(div_id).css("opacity", "0.4");
		}

	});

	//this function removes highlighting on mouse out
	$("div.square").mouseout(function highlightTiles() {
		var div_id = "div#" + $(this).attr('id');
		$(div_id).css("background-color", "beige");
		$(div_id).css("opacity", "1");
	});

	//this function determines who is the winner and displays the winner/loser text

	function playerWinner(tile) {
		//check for first row horizontal win
		if ($("span#span1").html() == tile && $("span#span2").html() == tile && $("span#span3").html() == tile) {
			return true
		}
		//check for second row horizontal win
		else if ($("span#span4").html() == tile && $("span#span5").html() == tile && $("span#span6").html() == tile) {
			return true
		}
		//check for third row horizontal win
		else if ($("span#span7").html() == tile && $("span#span8").html() == tile && $("span#span9").html() == tile) {
			return true
		}
		//check for first horizontal win
		else if ($("span#span1").html() == tile && $("span#span4").html() == tile && $("span#span7").html() == tile) {
			return true
		}
		//check for second horizontal win
		else if ($("span#span2").html() == tile && $("span#span5").html() == tile && $("span#span8").html() == tile) {
			return true
		}
		//check for third horizontal win
		else if ($("span#span3").html() == tile && $("span#span6").html() == tile && $("span#span9").html() == tile) {
			return true
		}
		//check for first diagonal win
		else if ($("span#span1").html() == tile && $("span#span5").html() == tile && $("span#span9").html() == tile) {
			return true
		}
		//check for third horizontal win
		else if ($("span#span3").html() == tile && $("span#span5").html() == tile && $("span#span7").html() == tile) {
			return true
		}
		else {
			return false
		}
	}

});

