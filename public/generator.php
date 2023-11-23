<?php

// tableaux de valeurs //

$famille = ['mes chéris', 'la smallah', 'tout le monde',];
$conjoint = ['mon bébé', 'chouchou', 'ptit coeur',];
$amis = ['les potos', 'la bande', 'mes bestas'];
$collegues = ['l\'équipe', 'chers collègues', '']



if ($_GET['gens'] === "famille"){
    $gens = array_rand($famille);
}
if ($_GET['gens'] === "conjoint"){
    $gens = array_rand($conjoint);
}
if ($_GET['gens'] === "amis"){
    $gens = array_rand($amis);
} else {
    $gens = array_rand($collegues);
}


$excuse = "désolé " . $gens . " je ne peux pas venir à " . $fete . " car j'ai " . $excuse . ", " . $ton;





?>