<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();

    $produtosJson = file_get_contents('produtos.json');
	$produtos = json_decode($produtosJson, true);

    $novoProduto = $produtos;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/createProduto.css">
</head>
<body>

    <?php include('menu.php');?>

    <main>
		<h3><?= $novoProduto['produto']; ?></h3>
		<section class="m-3">
            <img src="<?= $novoProduto['foto'] ?>" width="200">
            <dl>
                <dt>Descrição</dt>
                <dd><?= $novoProduto['descricao'] ?></dd>
                <dt>Preço</dt>
                <dd><?= $novoProduto['preco'] ?></dd>
            </dl>
            
            <a href="#" class="btn btn-warning">Editar</a>
            <a class="btn btn-danger btn-xs" href="deleteProduto.php?produto=<?= $posicao ?>" data-toggle="modal" data-target="#delete-modal">Excluir</a></td>      				
		</section>
	</main>

    
</body>
</html>
</body>
</html>