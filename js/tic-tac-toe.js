$(document).ready(function() {
	//declare global variables
	var playerTurn = true;
	var openBoxes;
	var randomBox;
	var allBoxes;
	var playerVictory = 0;
	var computerVictory = 0;
	var someoneWon = false;

	playGame();

	function playGame() {
		$('.open').hover(function() {
			//if player show x
			if (playerTurn) {
				$(this).find('.player').toggleClass('hide');
			}
		});
		
		$('.open').click(function() {
			//if player turn put x and remove 'open' class
			if (playerTurn) {
				$(this).find('.player').addClass('permanent');
				$(this).removeClass('open').addClass('x').unbind();
				//check if won
				var playerWon = checkWin('x', playerWins);

				if(!playerWon) {
					openBoxes = $('.open');
					//pick random open box
					randomBox = openBoxes[Math.floor(Math.random()*openBoxes.length)]
					//show o on that random box, remove 'open' class and binder on box container
					$(randomBox).find('.computer').addClass('permanent');
					$(randomBox).removeClass('open').addClass('o').unbind();
					// check if computer won
					checkWin('o', computerWins);
				}
			}
		});
	}
	
	function computerWins() {
		computerVictory++;
		$('.computer-num-wins').html(computerVictory);
		$('.computer-wins-msg').show();
		$('.computer-wins-msg button').click(function() {
			$('.computer-wins-msg').hide();
			playAgain();
		});
	}

	function playerWins() {
		playerVictory++;
		$('.player-num-wins').html(playerVictory);
		$('.player-wins-msg').show();
		$('.player-wins-msg button').click(function() {
			$('.player-wins-msg').hide();
			playAgain();
		});
	}

	function checkWin(mark, winningFunction) {
		allBoxes = $('.box');
		//check all rows
		for (i = 0; i < 9; i += 3) {
			if ($(allBoxes).eq(i).hasClass(mark) && $(allBoxes).eq(i+1).hasClass(mark) && $(allBoxes).eq(i+2).hasClass(mark)) {
				winningFunction();
				return true;
			}
		}
		//check all columns
		for (i = 0; i < 3; i++) {
			if ($(allBoxes).eq(i).hasClass(mark) && $(allBoxes).eq(i+3).hasClass(mark) && $(allBoxes).eq(i+6).hasClass(mark)) {
				winningFunction();
				return true;
			}
		}
		//check diagonal 
		if (($(allBoxes).eq(0).hasClass(mark) && $(allBoxes).eq(4).hasClass(mark) && $(allBoxes).eq(8).hasClass(mark)) || ($(allBoxes).eq(2).hasClass(mark) && $(allBoxes).eq(4).hasClass(mark) && $(allBoxes).eq(6).hasClass(mark)) ) {
				winningFunction();
				return true;
		}
		//if stalemate play again
		else if ($(allBoxes).length === 0) {
			alert('Stalemate! Play again');
		}
		playerTurn = !playerTurn;
		return false;
	}

	function cleanBoxes() {
		$('.box-wrapper').empty();
		for (i = 0; i < 9; i++) {
			$('.box-wrapper').append('<div class="box open"><span class="player hide">X</span><span class="computer hide">O</span></div>');
		}
	}

	function playAgain() {
		cleanBoxes();
		playerTurn = true;
		playGame();
	}

});

