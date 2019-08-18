<?php
$sender_name = $_GET["sender"];
$recipient_name = $_GET["recipient"];
$partner_name = $_GET["partner"];
$pet_name = $_GET["pet"];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Greetings!</title>
</head>

<body>
    <h1>Greetings From Afar</h1>
    <p>Dear <?php echo $recipient_name; ?>,</p>
    <p>
        How are you? How are <?php echo $partner_name; ?> and <?php echo $pet_name; ?>? I hope that you are having a nice weekend. I'm vacationing in
        the mountains of Tibet while I learn programming!
    </p>
    <p>
        <?php echo $recipient_name; ?>, you would not believe how cold it is here. I should have gone to
        Hawaii instead. But I like programming a lot, so I've got that going for
        me.
    </p>
    <p>Looking forward to seeing you soon. I'll bring you back a souvenir.</p>
    <p>Cheers,</p>
    <p><?php echo $sender_name; ?></p>
</body>

</html>