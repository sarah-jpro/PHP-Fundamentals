<?php
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
$countries[] = 'England';

//echo $countries[2];
/*echo '<pre>';
print_r($countries);
echo '</pre>';*/
var_dump($countries);
?>

<h2>Create an array representing your family members</h2>
<?php
$Family = ['Sarah', 'Spike','Dexter','Ezio','Néo'];


//Display its content using the print_r function
print_r ($Family);



//Create an array describing your favourite recipes
$recipe = ['Pizza', 'Pâtes aux Scampis', 'Poivrons Farcis'];

//Display its content using the print_r
print_r ($recipe);

//Create an array listing your favourite films

$film =['Matrix', 'La ligne verte', 'E.T', 'Paul','Rencontre du 3 iéme type'];
//Display only the one film you like best using its index

echo $film [4];

?>
<?php
$person['function'] = 'Junior Web Developer';
//echo $person['function'];
// returns 'Junior Web Developer'

$person['function'] = 'Junior Web Developer';
$person['function'] = 'Senior Web Developer';
echo $person['function'];
// returns 'Senior Web Developer'
?>
