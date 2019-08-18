<?php
$guess = $_GET["user_guess"];
$favorite_number = rand(1, 20);
$message = checkGuess($guess, $favorite_number);

function checkGuess($guessed_number, $winning_number)
{
    if ($guessed_number == $winning_number) {
        return "Congrats! You guessed it!";
    } elseif ($guessed_number < $winning_number) {
        return "Too low! Sorry, you lose!";
    } else {
        return "Too high! Sorry, you lose!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Guess My Number</title>
</head>

<body>
    <!-- This div shows the result, number entered and correct answer -->
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <h3><?php echo "You guessed: " . $guess; ?> </h3>
        <h3><?php echo "The right answer was: " . $favorite_number; ?> </h3>
    </div>
    <!-- This div shows the result, and a try again button -->
    <!-- <div class="container">
        <h1><?php echo $message; ?></h1>
        <form action="guessthenumber-form.html">
            <button class="btn-success">Try again!</button>
        </form>
    </div> -->
</body>

</html>