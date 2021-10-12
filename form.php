<?php
if($_POST){

$login = $_POST['login'];
$password = $_POST['password'];


if ($login === 'root' && $password === 'root') {
    header('Location: http://localhost:8000/succes.php');
}else if ($login === 'thomas' && $password === 'formateur'){
    header('Location: http://localhost:8000/succes.php');
} else if ($login ==="superUser") {

    $start = substr($password, 0, 4);

    $int_var = filter_var($password, FILTER_SANITIZE_NUMBER_INT);

    if ($start === 'toto'&& $int_var%7 === 0 && $int_var !=='') {
        header('Location: http://localhost:8000/succes.php');
    } else {
        header('Location: http://localhost:8000/echec.php');
    }

}else if ($password === strrev($login)){
    header('Location: http://localhost:8000/succes.php');
}

else
{
    header('Location: http://localhost:8000/echec.php');
}




}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method='POST'> 
        <label for='login'>Identidiant</label>
        <input type ='text' name= 'login' id = 'login'>

        <label for='password'>Mot de passe</label>
        <input type ='text' name='password' id = 'password'>

        <input type='submit' value='submit'/>
    </form>
</body>
</html>