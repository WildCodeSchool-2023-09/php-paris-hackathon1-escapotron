<?php

namespace App\Controller;

class PageController extends AbstractController
{
    /**
     * Display home page
     */
    public function home(): string
    {
        return $this->twig->render('/home.html.twig');
    }

    public function event(): string
    {
        return $this->twig->render('/event.html.twig');
    }

    public function generateur(): string
    {
        // tableaux de valeurs //

        $famille = ['mes chéris', 'la smallah', 'tout le monde',];
        $conjoint = ['mon bébé', 'chouchou', 'ptit coeur',];
        $amis = ['les potos', 'la bande', 'mes bestas'];
        $collegues = ['l\'équipe', 'chers collègues', 'tout le monde'];

        //gens//

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

        //fete : pas de tableau de valeur : le GET renvoie directement la fete choisie//

        //excuse//

        if ($_GET['excuse'] === "travail"){
            $excuse = array_rand($travail);
        }
        if ($_GET['excuse'] === "absurde"){
            $excuse = array_rand($absurde);
        }
        if ($_GET['excuse'] === "santé"){
            $excuse = array_rand($santé);
        } else {
            $excuse = array_rand($honnete);
        }


        $excuseparfaite = "désolé " . $gens . " je ne peux pas venir à " . $_GET['fete'] . " car j'ai " . $excuse . ", " . $ton;

        return $this->twig->render('finale.html.twig', ['excuseparfaite' => $excuseparfaite]);
    }
}
