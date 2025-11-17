<?php
$title = "Warm on a cold night";
$artist = "HONNE";
$mood = "warm";
$verseCount = 2;
$repeatChorus = 4;
$verbKeep = " keep ";
$nounNight = " night ";
$verse1 = ["Like a", "in", "Theyre stunned by all your", "And I so damn lucky", "To", "you on my"];
$prechorus = ["And I cant", "but", "How we", "up alright", "And I", "you like no other", "Cause this has never", "so right"
];
$chorus = ["You can", "me warm on a cold", "Warm on a cold cold", "Yeah you can", "me warm on a cold", "Warm on a cold cold
"];
$verse2 = ["I want to treat you something special Give you what you deserve I want to take you to In a 1950s See upcoming pop Get for your favorite 
"];
$bridge = ["Girl you could have So why you me and not me on my own? So thanks for me your 
"];
$nouns = [" rabbit ", " headlights ", " charm ", " arm ", " wonder ", " love ", " paradise ", " Merc ", " shows ", " tickets ", " artists ", " thing ", " anyone ", " number one ",];
$verbs = [" feel ", " have ", " help ", " ended ", " felt ", " treat ", " give ", " take ", " see ", " get ", " choosing ", " leaving ", " making "];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Song Lyrics</title>
    </head>
    <body>
    <h1><?php echo $title; ?></h1>
    <h2>Artist: <?php echo $artist; ?></h2>
    <h4>Verse 1</h4>
    <p><?php echo $verse1[0].$nouns[0].$verse1[1].$nouns[1]?></p>
    <p><?php echo $verse1[2].$nouns[2] ?></p>
    <p><?php echo $verse1[3]?></p>
    <p><?php echo $verse1[4].$verbs[1].$verse1[5].$nouns[3]?></p>

    <h4>Pre-Chorus</h4>
    <p><?php echo $prechorus[0].$verbs[2].$prechorus[1].$nouns[4]?></p>
    <p><?php echo $prechorus[2].$verbs[3].$prechorus[3]?></p>
    <p><?php echo $prechorus[4].$nouns[5].$prechorus[5]?></p>
    <p><?php echo $prechorus[6].$verbs[4].$prechorus[7]?></p>

    <h4>Chorus</h4>
    <p><?php echo $chorus[0].$verbKeep.$chorus[1].$nounNight?></p>
    <p><?php echo $chorus[2].$nounNight?></p>
    <p><?php echo $chorus[0].$verbKeep.$chorus[1].$nounNight?></p>
    <p><?php echo $chorus[2].$nounNight?></p>
    </body>
</html>