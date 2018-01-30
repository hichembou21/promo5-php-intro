<?php
    // $toto = "hello word!";
    // $x = "yes";
    // $y = 20;
    $list = [
        ["lundi", "patates", "glace"],
        ["mardi", "riz", "mousse au chocolat"],
        ["mercredi", "poisson", "frézier"],
        ["jeudi", "des pates", "flan"],
        ["vendredi", "steak frites", "tarte pomme"],
        ["samedi", "couscous", "mousse caramel"],
        ["dimanche", "haricot vert", "tarte poire"]
    ];
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intro php</title>
</head>
<body>
    <table>
        <?php
        for ($i=0; $i < count($list); $i++) {
            if ($i%2) {
                echo("<tr style=\"background-color : #c2c2c2;\">");
            } else {
                echo("<tr>");
            }
            for ($j=0; $j < count($list[$i]); $j++) { 
                print_r("
                    <td style = \"border : 1px solid blue; 
                                 padding : 5px 5px;\"> 
                        {$list[$i][$j]} 
                    </td>");
            }
            echo("</tr>");
        }
        
        ?>
    </table>
</body>
</html>
