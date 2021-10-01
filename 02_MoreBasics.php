<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
*{
margin: 0;
padding: 0;
box-sizing: border-box;
}
.container{
 max-width: 80%;
 background-color: rgb(84, 189, 180);
 margin: auto;
 padding: 23px;
}
</style>
<body>
    <div class ="container">
    <h1> Lets learn about PHP</h1>
    
    
<?php
$age = 5;
echo "<b>";
echo "YOUR PARTY STATUS:";
echo "</b>";
if($age>18){
echo "<br>";
echo "You can go to the Party";
}
else{
    echo "<br>";
    echo "You cannot go to the party";}
// Understanding Array below
echo "<br><br><b>Understanding Array</b></br>";
echo "<br>";
$languages = array("Python", "C++", "PHP", "NodeJS");
echo "<br>";
// Bolding my Array Output below
echo "<b>";
echo "Array that is being printed: ".$languages[0];
echo "</b>";
echo "<br>";
// Counting the total number of array
echo "Total element detected in an Array: ".count($languages);
echo "<br>";
//Loops In PHP
echo"<h3> Loops in PHP </h3>";
//While Loop
$a=0;
while ($a <= 10) {
    # code...
    echo "<br> The Value of A is: ";
    echo $a;
    $a++;

}
//Iterating ARRAYS  In PHP with while loop
echo "<br>";
echo "<br>";
echo "<b>Iterating ARRAYS  In PHP with while loop";
echo "</b>";
$a=0;
while ($a < count($languages)) {
    echo "<br> The Value of language is: ";
    echo $languages[$a];
    $a++;

}
//Do-While Loop
echo "<br>";
echo "<br>";
echo "<h3> Do-While Loop </h3>";
$b = 2;
do {
    echo "<br>";
    echo "The Value of B is: "."<b>".$b."</b>"; //By concatenation
    $b++;
} while ($b < 10);
echo "<br>";

//For Loop
echo "<h3>For-Loop Example</h3>";

for ($a=0; $a <=10 ; $a++) { 
    echo "<br>The Value of A from FOR-LOOP is: ";
    echo "<b>".$a."</b>";
}

//For-Each Loop
echo "<h3>ForEach-Loop Example</h3>";
foreach ($languages as $value)
{
echo "<br>The value from foreach loop is ".$value;
}
echo "<br><br><h2>Functions</h2>";
function print5(){

    echo "FIVE is being pring Using PHP FUNTION";
}
// print5(); Commenting cuz making new funtions below

function printing_data($languages) {
echo "<br>";
echo "<b>This funtion is basically Printing arrays below </b>".count($languages); 
} 
printing_data($languages);

echo "<br>";
echo "<h2>More Functions Working below<br></h2>";
$value1 = 5;
$value2 = 16;

function Addition($value1, $value2){
echo "<br>The Total of Variable 1 & Variable 2 is <b>".$value1+$value2;
echo "</b>";
echo "<br>";
}

echo "<br> <b>Calling the funtion below: </b>";
Addition($value1, $value2);
echo "<br>";

function print_number($number){
echo "<br> Your number is: ".$number;
}
print_number(10+10);
print_number($value1+$value2);

// Studying String

echo "<br><br><br>";
echo "<h3>Working & Concatination with String</h3>";
echo "<br>Sentence to get counted letters for= <b>".$str = "This is a Crap!";
echo "</b>";
$length = strlen($str);
echo"<br>The length of the above string is: <b>".$length."</b>. Thank you";

// Counting Words below using a String
echo "<br>";
echo "The no. of Words in this String is: <b>".str_word_count($str)."<br>"."</b>";
echo "Using String Rev funtion: <b>".strrev($str);
echo "</b>";
echo "<br>Using String POS funtion to know the position of word". " Crap "."<b>".strpos($str, "Crap");
echo "</b>";
echo "</br>";
echo "<br><b>Replacing string using str_replace() function</b>";
$str2 = "This is utter Crap";
echo "<br>Sentence to be replaced: <b>This is utter Crap</b> <br>";
echo "<br>The replaced string is: ".str_replace("Crap", "Shit", "<b>".$str2);
echo "</b>";

?> 
</div>
</body>
</html>