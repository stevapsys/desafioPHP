<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
</head>
<body>  
    <?php 
    include 'menu.php';
    ?>

<form action="enviar.php" method="post" enctype="multipart/form-data">
    <div class="container">
    <h1 class="titulo">Editar usuário</h1>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome </label>
                    <input type="text" name="produto" class="form-control" id="formGroupExampleInput" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="adm@adm.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <small id="emailHelp" class="form-text text-muted">Minímo 6 caracteres</small>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmar senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
        
   
            
        <br> 
        <div>            
            <button type="submit" class="btn btn-warning btn-lg btn-block">Editar</button>
        </div>
    </div> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>       
</body>
</html>