<?php
$me = array(
	'age'	=> 45 , 
	'firstname' 		=> 'Alexandre' ,
	'lastname' 	  		=> 'Plennevaux' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix'),
    //Ajout hobbies
    'hobbies'           => array ('Ballade en nature','Musique','Cinéma')
);

/*echo '<pre>';
print_r($me);
echo '</pre>';*/

$you =array(
	'age'	=> 57 , 
	'firstname' 		=> 'Martine' ,
	'lastname' 	  		=> 'Jacquard' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Grease', 'Xmen'),
    //Ajout hobbies
    'hobbies'           => array ('Sport','Cuisine','Promenade')
);

$me['you'] = $you;

/*echo '<pre>';
print_r($me);
echo '</pre>';*/
$me['hobbies'][]= 'taxidermy';
$hobbieme = count($me['hobbies']);
/*echo $hobbieme;*/
$hobbieyou = count($you['hobbies']);
$totalhobbie = ($hobbieme + $hobbieyou);
echo $totalhobbie;
/*echo '<pre>';
print_r($me);
echo '</pre>';*/
$me['lastname'] = 'Durand';
echo '<pre>';
print_r($me);
echo '</pre>';
?>
<h2> Create a new array from 2 others</h2>
<?php

$me = array(
	'age'	=> 45 , 
	'firstname' 		=> 'Alexandre' ,
	'lastname' 	  		=> 'Plennevaux' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix'),
    //Ajout hobbies
    'hobbies'           => array ('Ballade en nature','Musique','Cinéma','Cuisine','Lecture')
);

$soulmate = array(
	'age'	=> 57 , 
	'firstname' 		=> 'Martine' ,
	'lastname' 	  		=> 'Jacquard' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Grease', 'Xmen'),
    //Ajout hobbies
    'hobbies'           => array ('Sport','Cuisine','Promenade','Lecture','Couture','Musique','Aquaponey')
);
$possible_hobbies_via_intersection = array_intersect($me ['hobbies'], $soulmate ['hobbies']);
echo print_r ($possible_hobbies_via_intersection );

$possible_hobbies_via_merge = array_merge ($me ['hobbies'], $soulmate ['hobbies']);
echo '<pre>';
print_r ($possible_hobbies_via_merge);
?>
<h2>More array exercises</h2>
<?php
$web_development = array(
	'frontend'	=>  '', 
	'backend' 		=> '' ,
);
echo "<pre>";
$web_development['frontend'] = array('xhtml', 'CSS', 'JavaScript');
$web_development['backend'] = array('Ruby on rails', 'Flash');
$arr_replacement = $web_development['frontend'] = array('HTML', 'CSS', 'JavaScript');
array_replace($web_development['frontend'], $arr_replacement);
unset($web_development['backend'][1]);
print_r($web_development);
?>



