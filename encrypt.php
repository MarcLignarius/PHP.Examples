<?php 
    $message_to_encode = $_GET["message"];
    $new_string = encode($message_to_encode);

    function encode($input_phrase)
    {
        $encoded_phrase = strtoupper(strrev($input_phrase));
        return $encoded_phrase;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Encrypt a Message</title>
</head>
<body>
    <div class="container">
        <h1>Message encrypted!</h1>
        <h2>Here you go: <?php echo $new_string ?></h2>
    </div>
</body>
</html>