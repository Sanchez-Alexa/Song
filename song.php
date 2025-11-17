<?php
//song info var
$title = "Warm on a cold night"; 
$artist = "HONNE";
$mood = "warm";

//numeric var
$verseCount = 2;
$repeatChorus = 4;

//repeat words
$verbKeep = " keep ";
$nounNight = " night ";

//song sections arrays
$verse1 = ["Like a", "in", "Theyre stunned by all your", "And I so damn lucky", "To", "you on my"];
$prechorus = ["And I cant", "but", "How we", "up alright", "And I", "you like no other", "Cause this has never", "so right"
];
$chorus = ["You can", "me warm on a cold", "Warm on a cold cold", "Yeah you can", "me warm on a cold", "Warm on a cold cold
"];
$verse2 = ["I want to", "you something special", "you what you deserve", "I want to", "you to", "In a 1950s", "upcoming pop", "for your favorite
"];
$bridge = ["Girl you could", "So why you", "me and not", "me on my own?", "Girl you could be with","So thanks for", "me your 
"];
$outro = ["Yeah", "me up and", "warm on a cold", "Warm on a cold cold", "Oh yeah you can", "me warm on a cold"];

//arrays for verb and noun lyrics
$nouns = [" rabbit "//0
, " headlights "//1
, " charm ", //2
" arm ", //3
" wonder "//4
, " love ",//5
" paradise ",//6
" Merc ",//7
" shows ", //8
"tickets ", //9
" artists ", //10
" thing ", //11
" anyone ", //12
" number one ",];//13
$verbs = [" feel " //0
, " have ",//1
" help ",//2
" ended ",//3
" felt ",//4
" treat ",//5
" Give ",//6
" take "//7
, " See ",//8
" Get ",//9
" choosing "//10
, " leaving ",//11
" making ",//12
" wrap "];//13

//for type juggling
$repeatsString = "3"; 
$type1 = $repeatsString + $repeatChorus;  
$views = 100;
$type2 = "Views: " . $views;
$liked = true;
$type3 = "Liked: " . $liked;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Song Lyrics</title>
        <!-- CSS minimal design -->
        <style>
            body {
                background-color: #f0f8ff; /* light blue background */
                font-family: 'Montserrat', sans-serif;
                color: #333;
                line-height: 1.6;
                padding: 20px;
            }
            h1 {
                text-align: center;
                color: #1e90ff;
            }
            h2 {
                text-align: center;
                color: #555;
            }
            h4 {
                color: #1c1c1c;
                margin-top: 30px;
                margin-bottom: 10px;
                border-bottom: 1px solid #ccc;
                padding-bottom: 5px;
            }
            p {
                margin-left: 20px;
                margin-bottom: 8px;
            }
            h4 + p {
                font-style: italic;
                color: #444;
            }
        </style>
    </head>

    <body>          
    <h1><?php echo $title; ?></h1>
    <h2>Artist: <?php echo $artist; ?></h2>
    <!-- for juggling -->
    <p>Total chorus lines (string + number):<?php echo $type1; ?></p>
    <p><?php echo $type2; ?></p>
    <p><?php echo $type3; ?></p>
    <br>
                
    <h4>Verse 1</h4>
    <p><?php echo $verse1[0].$nouns[0].$verse1[1].$nouns[1]?></p>
    <p><?php echo $verse1[2].$nouns[2] ?></p>
    <p><?php echo $verse1[3]?></p>
    <p><?php echo $verse1[4].$verbs[1].$verse1[5].$nouns[3]?></p>
    <br>

    <h4>Pre-Chorus</h4>
    <p><?php echo $prechorus[0].$verbs[2].$prechorus[1].$nouns[4]?></p>
    <p><?php echo $prechorus[2].$verbs[3].$prechorus[3]?></p>
    <p><?php echo $prechorus[4].$nouns[5].$prechorus[5]?></p>
    <p><?php echo $prechorus[6].$verbs[4].$prechorus[7]?></p>
    <br>

    <h4>Chorus</h4>
    <p><?php echo $chorus[0].$verbKeep.$chorus[1].$nounNight?></p>
    <p><?php echo $chorus[2].$nounNight?></p>
    <p><?php echo $chorus[0].$verbKeep.$chorus[1].$nounNight?></p>
    <p><?php echo $chorus[2].$nounNight?></p>
    <br>

    <h4>Verse 2</h4>
    <p><?php echo $verse2[0].$verbs[5].$verse2[1]?></p>
    <p><?php echo $verbs[6].$verse2[2]?></p>
    <p><?php echo $verse2[3].$verbs[7].$verse2[4].$nouns[6]?></p>
    <p><?php echo $verse2[5].$nouns[7]?></p>
    <p><?php echo $verbs[8].$verse2[6].$nouns[8]?></p>
    <p><?php echo $verbs[9].$nouns[9].$verse2[7].$nouns[10]?></p>
    <br>

    <h4>Pre-Chorus</h4>
    <p><?php echo $prechorus[0].$verbs[2].$prechorus[1].$nouns[4]?></p>
    <p><?php echo $prechorus[2].$verbs[3].$prechorus[3]?></p>
    <p><?php echo $prechorus[4].$nouns[5].$prechorus[5]?></p>
    <p><?php echo $prechorus[6].$verbs[4].$prechorus[7]?></p>
    <br>

    <h4>Chorus</h4>
    <p><?php echo $chorus[0].$verbKeep.$chorus[1].$nounNight?></p>
    <p><?php echo $chorus[2].$nounNight?></p>
    <p><?php echo $chorus[0].$verbKeep.$chorus[1].$nounNight?></p>
    <p><?php echo $chorus[2].$nounNight?></p>
    <br>

    <h4>Bridge</h4>
    <p><?php echo $bridge[0].$verbs[1].$nouns[12]?></p>
    <p><?php echo $bridge[1].$verbs[10].$bridge[2].$verbs[11].$bridge[3]?></p>
    <p><?php echo $bridge[4].$nouns[12]?></p>
    <p><?php echo $bridge[5].$verbs[12].$bridge[6].$nouns[13]?></p>
    <br>

    <h4>Chorus</h4>
    <p><?php echo $chorus[0].$verbKeep.$chorus[1].$nounNight?></p>
    <p><?php echo $chorus[2].$nounNight?></p>
    <p><?php echo $chorus[0].$verbKeep.$chorus[1].$nounNight?></p>
    <p><?php echo $chorus[2].$nounNight?></p>
    <br>

    <h4>Outro</h4>
    <p><?php echo $outro[0].$verbs[13].$outro[1].$verbKeep.$outro[2].$nounNight?></p>
    <p><?php echo $outro[3].$nounNight?></p>
    <p><?php echo $outro[4].$verbKeep.$outro[5].$nounNight?></p>
    <p><?php echo $outro[3].$nounNight?></p>
    </body>
</html>
