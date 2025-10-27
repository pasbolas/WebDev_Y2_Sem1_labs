<!DOCTYPE html> 
<html> 
	<head> 
		<title>PHP Test</title> 
	</head> 
	<body> 
		<?php 
        echo '<p>Hello World</p>'; 
        $name = "Akshat Pasbola <br>";
        $name_len = strlen($name);
        echo $name;
        echo $name_len."<br>";
        $text = "I Love PHP<br>";
        $name = "Akshat Pasbola";
        $string = "<h3>My name is ". $name. ", I have to say that ". $text. "</h3>";
        echo $string;

        echo "Number of words in text is ".strlen($name);
        echo "<br>Position of words in text is ".strpos("PH", "PHP");