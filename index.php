<?php

$semaine = [ 0 => "Dimanche", 1 => "Lundi", 2 => "Mardi", 3 => "Mercredi",4 => "Jeudi", 5 => "Vendredi", 6 => "Samedi"];

$mois = [1 => "Janvier", 2 => "Février", 3=>"Mars", 4=>"Avril", 5=>"Mai", 6=>"Juin", 7=>"Juillet",
    8 => "Aout", 9 => "Septembre", 10 => "Octobre", 11 => "Novembre", 12 => "Décembre"];

$temps = [ 1=> "Ensoleillé", 2=>"Nuageux", 3=>"Pluvieux", 4=>"Neigeux"];

$prevision = array();

?>
<html lang="fr">
<head>
    <link rel="stylesheet" href="meteo.css">
    <title>Meteo tableau final</title>
</head>
<body>
<h3>PREVISION METEO DANS LES DEUX  SEMAINES </h3>

<div id='ciel'>"PAR JUDICAEL"</div>


<table border="3" cellpadding="3" cellspacing="0">
    <tr>
        <th>Jour</th><th>Temps</th><th>Température</th>
    </tr>

    <?php
    $tableauJour1 = getdate();
    for($i=0; $i < 15; $i++) {
        $tableauJour = getdate(strtotime(" +$i day"));
        $jour = $semaine[$tableauJour["wday"]];
        $numeroJour = $tableauJour["mday"];
        $moisJour = $mois[$tableauJour["mon"]];
        $annee = $tableauJour["year"];

        $t = rand(1, 4);
        $tempDuJour = $temps[$t];

        switch($t) {
            case 3:
                $temperature = rand(3,30);
                $image = "rainanimé.gif";
                break;
            case 4:
                $temperature = rand(-30, 2);
                $image = "neigeanimé.gif";
                break;
            case 2:
                $temperature = rand(-30,30);
                $image = "nuageanimé.gif";
            default:
                $image = "suncloud.gif";
                $temperature = rand(-30,30);
        }
        echo("<tr>");
        echo("<td>".$jour." ".$numeroJour." ".$moisJour." ".$annee."</td>");
        // echo("<td>".$tempDuJour."</td>");
        echo('<td><img src="images/'.$image.'" height="50px" width="50px"/></td>');
        echo("<td>".$temperature." °C</td>");
        echo("</tr>");

    }
    ?>
</table>
</body>
</html>

