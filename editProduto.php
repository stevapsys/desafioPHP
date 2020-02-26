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
    <title>showProduto</title>
</head>
<body>  
    <?php 
    include 'menu.php';
    ?>

<h1 class="titulo">Editar produto</h1>
<form action="enviar.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome do produto</label>
                    <input type="text" name="produto" class="form-control" id="formGroupExampleInput" placeholder="Nome" required>
                </div>
            </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="formGroupExampleInput2">Preço</label>
                <input type="number" name="preço" class="form-control" id="formGroupExampleInput2" placeholder="R$">
            </div>
        </div>
   
        <div class="col-sm-12">
            <div class="decricao">
                <label for="exampleFormControlTextarea1">Descrição do produto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
   
        <br> 
        <div>
            <input type="file" name="foto" required>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </div>
    </div> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>       
</body>
</html>