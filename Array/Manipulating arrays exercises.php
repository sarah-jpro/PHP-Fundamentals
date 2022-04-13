<?php
$me = array(
	'age'	=> 45 , 
	'firstname' 		=> 'Alexandre' ,
	'lastname' 	  		=> 'Plennevaux' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix'),
    //Ajout hobbies
    'hobbies'           => array ('Ballade en nature','Musique','Cinéma')
);
$you =array(
	'age'	=> 57 , 
	'firstname' 		=> 'Martine' ,
	'lastname' 	  		=> 'Jacquard' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Grease', 'Xmen'),
    //Ajout hobbies
    'hobbies'           => array ('Sport','Cuisine','Promenade')
);

$me['you'] = $you;
?>