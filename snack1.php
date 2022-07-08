<!-- Creiamo un array contenente le partite di basket di 
un’ipotetica tappa del calendario. Ogni array avrà una 
squadra di casa e una squadra ospite, punti fatti dalla 
squadra di casa e punti fatti dalla squadra ospite. Stampiamo 
a schermtte le paro tutite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$playedMatch = [
    [   
        'calendarStage' => 'Olimpia',
        'homeTeam' => 'cagliari',
        'visitingTeam' => 'pescara', 
        'homeScore' => '3',
        'visitingScore' => '2'
    ],
    [   
        'calendarStage' => 'Manfredonia',
        'homeTeam' => 'abruzzo',
        'visitingTeam' => 'napoli', 
        'homeScore' => '3',
        'visitingScore' => '5'
    ],
    [   
        'calendarStage' => 'Riccione',
        'homeTeam' => 'roma',
        'visitingTeam' => 'lazio', 
        'homeScore' => '0',
        'visitingScore' => '1'
    ],
    [   
        'calendarStage' => 'Ponza',
        'homeTeam' => 'puglia',
        'visitingTeam' => 'brescia', 
        'homeScore' => '1',
        'visitingScore' => '1'
    ],
    [   
        'calendarStage' => 'Castellammare',
        'homeTeam' => 'firenze',
        'visitingTeam' => 'liguria', 
        'homeScore' => '2',
        'visitingScore' => '2'
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php for ($i; $i < count($playedMatch); $i++) { 
        $match = $playedMatch[$i];
    ?>
    <?php echo $match['calendarStage'] . ' ' . $match['homeTeam'] . '-' . $match['visitingTeam'] . ' | ' . $match['homeScore'] . '-' . $match['visitingScore']  ?>  
    <br>
    <?php } ?>
</body>
</html>