<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Lista de produtos</title>
</head>
<body>
<?php 
 include 'menu.php';
?>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h1>Lista de produtos</h1>
            </div>
        </div>
    </div>
    
    <table class="table container">
        <thead>
            <tr>
                <th class="border">Id</th>
                <th class="border">Nome</th>
                <th class="border">Descricao</th>
                <th class="border">Preço</th>
                <th class="border">Ações</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td class="border"d>1</td>
                    <td class="border"> Nome </td>
                    <td class="border"> Descrição</td>
                    <td class="border"> R$ </td>
                    <td class="border">
                        <button type="button" class="btn btn-info">Editar</button>
                        <button type="button" class="btn btn-danger">Excluir</button>

                    </td>
                </tr>
            </tbody>
    </table>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>