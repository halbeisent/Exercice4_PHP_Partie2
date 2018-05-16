<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Exercice 4 Partie 2 PHP</title>
</head>
<body>
  <p>
    <?php
    $magnitude = 1;
    echo 'le contenu de ma variable $magnitude est ' . $magnitude . '<br />';
    // On va indiquer qu'on travaille sur la variable $magnitude
    switch ($magnitude) {
      // Dans le cas ou $magnitude contient la valeur 1
      case 1:
      echo 'Micro-séisme impossible à ressentir.';
      break;
      // Dans le cas ou $magnitude contient la valeur 2
      case 2:
      echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
      break;
      // Dans le cas ou $magnitude contient la valeur 3
      case 3:
      echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
      break;
      // Dans le cas ou $magnitude contient la valeur 4
      case 4:
      echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
      break;
      // Dans le cas ou $magnitude contient la valeur 5
      case 5:
      echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
      break;
      // Dans le cas ou $magnitude contient la valeur 6
      case 6:
      echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
      break;
      // Dans le cas ou $magnitude contient la valeur 7
      case 7:
      echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
      break;
      // Dans le cas ou $magnitude contient la valeur 8
      case 8:
      echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
      break;
      // Dans le cas ou $magnitude contient la valeur 9
      case 9:
      echo 'Séisme capable de tout détruire sur une très vaste zone.';
      break;
      // Dans le cas ou aucune valeur ne correspond
      default:
      echo 'Aucun message pour cette valeur';
      break;
    }
    ?>
  </p>
</body>
</html>
