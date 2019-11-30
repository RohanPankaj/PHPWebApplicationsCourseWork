<head>
    <title>Rohan Pankaj- Gusssing Game</title>
</head>
<body>
    <h1>Welcom to my Gusssing Game!!!</h1>
    <h3>Try to guess the correct number by adding your guess to the end of the url. For example if you want to guess 50 change the guess value in the url to be guess=50</h3>
    <p>
        <?php
            if (! isset($_GET["guess"])){
                echo("Missing guess parameter");
            }else if (strlen($_GET["guess"] < 1)){
                echo("Your guess is too short");
            }else if (strlen($_GET["guess"] < 100)){
                echo("Your guess is too long");
            }else if (! is_numeric($_GET["guess"])){
                echo("Your guess is not a number");
            }else if ($_GET["guess"] > 82){
                echo("Your guess was too high");
            }else if ($_Get["guess"] < 82){
                echo("Your guess was too low");
            }else{
                echo("Yay you guessed correctly"); #82 is the correct number
            }
        ?>
    </p>
</body>