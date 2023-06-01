
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>

<?php
 
      echo '<h1>Overzicht Afgenomen Examens Examinatoren</h1>';
      echo '<table>';
       echo '<tr><th>Naam Examinator</th><th>Datum Examen</th><th>Rijbewijscategorie</th><th>Rijschool</th><th>Stad</th><th>Uitslag Examen</th></tr>';
      foreach ($data['examinatoren'] as $examen)
       {
          echo '<tr>';
       echo '<td>' . $examen->Voornaam . ' ' . $examen-> Tussenvoegsel . ' ' .  $examen->Achternaam . '</td>';
       echo '<td>' . $examen->Datum . '</td>';
        echo '<td>' . $examen->Rijbewijscategorie. '</td>';
           echo '<td>' . $examen->Rijschool . '</td>';
           echo '<td>' . $examen-> Stad . '</td>';
            echo '<td>' . $examen->Uitslag . '</td>';
            echo '</tr>';
        }
        echo '</table>';
?>
</body>

<footer>
    <p>© 2023 - Azou</p>
    
</footer>
</html>