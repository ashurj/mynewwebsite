<html>
<head>
    <title>PHP AND HTML</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
        body { background-image:url('clap.gif'); background-repeat:repeat;
        }
    </style>
</head>
<div id="game2"
<?php

$hero_name = 'Chad';
$hero_attack = 5;
$hero_defense = 10;
$hero_health = 100;

$monster_name = 'Death';
$monster_attack = 5;
$monster_defense = 10;
$monster_health = 100;

do {
    $monster_health -= $hero_attack;
    $hero_health -= $monster_attack;

    echo "Monster Health is now " . $monster_health . '<br/>';
    echo "Hero Health is now " . $hero_health .'<br/>';
}while ($hero_health >= 0 && $monster_health >= 0);

if($monster_health <= 0){
    echo "Monster Loses";
}
elseif($hero_health <= 0 ){
    echo "Hero Loses";
}
?>
</div>
<div id="link"
<ul>
    <li><a href="hero.php">Game Information</a></li>
    <li><a href="index.php">Main</a></li>

</ul>
</html>
