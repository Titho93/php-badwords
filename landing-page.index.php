<?php

var_dump($_GET);
$text = $_GET['text'];

$explode_string = explode(' ', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    
<h2> text: <?php echo $text ?> <br>
 text characters: <?php echo strlen($text) ?></h2>

</body>
</html>