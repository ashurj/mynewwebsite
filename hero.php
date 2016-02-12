<html>
<head>
    <title>My Hero Information</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
        body { background-image:url('nope.gif'); background-repeat:repeat;
        }
    </style>
</head>
<body>
<?php
$hero_name = 'Chad';
$hero_attack = 5;
$hero_defense = 10;
$hero_health = 100;

$monster_name = 'Death';
$monster_attack = 10;
$monster_defense = 20;
$monster_health = 150;
?>

<div id="game1">
    <span>Hero Name:</span> <?php echo $hero_name; ?>
</div>

<div id="game1">
    <span>Hero Attack:</span> <?php echo $hero_attack; ?>
</div>

<div id="game1">
    <span>Hero Defense:</span> <?php echo $hero_defense; ?>
</div>

<div id="game1"
    <span>Hero Health</span> <?php echo $hero_health; ?>
</div>

<div id="game1">
    <span>Monster Name:</span> <?php echo $monster_name; ?>
</div>

<div id="game1"
    <span>Monster Attack:</span> <?php echo $monster_attack; ?>
</div>

<div id="game1">
    <span>Monster Defense:</span> <?php echo $monster_defense; ?>
</div>

<div id="game1">
    <span>Monster Health</span> <?php echo $monster_health; ?>
</div>


<div id="hero">
<ul>
    <li><a href="index.php">Main</a></li>
    <li><a href="attack.php">Simulation</a></li>

</ul>
</div>
</body>
</html>
