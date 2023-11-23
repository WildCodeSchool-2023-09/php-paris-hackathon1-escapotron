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

    public function explication(): string
    {
        return $this->twig->render('/explication.html.twig');
    }
    public function generateur(): string
    {
        // tableaux de valeurs //

        $famille = ['mes chéris', 'la smallah', 'tout le monde',];
        $conjoint = ['mon bébé', 'chouchou', 'ptit coeur',];
        $amis = ['les potos', 'la bande', 'mes bestas', 'les amis'];
        $collegues = ['l\'équipe', 'chers collègues', 'tout le monde'];


        $travail = ['rendez-vous avec le président', 'un client qui a urgemment besoin de mes services', 
                    'le quaterly back-up strategic outsourcing qui ne va pas se faire tout seul', 
                    'un mail primordial à écrire'];
        $absurde = ['rencontré un oiseau dans l\'espace', 'mon chien qui m\'a défié au strip poker', 'le roi de Suede qui vient réparer mon xylophone', 
                    'besoin de remonter le temps pour trouver une excuse', 'volé la déclaration d\'indépendance des états-unis', 'ggrzuig grzuguzg rupvo', 'cours de yoyo', 'mon chien qui a mangé ma voiture'];
        $sante = ['perdu mes dents', 'une grippe du pied', 'une fracture d\'un endroit que je garderai secret', 'attrapé la peste qui infecte mon village', 
                  'une crise cardiaque', 'un avc'];
        $politique = ['été enfermé dans un goulag', 'commencé une révolution au Machu Pichu', 'le KGB aux trousses', 'été réquisitionné pour le dépouillement des élections'];

        $delicat = ['en espérant ne pas vous faire trop de peine', 'je vous présente mes plus sincères excuses', 'je vous prie de bien vouloir m\'excuser', 
                    'sachez que je regrette amèrement cette absence'];
        $corpo = ['cordialement', 'amicalement votre', 'professionnellement votre', 'bien à vous', 
                  'dans l\'espoir que mes attentions trouverons écho à votre mansuétude, je vous souhtaite une productive soirée'];
        $neutre = ['encore désolé tout le monde', 'je suis vraiment confus', 'ce sera pour la prochaine fois'];
        $mechant = ['et je ne vous aime pas', 'idiots', 'imbéciles', 'et je vous invite à aller vous asseoir sur un cactus', ''];


        //gens//

        if ($_GET['gens'] === "famille") {
            $gens = array_rand($famille);
        }

        if ($_GET['gens'] === "conjoint") {
            $gens = array_rand($conjoint);
        }

        if ($_GET['gens'] === "amis") {
            $gens = array_rand($amis);
        } else {
            $gens = array_rand($collegues);
        }
        //fete : pas de tableau de valeur : le GET renvoie directement la fete choisie//
        //excuse//
        $absurde = [];
        $sante = [];
        $politique = [];

        if ($_GET['excuse'] === "travail") {
            $excuse = array_rand($travail);
        }

        if ($_GET['excuse'] === "absurde") {
            $excuse = array_rand($absurde);
        }

        if ($_GET['excuse'] === "sante") {
            $excuse = array_rand($sante);
        } else {
            $excuse = array_rand($politique);
        }

        //ton//
        $delicat = [];
        $corpo = [];
        $neutre = [];
        $mechant = [];

        if ($_GET['ton'] === "delicat") {
            $ton = array_rand($delicat);
        }
        if ($_GET['ton'] === "corpo") {
            $ton = array_rand($corpo);
        }
        if ($_GET['ton'] === "neutre") {
            $ton = array_rand($neutre);
        } else {
            $ton = array_rand($mechant);

        }

        $ton = [];

        $excuseparfaite = "désolé " . $gens . " je ne peux pas venir à " . $_GET['fete'] . " car j'ai " . $excuse . ", " . $ton;

        return $this->twig->render('finale.html.twig', ['excuseparfaite' => $excuseparfaite]);
    }
}
