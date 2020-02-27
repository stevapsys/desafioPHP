<?php 
$arrayUsuario = json_decode(file_get_contents('usuarios.json'), true);
$Usuarioid = $_GET['id'];
foreach ($arrayUsuario as $i => $id) {
    if ($userID['id'] == $Usuarioid) {
        array_splice($arrayUsuario, $i, 1);
    }
}
file_put_contents('usuarios.json', json_encode($arrayUsuario,JSON_PRETTY_PRINT));



header('Location: createUsuario.php');