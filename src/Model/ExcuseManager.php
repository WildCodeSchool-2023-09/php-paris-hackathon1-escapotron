<?php

namespace App\Model;

use PDO;

class ExcuseManager
{
    public const FAMILLE = ['mes chéris',
                    'la smallah',
                    'tout le monde',
                    'la grosse mif',
                    'mon fiston',
                    'mon beau-frère chéri',
                    'belle maman adorée',
                    'grand-maman',
                    'mon père'
                    ];


    public const CONJOINT = ['mon bébé',
                'chouchou',
                'mon ptit coeur',
                'mon coeur',
                'mon amour',
                'bébou',
                'my love'
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
                'chers confrères'
                ];

    // RAISONS

    public const TRAVAIL = [
                'j\'ai rendez-vous avec le président',
                'j\'ai un client qui a urgemment besoin de mes services',
                'le quaterly back-up strategic outsourcing va pas se faire tout seul',
                'j\'ai un mail primordial à écrire',
                "j'ai une PR à merge dans le main.."
                ];

    public const ABSURDE = [
                'j\'ai rencontré un oiseau dans l\'espace',
                'j\'ai mon chien qui m\'a défié au strip poker',
                'j\'ai le roi de Suede qui vient réparer mon xylophone',
                'j\'ai besoin de remonter le temps pour trouver une excuse',
                'j\'ai volé la déclaration d\'indépendance des États-Unis',
                'j\'ai ODSIHG398EZDGJ',
                'j\'ai cours de yoyo aquatique',
                'j\'ai mon chien qui a mangé ma voiture',
                'j\'ai prévu de me transformer en loup-garou',
                'j\'ai mangé un avocat',
                'j\'ai mangé un croissant',
                'j\'ai été enlevé par des extra terrestres',
                'j\'ai rencontré une vache octoplégique',
                'je passe sous un tunnel'
                ];

    public const SANTE = [ 
                'j\'ai perdu mes dents',
                'j\'ai une grippe du pied',
                'j\'ai une fracture d\'un endroit que je garderai secret',
                'j\'ai attrapé la peste qui infecte mon village',
                'j\'ai une crise cardiaque',
                'j\'ai actuellement un AVC',
                'j\'ai perdu mon jumeau siamois',
                'j\'ai un gros furoncle',
                'j\'ai attrapé un rhume',
                'j\'ai cassé ma cuisse',
                ];

    public const POLITIQUE = [  "j'ai été enfermé dans un goulag",
                    "j'ai commencé une révolution au Machu Pichu",
                    "j'ai le KGB aux trousses",
                    "j'ai été réquisitionné pour le dépouillement des élections",
                    "je vais manifester seul contre la solitude",
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
                'je vous souhtaite une productive soirée',
            ];

    public const NEUTRE = [ 'encore désolé tout le monde',
                'je suis vraiment confus',
                'ce sera pour la prochaine fois',
                'on se revoit vite',
            ];

    public const MECHANT = ['Et je ne vous aime pas',
                'Andouilles',
                'Imbéciles',
                'Con de mime',
                'Aussi, je vous invite à aller vous asseoir sur un cactus',
                'De plus, j\'ai juste pas envie de vous voir',
                'Et j\'ai pas envie de voir vos tronches',
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

        return "« Désolé " . $excuse['gens'] . ", je ne peux pas venir pour "
                        . $excuse['fete'] . " car " . $excuse['raison'] . ". " . $excuse['ton'] . ". »";
    }
}
