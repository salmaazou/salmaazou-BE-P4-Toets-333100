<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoundForPound</title>
    
</head>
<body>
    
<?php
    // var_dump($data['PoundForPound']);
       echo '<h1>Men\'s Pound-For-Pound Top Rank UFC</h1>';
        echo '<table>';
        echo '<tr><th>Name</th><th>Ranking</th><th>Length</th><th>Weight</th><th>Age</th><th>WinsByKnockout</th></tr>';
        foreach ($data['PoundForPound'] as $poundForPound)
        {
            echo '<tr>';
            echo '<td>' . $poundForPound->Name . '</td>';
            echo '<td>' . $poundForPound->Ranking . '</td>';
            echo '<td>' . $poundForPound->Length. '</td>';
            echo '<td>' . $poundForPound->Weight . '</td>';
            echo '<td>' . $poundForPound->Age . '</td>';
            echo '<td>' . $poundForPound->WinsByKnockout . '</td>';
            echo '</tr>';
        }
        echo '</table>';
?>
</body>

<footer>
    <p>© 2021 - UFC</p>
    
</footer>
</html>