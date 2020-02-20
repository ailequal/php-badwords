<?php
	// get the word from the url
	$word_bad = $_GET['word'];
	// normal paragraph
	$paragraph = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates adipisci necessitatibus fuga, dolore modi, qui porro beatae ex, minima cupiditate aspernatur praesentium nobis ipsa quas reprehenderit perferendis eveniet rem. Provident.';
	$paragraph_length = strlen($paragraph);
	// fixed paragraph
	$paragraph_fixed = str_replace($word_bad, '***' , $paragraph);
	$paragraph_fixed_length = strlen($paragraph_fixed);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php-badwords</title>
</head>
<body>
	<h1>php-badwords</h1>
	<p><?php echo $paragraph ?></p>
	<p>The paragraph length is: <?php echo $paragraph_length ?></p>
	<p><?php echo $paragraph_fixed ?></p>
	<p>The paragraph_fixed length is: <?php echo $paragraph_fixed_length ?></p>
</body>
</html>