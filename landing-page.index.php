<?php

$text = $_GET['text'];
$word = $_GET['word'];

$explode_string = explode(' ', $text);
$string_replace = str_replace($word, '***', $text)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    
<h4> Text Sent: <?php echo $text ?> <br>
 Text: <?php echo strlen($text) ?> characters
</h4>

<h3>Selected Word: <?php echo $word ?></h3>

<h2>Final Text: <?php echo $string_replace ?></h2>

</body>
</html>