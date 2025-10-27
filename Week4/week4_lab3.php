<?php 

$a = 100;
$b = "100";

if ($a == $b){
    echo "Equality (==) TRUE - same value, different types.<br>";

} else {
    echo "Equality (==): FALSE.<br>";
};

// change cobdition to see difference
$c = "123123";

if ($a == $c){
    echo "Equality (==) TRUE - differnt values<br>";
}
else {
    echo "Equality (==) False - differnt values<br>";
};

?>