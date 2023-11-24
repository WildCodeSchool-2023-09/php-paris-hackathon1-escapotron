<?php

namespace App\Model;

use PDO;

class ExcuseManager
{
    public const FAMILLE = ['mes chéris',
                    'la smallah',
                    'tout le monde',
                    ];


    public const CONJOINT = ['mon bébé',
                'chouchou',
                'ptit coeur',
                'mon coeur',
                'mon amour',
                'bébou',
                ];

    public const AMIS = ['les potos',
            'la bande',
            'mes bestas',
            'les amis',
            'les potes',
            'les gars',
            'les compagnons',
            'la team',
            ];

    public const COLLEGUES = [ 'l\'équipe',
                'chers collègues',
                'tout le monde',
                'chers collaborateurs',
                ];


    // RAISONS

    public const TRAVAIL = ['rendez-vous avec le président',
                'un client qui a urgemment besoin de mes services',
                'le quaterly back-up strategic outsourcing qui ne va pas se faire tout seul',
                'un mail primordial à écrire',
                ];

    public const ABSURDE = ['rencontré un oiseau dans l\'espace',
                'mon chien qui m\'a défié au strip poker',
                'le roi de Suede qui vient réparer mon xylophone',
                'besoin de remonter le temps pour trouver une excuse',
                'volé la déclaration d\'indépendance des états-unis',
                'ggrzuig grzuguzg rupvo',
                'cours de yoyo',
                'mon chien qui a mangé ma voiture',
                'prévu de me transformer en loup-garou',
                'mangé un avocat',
                'mangé un croissant',
                'été enlevé par des extra terrestres',
                'trouvé une vache',
                ];

    public const SANTE = [  'perdu mes dents',
                'une grippe du pied',
                'une fracture d\'un endroit que je garderai secret',
                'attrapé la peste qui infecte mon village',
                'une crise cardiaque',
                'un avc',
                'perdu mon siamoi',
                'un gros furoncle',
                'attrapé un rhume',
                ];

    public const POLITIQUE = [  'été enfermé dans un goulag',
                    'commencé une révolution au Machu Pichu',
                    'le KGB aux trousses',
                    'été réquisitionné pour le dépouillement des élections',
                ];


    // TON

    public const DELICAT = ['en espérant ne pas vous faire trop de peine',
                'je vous présente mes plus sincères excuses',
                'je vous prie de bien vouloir m\'excuser',
                'sachez que je regrette amèrement cette absence',
            ];

    public const CORPO = [  'cordialement',
                'amicalement votre',
                'professionnellement votre',
                'bien à vous',
                'dans l\'espoir que mes attentions trouverons écho à votre mansuétude,
                je vous souhtaite une productive soirée',
            ];

    public const NEUTRE = [ 'encore désolé tout le monde',
                'je suis vraiment confus',
                'ce sera pour la prochaine fois',
                'on se revoit vite',
            ];

    public const MECHANT = ['et je ne vous aime pas',
                'idiots',
                'imbéciles',
                'et je vous invite à aller vous asseoir sur un cactus',
                'et j\'ai juste pas envie de vous voir',
            ];

    public function generateur(string $fete, string $gens, string $raison, string $ton): string
    {

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
            $excuse['gens'] = self::FAMILLE[array_rand(self::FAMILLE)];
        }
        else if ($gens === "conjoint") {
            $excuse['gens'] = self::CONJOINT[array_rand(self::CONJOINT)];
        }
        else if ($gens === "amis") {
            $excuse['gens'] = self::AMIS[array_rand(self::AMIS)];
        } else {
            $excuse['gens'] = self::COLLEGUES[array_rand(self::COLLEGUES)];
        }

        // EXCUSE

        if ($raison === "travail") {
            $excuse['raison'] = self::TRAVAIL[array_rand(self::TRAVAIL)];
        }
        else if ($raison === "absurde") {
            $excuse['raison'] = self::ABSURDE[array_rand(self::ABSURDE)];
        }
        else if ($raison === "sante") {
            $excuse['raison'] = self::SANTE[array_rand(self::SANTE)];
        } else {
            $excuse['raison'] = self::POLITIQUE[array_rand(self::POLITIQUE)];
        }

        if ($ton === "delicat") {
            $excuse['ton'] = self::DELICAT[array_rand(self::DELICAT)];
        }
        else if ($ton === "corpo") {
            $excuse['ton'] = self::CORPO[array_rand(self::CORPO)];
        }
        else if ($ton === "neutre") {
            $excuse['ton'] = self::NEUTRE[array_rand(self::NEUTRE)];
        } else {
            $excuse['ton'] = self::MECHANT[array_rand(self::MECHANT)];
        }

        return "« Désolé " . $excuse['gens'] . " je ne peux pas venir pour "
                        . $excuse['fete'] . " car j'ai " . $excuse['raison'] . ", " . $excuse['ton'] . ". »";
    }
}
