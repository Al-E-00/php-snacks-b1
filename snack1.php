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
        'homeTeam' => 'Cagliari',
        'visitingTeam' => 'Pescara',
        'homeScore' => rand(1, 150),
        'visitingScore' => rand(1, 150)
    ],
    [
        'calendarStage' => 'Manfredonia',
        'homeTeam' => 'Abruzzo',
        'visitingTeam' => 'Napoli',
        'homeScore' => rand(1, 150),
        'visitingScore' => rand(1, 150)
    ],
    [
        'calendarStage' => 'Riccione',
        'homeTeam' => 'Roma',
        'visitingTeam' => 'Lazio',
        'homeScore' => rand(1, 150),
        'visitingScore' => rand(1, 150)
    ],
    [
        'calendarStage' => 'Ponza',
        'homeTeam' => 'Puglia',
        'visitingTeam' => 'Brescia',
        'homeScore' => rand(1, 150),
        'visitingScore' => rand(1, 150)
    ],
    [
        'calendarStage' => 'Castellammare',
        'homeTeam' => 'Firenze',
        'visitingTeam' => 'Liguria',
        'homeScore' => rand(1, 150),
        'visitingScore' => rand(1, 150)
    ]
];

$i = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <title>Snack 1</title>
</head>

<body>
    <div class="container">
        <div class="list-group">
            <?php for ($i; $i < count($playedMatch); $i++) {
                $match = $playedMatch[$i];
                echo "<li>";
                echo $match['calendarStage'] . ' : ' . $match['homeTeam'] . '-' . $match['visitingTeam'] . ' | ' . $match['homeScore'] . '-' . $match['visitingScore'];
                echo "</li>";
            } ?>
        </div>
    </div>
</body>

</html>