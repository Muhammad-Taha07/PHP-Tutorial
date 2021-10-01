<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    This is my first php website yo
<?php
    
    echo" Hello world and this is printed using PHP";
    //Secret Algorith This is a comment
$variable1 = 5;
$variable2 = 2;

echo $variable1;
echo $variable2;
echo $variable1 + $variable2;
echo "<br>"; echo "<br>"; echo "<br>";
// Operators in PHP
echo "<b> Operators in PHP </b>";
echo "<br>";
echo "<br>";
// Arithmetic Operators
/* Arithmetic Operator usually consist of all mathematic signs*/
echo "<b>Arithmetic Operators</b>";
echo "<br>";
echo "The value of Variable1 + Variable2 is ";
echo $variable1 + $variable2;
echo "<br>";

echo "The value of Variable1 - Variable2is: ";
echo $variable1 - $variable2;
echo "<br>";

echo "The value of variable 1 X Variable 2 is "; echo $variable1 * $variable2;
echo "<br>";
echo "<br>";
echo "<br>";

// Assignment Operators
/* In Assignment Operators We can use 
+=, -=, *=, /= */
echo "<b>Assignment Operators </b>";
echo "<br>";
$newVar = $variable1;
echo "The value of new variable is ";
echo $newVar;
echo "<br>";
$newVar2 = $variable1;
echo "The New Value of new Variable is ";
echo $newVar2 += 10;
echo "<br>";
// Comparison Operators


echo "<h3> Comparison Operators</h3>";
echo "The value of 1==4 is ";
echo "- "; echo var_dump(1==4);
echo "<br>";

echo "The value of 1!==4 is ";
echo "- "; echo var_dump(1!==4);
echo "<br>";
echo "The value of 1>=4 is ";
echo "- "; echo var_dump(1>=4);
echo "<br>";
echo "The value of 1<=4 is ";
echo "- "; echo var_dump(1<=4);
echo "<br>";
// Increment/Decrement Operators
echo "<h3>Increment/Decrement Operators </h3>";
/* Consist of increment and decrement in values functions */
echo "Printing Incrementation"; echo "<br>";
// echo $variable1++;
// echo $variable1--;
// echo ++$variable1;
echo "The value of Variable 1 is: "; echo --$variable1;
echo "<br>";
echo $variable1;
echo "<br>";

// Logical Operators
/* and (&&), Or (||), xor, not = !. */
?>
<?php
// Data Types in phP

echo "<h3> Data Types in PHP</h3>";


?>
    </div>
</body>
</html>

