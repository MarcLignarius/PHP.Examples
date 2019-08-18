<?php
$bandName = 'Nirvana';
$bandMember1_name = "Kurt";
$bandMember2_name = "Krist";
$bandMember3_name = "Dave";
$bandGenre = "Alternative Rock";
$bandPhoto = "https://www.rollingstone.com/wp-content/uploads/2018/06/rs-nirvana-e9e22e4b-f7d9-4fc7-bd94-23c30084ce94.jpg";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $bandName; ?></title>
    <link href="css/band.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1><?php echo $bandName; ?></h1>
    <img src=<?php echo $bandPhoto; ?>>
    <p><?php echo $bandGenre; ?></p>
    <p>Guitar/Vocals: <?php echo $bandMember1_name; ?></p>
    <p>Bass: <?php echo $bandMember2_name; ?></p>
    <p>Drums/Vocals: <?php echo $bandMember3_name; ?></p>
</body>
</html>