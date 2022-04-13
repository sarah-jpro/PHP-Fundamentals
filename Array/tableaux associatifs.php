<?php
$person[0] = '02/2198445';
$person[1] = 'Cantersteen 10';
$person[2] = 'Brussels';

// compare this
echo $person[1];
// with this
//echo $person['street'];

?>
<h2>Coding an Associative Array</h2>
<?php
$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );
    echo $user['lastname'];
?>
<h2>Describe yourself using an associative array</h2>
<?php
$me = array(
    'firstname' => 'Sarah',
    'age' => '39ans',
    'football' => false );   

echo '<pre>';
print_r($me);
echo '</pre>';
?>