<?php

namespace App\Controller;

class PageController extends AbstractController
{
    

    /**
     * Display home page
     */
    public function index(): string
    {
        return $this->twig->render('index.html.twig');
    }

    public function app(): string
    {
        return $this->twig->render('escape.html.twig');
    }

    public function explication(): string
    {
        return $this->twig->render('/infos.html.twig');
    }
    public function generateur(string $fete, string $gens, string $raison, string $ton): string
    {
        // GENS //

        $famille = ['mes chéris',
                    'la smallah',
                    'tout le monde',
                    ];

        $conjoint = ['mon bébé',
                    'chouchou',
                    'ptit coeur',
                    ];

        $amis = ['les potos',
                'la bande',
                'mes bestas',
                'les amis'
                ];

        $collegues = [ 'l\'équipe',
                    'chers collègues',
                    'tout le monde'
                    ];


        // RAISONS

        $travail = ['rendez-vous avec le président',
                    'un client qui a urgemment besoin de mes services',
                    'le quaterly back-up strategic outsourcing qui ne va pas se faire tout seul',
                    'un mail primordial à écrire',
                    ];

        $absurde = ['rencontré un oiseau dans l\'espace',
                    'mon chien qui m\'a défié au strip poker',
                    'le roi de Suede qui vient réparer mon xylophone',
                    'besoin de remonter le temps pour trouver une excuse',
                    'volé la déclaration d\'indépendance des états-unis',
                    'ggrzuig grzuguzg rupvo',
                    'cours de yoyo',
                    'mon chien qui a mangé ma voiture',
                    ];

        $sante = [  'perdu mes dents',
                    'une grippe du pied',
                    'une fracture d\'un endroit que je garderai secret',
                    'attrapé la peste qui infecte mon village',
                    'une crise cardiaque',
                    'un avc',
                    ];

        $politique = [  'été enfermé dans un goulag',
                        'commencé une révolution au Machu Pichu',
                        'le KGB aux trousses',
                        'été réquisitionné pour le dépouillement des élections',
                    ];


        // TON

        $delicat = ['en espérant ne pas vous faire trop de peine',
                    'je vous présente mes plus sincères excuses',
                    'je vous prie de bien vouloir m\'excuser',
                    'sachez que je regrette amèrement cette absence',
                ];

        $corpo = [  'cordialement',
                    'amicalement votre',
                    'professionnellement votre',
                    'bien à vous',
                    'dans l\'espoir que mes attentions trouverons écho à votre mansuétude,
                    je vous souhtaite une productive soirée',
                ];

        $neutre = [ 'encore désolé tout le monde',
                    'je suis vraiment confus',
                    'ce sera pour la prochaine fois',
                ];

        $mechant = ['et je ne vous aime pas',
                    'idiots',
                    'imbéciles',
                    'et je vous invite à aller vous asseoir sur un cactus',
                ];

        if ($fete === "halloween") {
            $excuse['fete'] = "Halloween";
        }
        else if ($fete === "noel") {
            $excuse['fete'] = "Noël";
        }
        else if ($fete === "nouvel-an") {
            $excuse['fete'] = "le Nouvel An";
        } else {
            $excuse['fete'] = "Hanoucca";
        }

        // GENS

        if ($gens === "famille") {
            $excuse['gens'] = "oui";
        }
        else if ($gens === "conjoint") {
            $excuse['gens'] = $conjoint[array_rand($conjoint)];
        }
        else if ($gens === "amis") {
            $excuse['gens'] =$amis[array_rand($amis)];
        } else {
            $excuse['gens'] = $collegues[array_rand($collegues)];
        }

        // EXCUSE

        if ($raison === "travail") {
            $excuse['raison'] = $travail[array_rand($travail)];
        }
        else if ($raison === "absurde") {
            $excuse['raison'] = $absurde[array_rand($absurde)];
        }
        else if ($raison === "sante") {
            $excuse['raison'] = $sante[array_rand($sante)];
        } else {
            $excuse['raison'] = $politique[array_rand($politique)];
        }

        if ($ton === "delicat") {
            $excuse['ton'] = $delicat[array_rand($delicat)];
        }
        else if ($ton === "corpo") {
            $excuse['ton'] = $corpo[array_rand($corpo)];
        }
        else if ($ton === "neutre") {
            $excuse['ton'] = $neutre[array_rand($neutre)];
        } else {
            $excuse['ton'] = $mechant[array_rand($mechant)];
        }

        $excuseParfaite = "« Désolé " . $excuse['gens'] . " je ne peux pas venir pour "
                        . $excuse['fete'] . " car j'ai " . $excuse['raison'] . ", " . $excuse['ton'] . ". »";

        return $this->twig->render('result.html.twig', ['excuseParfaite' => $excuseParfaite]);
    }
}
