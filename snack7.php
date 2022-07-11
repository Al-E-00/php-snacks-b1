<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php

$class = [
    [
        'name' => 'Marco',
        'surname' => 'Di Folco',
        'grades' => [
            'math' => '4',
            'geography' => '8',
            'science' => '7',
            'english' => '5'
        ]
    ],
    [
        'name' => 'Roberto',
        'surname' => 'Rossi',
        'grades' => [
            'math' => '7',
            'geography' => '4',
            'science' => '8',
            'english' => '2'
        ]
    ],
    [
        'name' => 'Gianmarco',
        'surname' => 'Pochiero',
        'grades' => [
            'math' => '5',
            'geography' => '9',
            'science' => '8',
            'english' => '3'
        ]
    ],
    [
        'name' => 'Federica',
        'surname' => 'Nadi',
        'grades' => [
            'math' => '3',
            'geography' => '2',
            'science' => '7',
            'english' => '5'
        ]
    ],
    [
        'name' => 'Christian',
        'surname' => 'Scarpati',
        'grades' => [
            'math' => '4',
            'geography' => '10',
            'science' => '7',
            'english' => '8'
        ]
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
    <title>Snack 7</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php for ($i; $i < count($class); $i++) {
                    $student = $class[$i];
                ?>
                    <div class="d-flex">
                        <p> Student:
                            <?php
                            echo ($student['name']) . ' ' . ($student['surname']);
                            ?> </p>
                        <p class='text-warning ps-3'> Grade average:
                            <?php
                                echo $average = round(array_sum(array_values($student['grades'])) / count($student['grades']), 1);
                            ?>
                        </p>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>