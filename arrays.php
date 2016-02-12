<?php


$monster = array(
    'health' => 10,
    'attack' => 15,
    'defense' => 25
);

echo $monster['health'] . '<br/>';
echo $monster['attack'] . '<br/>';
echo $monster['defense'] . '<br/>';


$hero_weapons = array(
    'm16',
    'grenade',
    'knife'
);

var_dump($hero_weapons);

for ($x = 0; $x < count($hero_weapons); $x++) {
    echo 'x is ' . $x . '<br/>';
    echo "Hero has a " . $hero_weapons[$x] . '<br/>';
}

$found = false;

for ($x = 0; $x < count($hero_weapons); $x++) {
   if($hero_weapons[$x] == 'm16') {
       $found = true;
   }
}

if($found == true){
    echo "Hero has an m16";
}
?>