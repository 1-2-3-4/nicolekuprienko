$( document ).ready(function() {
	//declare global variables
	var userNumber = '';
	// var userReply = '';
	var userWon = false;
	var textIsYellow = true;
	var computerNumber;
	var randomEmoji;
	var emojis = ['(و˃ᴗ˂)و', '＼（＾○＾）人（＾○＾）／', '(✿ ♥‿♥)', '\\(^-^)/', '٩( ´◡` )۶', '(つ◕౪◕)つ━☆ﾟ.*･｡ﾟ', '♪ヽ( ⌒o⌒)/', '(~˘▾˘)~'];
	var doesNotCompute = ['Does not compute へ[ •́‸ •̀ ]ʋ', 'I only understand numbers (◕︿◕✿)', 'lol wut (・_・ヾ', 'y u no write numbers?! (ლಠ益ಠ)ლ', '(╯°□°）╯︵ ┻━┻', '(◡ ﹏ ◡)', 'ಠ_ಠ'];
	var sadface = 0;
	//initate game!
	playGame();

	function playGame() {
		// pick random number and initiate prompt
		initiateGuessing();
		
		// user picks a number
		$('#userGuess').keydown(function(e){
			// submit on enter
			if (e.keyCode === 13) {
				// user num = input
				userNumber = $('#userGuess').val();
				// print user num in html
				printUserReply(userNumber);
				// clear input 
				$('#userGuess').val('');
				// check if usernum = winner
				checkMyNum(userNumber);
				// scroll to bottom of chatbox
				scrollDown();
				//if player won, play again
				playAgain(userWon);
			}
		});
	}	

	function checkMyNum(guessNum) {
		var ifNumber = $.isNumeric(userNumber);
		if (ifNumber === false) {
			printComputerReply(doesNotCompute[sadface], textIsYellow);
			scrollDown();
			sadface++;
			if (sadface === doesNotCompute.length) {
				sadface = 0;
			}
			userWon = false;
			return;
		}
		else {
			if (computerNumber < userNumber) {
				printComputerReply('Too high! Guess again', textIsYellow);
				return userWon = false;
			}
			else if (computerNumber > userNumber){
				printComputerReply('Too low! Guess again', textIsYellow);
				return userWon = false;
			}
			else {
				// pick random emoji for the you win msg
				randomEmoji = randomEmojis();
				// print winning msg
				printComputerReply('You win! ' + randomEmoji, textIsYellow);
				printComputerReply('Let\'s play again!', textIsYellow);
				return userWon = true;
			}
		}	
	}

	function playAgain(userWon) {
		if (userWon) {
			//set new bg color for computer
			textIsYellow = !textIsYellow;
			//wait a minute before initiating new game
			setTimeout(initiateGuessing, 1350);
			return textIsYellow;
		}
	}

	function randomNum() {
		return Math.ceil(Math.random()*100);
	}

	function randomEmojis() {
		return emojis[Math.floor(Math.random()*emojis.length)];
	}

	function initiateGuessing() {
		// computer picks a number from 1-100
		computerNumber = randomNum();	
		// print in console for hacks
		console.log('Guessing game hacks: ' + computerNumber);
		// print initiate prompt
		printComputerReply('I\'m thinking of a number between 1 &amp; 100', textIsYellow);
		// focus on guess field - hide on portfolio site
		// $('#userGuess').focus();
		scrollDown();
		return computerNumber;
	}

	function printComputerReply(computerReply, textIsYellow) {
		if (textIsYellow) {
			$('#guessing-inner').append('<div class="computerTxt-container"><i class="fa fa-terminal"></i><span class="computerTxt">' + computerReply + '</span></div>');
		}
		else {
			$('#guessing-inner').append('<div class="computerTxt-container"><i class="fa fa-terminal"></i><span class="computerTxt new-color">' + computerReply + '</span></div>');
		}
		
	}

	function printUserReply(text) {
		$('#guessing-inner').append('<div class="userTxt-container"><span class="userTxt">' + text + '</span><i class="fa fa-user"></i></div>');
	}

	function scrollDown() {
		$('#guessing-text').scrollTo($('#guessing-text')[0].scrollHeight, 350);
	}

});

/*

(و˃ᴗ˂)و

(╯°□°）╯︵ ┻━┻

ʕ·ᴥ·ʔ

＼（＾○＾）人（＾○＾）／

ಠಿ ˑ̫ ಠಿ

＼(^ω^＼)

ヘ(^0^)ヘ

(~˘▾˘)~

┗(＾0＾)┓

(つ◕౪◕)つ━☆ﾟ.*･｡ﾟ

♪ヽ( ⌒o⌒)/

٩( ´◡` )۶

(◡ ﹏ ◡)

(◕ ﹏ ◕)

(╥﹏╥)

(Ͼ˳Ͽ)

ಠ_ಠ

へ[ •́‸ •̀ ]ʋ

(◕︿◕✿)

┏༼ ◉ ╭╮ ◉༽┓ 

(⌯˃̶᷄ ﹏ ˂̶᷄⌯)

(ლಠ益ಠ)ლ

(・_・ヾ

*/


