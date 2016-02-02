<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include '_head.php'; ?>
    </head>
    <body class="fun">

        <?php include '_banner.php'; ?>

        <?php include '_nav.php'; ?>

        <div class="main">
            <section class="fun-section">
                <h2>Guessing Game</h2>
                <div class="fun-container">
                    <?php include '_guessing-game.php'; ?>
                </div>
                <!-- <a href="#">Fork on GitHub</a> -->
                <a class="fun-external-link" href="http://codepen.io/nicode/pen/rxvwJL" target="_blank"><i class="fa fa-codepen"></i>&nbsp;View on CodePen</a>
            </section>
            <section class="fun-section">
                <h2>Tic Tac Toe</h2>
                <div class="fun-container">
                    <?php include '_tic-tac-toe.php'; ?>
                </div>
                <a class="fun-external-link" href="http://codepen.io/nicode/pen/EPpmZp" target="_blank"><i class="fa fa-codepen"></i>&nbsp;View on CodePen</a>
            </section>
            <!--<section class="fun-section">
                <div class="fun-container">
                </div>
                <a href="#">Fork on GitHub</a>
                <a class="fun-external-link" href="#">View on CodePen</a>
            </section> -->

        </div> <!-- close .main -->
        <?php include '_footer.php'; ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.js"></script>
        <script src="js/guessing.js"></script>
        <script src="js/tic-tac-toe.js"></script>
    </body>
</html>
