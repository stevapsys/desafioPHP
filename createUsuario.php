<?php 
session_start();
if(isset($_POST['adicionar'])){
  $erro = [];

$nome = $_POST['nome'];
if(empty($_POST['nome'])) {
    $erro[] = $_SESSION['vazioNome'] = "Digite seu nome";
}


  $email = $_POST['email'];
  if(empty($_POST['email'])) {
    $erro[] = $_SESSION['vazioEmail'] = "Digite o e-mail";
  }


  $senha = $_POST['senha'];
    if( !isset( $senha[5] ) ) {
    $erro[] = $_SESSION['vazioSenha'] = 'Sua senha deve possuir no mínimo 6 caracteres!';
    }

    $senhaConf = $_POST['senhaConfirma'];
    if ($senha != $senhaConf) {
        $erros['vazioSenhaConfirma'] = "A confirmação de senha não confere.";
    } 
}


// criptografando senha
$hash = password_hash($senha, PASSWORD_DEFAULT);

// criando novo usuário
$novoUsuario = [
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'senha' => $hash
];

if (empty($erros)) {
    fopen('usuarios.json', 'a+');
// adicionando usuario
    $arrayUsuarios[] = $novoUsuario;
// transformar array em json
    $novoUsuarioJson = json_encode($arrayUsuarios);
// salvar json no arquivo
    file_put_contents('./includes/usuarios.json', $novoUsuarioJson);
//criando id

    $id['id'] = id($arrayUsuarios);
    $usuariosarray[] = $id;
    }


//transformando o json em array
function usuarioNovo() {
    $usuarios = file_get_contents('./includes/usuarios.json' ); 
    $arrayUsuarios = json_decode($usuarios, true);
    return $usuarios;
}

//criando id
function id($arrayUsuarios)
{
    $posicao = (count($arrayUsuarios) - 1);
    if ($posicao >= 0) {
        $ultimo_id = $arrayUsuarios[$posicao]['id'];
        return $ultimo_id + 1;
    } else {
        return 1;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Usuário</title>
</head>
<body>
<?php 
 include 'menu.php';
?>
<div class="container my-5">
    <div class="row">
        <div class="col-4" >
            <div class="border">
            <table class="table container">
                <thead>
                <tr>
                    <th class="border-0"> <h4>Usuários </h4></th>
                    <th class="border-0"></th>
                </tr>
                </thead>

                <tbody>
                    <?php foreach($arrayUsuarios as $i=>$usuario): ?>
                    <tr>
                        <td class="border-bottom"><?= $usuario['nome'] ?>
                        <br>
                        <?= $usuario['email'] ?>                        </td>
                        <td class="border-bottom">
                            <div>
                                <button type="button" class="btn btn-info"> 
                                <a href="editUsuario.php" style="color:#fff;">
                                Editar 
                                </a>
                                </button>
                                <button type="button" class="btn btn-danger" href="deletarUsuario.php?id=<?php echo $user['id']?>">Excluir</button>
                           </form> </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>

            </tbody>
        </table>
        </div>
    </div>
        
        <div class="col-8">
            <h3 class="titulo">Criar usuário</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="name" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
                    <?php
                    if (!empty($_SESSION['vazioNome'])) {
                    echo "<p style='color:#f00;'>" . $erro[0] . "</p>";
                    unset($_SESSION['vazioNome']);
                    }
      ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <?php
                    if (!empty($_SESSION['vazioEmail'])) {
                    echo "<p style='color:#f00;'>" . $erro[1] . "</p>";
                    unset($_SESSION['vazioEmail']);
                    }
                    ?>
                </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <small id="emailHelp" class="form-text text-muted">Minímo 6 caracteres</small>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                    <?php
                    if (!empty($_SESSION['vazioSenha'])) {
                    echo "<p style='color:#f00;'>" . $erro[2] . "</p>";
                    unset($_SESSION['vazioSenha']);
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmar senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senhaConfirma">
                    <?php
                    if (!empty($_SESSION['vazioSenhaConfirma'])) {
                    echo "<p style='color:#f00;'>" . $erro[3] . "</p>";
                    unset($_SESSION['vazioSenhaConfirma']);
                    }
                    ?>
                </div>


                <button type="submit" class="btn btn-primary btn-lg btn-block" name="adicionar">Adicionar</button>
            </form>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>