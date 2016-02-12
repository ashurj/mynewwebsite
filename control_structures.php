<?php

/**
 * IF STATEMENTS
 */
$my_variable = false;

if ($my_variable) {
    echo "My variable is true";
}
else{
    echo "My variable is false";
}

?>
<div>
<?php
$monster_health = 50;

if($monster_health >= 50){
    echo "Monster health is greater than or equal to 50";
}
else{
    echo "Monster health is less than 50";
}

?>
</div>

<div>
<?php
$hero_health = 100;
$hero_name = "Steve";

/**
 * && means AND
 * || means OR
 * == means EQUALS
 * != means NOT EQUALS
 */
if($hero_health >= 100 && $hero_name == "Chad") {
  echo "Hero health is greater than or equal to 100 AND his name is Chad";
}
elseif($hero_health >= 100 && $hero_name != "Chad"){
  echo "Hero health is greater than or equal to 100 BUT his names not Chad";
}
else{
    echo "Monster health is less than or equal to 100";
}

/**
 *  SWITCH STATEMNTS
 */
$monster_type = strtolower("DEATHCLAW");
$monster_base_hp = 10;

switch($monster_type){
    case 'goblin':
         echo "<br/>Our monster is a goblin";
         $monster_base_hp = $monster_base_hp * 10;
        break;
    case 'deathclaw':
        echo "<br/>Our monster is a Deathclaw";
        $monster_base_hp = $monster_base_hp * 20;
        break;
    case 'orc';
        echo "<br/>Our monster is a ork";
        $monster_base_hp = $monster_base_hp * 15;
        break;
    default:
        echo "<br/>We didnt find the type of monster";
        break;
}

echo "<br/>The monster hp is " . $monster_base_hp;

?>

<div>
<?php
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

$x = 1;

do {
echo "The number is: $x <br>";
$x++;
} while ($x <= 5);

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>
</div>
