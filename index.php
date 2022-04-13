<?php

// function averageSize(array $array)
// {
//     $somme = array_sum($array);
//     $nombreDeValeurs = count($array);
//     return ceil($somme / $nombreDeValeurs);
// }
// $sizes = [213, 210, 187, 143];
// echo averageSize($sizes);

// NIVEAU DEBUTANT
// Créer une fonction prenant en compte une chaine de caractères et un nombre, le retour de cette chaine doit être le contenu de la chaine fournie limité au nombre de caractères spécifiés en paramètre 2
// Exemple : limitString("Lorem ipsum dolor sit amet", 4) => "Lore"

// function limitString(string $string, int $max): string
// {
//     return substr($string, 0, $max);
// }
// $phrase = "Lorem ipsum dolor sit amet";
// limitString($phrase, 4); // Nous donnera "Lore"


// NIVEAU INTERMEDIAIRE
// Créer une fonction permettant de générer une chaine de caractères composées de ; respectivement ; 3 chiffres, un tiret, 5 lettres, un tiret, 3 chiffres, de manière aléatoire
// EX : 123-ABCDE-456
function randomVar()
{
    // On créé des valeurs aux deux nombres de manières aléatoires
    $nb1 = rand(1, 999);
    $nb2 = rand(1, 999);
    if ($nb1 < 10) {
        $nb1 = "00" . $nb1;
    } elseif ($nb1 < 100) {
        $nb1 = "0" . $nb1;
    }
    if ($nb2 < 10) {
        $nb2 = "00" . $nb2;
    } elseif ($nb2 < 100) {
        $nb2 = "0" . $nb2;
    }
    // On déclare la variable prete à accueillir les futures lettres 
    $letters = "";
    // On créé une chaine de caractères aléatoires
    $arrayAlphabet = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    // On boucle 5 fois notre tableau des lettres de l'alphabet
    for ($i = 0; $i < 5; $i++) {
        // On pioche au hasard une lettre qu'on greffe à letters
        $key = rand(0, 25);
        $letters .= $arrayAlphabet[$key];
    }
    return $nb1 . "-" . $letters . "-" . $nb2;
}
var_dump(randomVar());



// NIVEAU AVANCE

$produits = [
    [
        "refProduit" => "Prod0001",
        "prix_ht" => 1.87,
        "tva"  => 5.5
    ],
    [
        "refProduit" => "Prod0012",
        "prix_ht" => 14.65,
        "tva"  => 10
    ],
    [
        "refProduit" => "Prod0002",
        "prix_ht" => 1.87,
        "tva"  => 5.5
    ],
    [
        "refProduit" => "Prod0008",
        "prix_ht" => 119,
        "tva"  => 20
    ]
];

// Créer une fonction qui nous sortira un tableau de valeurs
// Le SEUL paramètre d'entrée doit être un tableau de produits (fourni ci-dessus)
// la valeur retournée doit être sous la forme
// [
//      "REF_PRODUIT" => "PRIX_TTC"   
// ]
// IMPORTANT : Le retour doit être fait en ordre alphabétique de la refProduit

// function allProductsTaxIn(array $array)
// {
//     $newArray = [];
//     foreach ($array as $item) {
//         $prixTTC = round($item["prix_ht"] + ($item["prix_ht"] * $item["tva"] / 100), 2);
//         $newArray[$item['refProduit']] = $prixTTC;
//     }
//     ksort($newArray);
//     return $newArray;
// }
// var_dump(allProductsTaxIn($produits));
