<!-- ## Snack 2
Passare come parametri GET name, mail e age e 
verificare (cercando i metodi che non conosciamo 
nella documentazione) che name sia più lungo di 3 
caratteri, che mail contenga un punto e una chiocciola 
e che age sia un numero. Se tutto è ok stampare “Accesso 
riuscito”, altrimenti “Accesso negato” -->

<?php
$name = key_exists('name', $_GET) ? $_GET['name'] : ' ';
$mail = key_exists('mail', $_GET) ? $_GET['mail'] : ' ';
$age = key_exists('age', $_GET) ? $_GET['age'] : ' ';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
    <title>Snack 2</title>
</head>

<body>

    <div class="container">
        <form>
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameInput" name='name' value='<?php echo $name ?>' />
            </div>
            <div class="mb-3">
                <label for="mailInput" class="form-label">Mail</label>
                <input type="mail" class="form-control" id="mailInput" name='mail' aria-describedby="emailHelp" value='<?php echo $mail ?>' />
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="ageInput" class="form-label">Age</label>
                <input type="number" class="form-control" id="ageInput" name='age' value='<?php echo $age ?>' />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>