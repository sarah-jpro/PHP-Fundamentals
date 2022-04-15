<h2>Capitalizes the first letter</h2>
<p>Veuillez entrer un mot :</p>
<form action="" method="post">
    <input type="text" name="word">
    <input type="submit">
</form>  
<?php
$word = isset($_POST['word']) ? $_POST['word'] : NULL;
$tri_upper = "spike ";
$tri_upper1 = "la maison sur la route est rouge et bleue";

echo ucwords($tri_upper);
echo ucwords($tri_upper1);
echo "<br>";
function captilazeWords($x) {
    return mb_convert_case($x, MB_CASE_TITLE);
}
echo captilazeWords($word);
?>

<h2>Display the current year</h2>

<?php
$Year = date("Y");
echo "The current year is $Year.";
echo "\n";
?>
<h2>Display the date, time, minutes and seconds</h2>

<?php
echo date("d-m-Y h:i:sa");
?>
<h2>"Sum" function</h2>
<p>Please enter two numbers :</p>
<form action="" method="post">
    <input type="text" name="number1">
    <input type="text" name="number2">
    <input type="submit">
</form>

<?php 
$nbr1 = isset($_POST['number1']) ? $_POST['number1'] : NULL;
$nbr2 = isset($_POST['number2']) ? $_POST['number2'] : NULL;
$error = "<p> Error: argument is the not a number. </p>";

function sum( $x,  $y) {
    return ($x == is_int($x) && $y == is_int($y)) ? $x + $y : $error ;
}

echo "La somme des deux nombres vaut : " . sum($nbr1, $nbr2);
?>

