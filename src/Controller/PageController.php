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

        $travail = ['j\'ai rendez-vous avec le président', 'un client a urgemment besoin de mes services', 'le quaterly back-up strategic outsourcing ne va pas se faire tout seul', 'j\'ai un mail primordial à écrire'];

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
        if ($_GET['excuse'] === "sante"){
            $excuse = array_rand($sante);
        } else {
            $excuse = array_rand($politique);
        }

        //ton//

        if ($_GET['ton'] === "delicat"){
            $ton = array_rand($delicat);
        }
        if ($_GET['ton'] === "corpo"){
            $ton = array_rand($corpo);
        }
        if ($_GET['ton'] === "neutre"){
            $ton = array_rand($neutre);
        } else {
            $ton = array_rand($mechant);
        }


        $excuseparfaite = "désolé " . $gens . " je ne peux pas venir à " . $_GET['fete'] . " car j'ai " . $excuse . ", " . $ton;

        return $this->twig->render('finale.html.twig', ['excuseparfaite' => $excuseparfaite]);
    }
}
