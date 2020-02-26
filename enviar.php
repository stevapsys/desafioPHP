<?php
// $pessoas = []; 
// array_push($pessoas, "");
// $pessoas[] = "";


function validacao ($produto,$preco) {
   if(empty($produto)) {
      echo "<p style='color:#f00;'> Adicione um produtos </p>";
    }
   //validando que o preço seja numério
   if(!is_numeric($preco)) {
      echo "<p style='color:#f00;'>O campo de preço deve apenas números</p>";
   }
   
//validando se tem a foto

   if(empty($_FILES['foto'])) {
      echo "Favor adicionar a foto";
   }
}

function carregarProdutos () {
   $produtosJson = file_get_contents("produtos.json");
   $Json = json_decode($produtosJson);
   return $Json;
}

function gravandoProduto ($produtos){
   $produtos = json_encode($produtos);
   file_put_contents("produtos.json",$produtos);
}


$produto = $_POST["produto"];
$preco = $_POST["preco"];
$descricao = $_POST['descricao'];
$imagem = $_FILES['foto']; 

validacao ($produto,$preco);
$produtos = carregarProdutos();

$produtos[] = [
   "nome" => $produto,
   "preco" => $preco, 
   "descricao" => $descricao, 
   "foto" => $imagem
];
gravandoProduto ($produtos);

//$produtos[] = "produto","preco","descricao","foto" 



 //imprimir o conteúdo do arquivo
 //$caminho = $_FILES['foto']['tmp_name'];
//criar a imagem e salvar o conteúdo
// $imagem = file_get_contents($caminho);
//file_put_contents('avatar.jpg', $imagem);

//salvando a foto
$extensoesAceitas = ["image/jpeg", "image/png"]; 
$nomeFoto = $_FILES["foto"]["name"];
$arquivoTmp = $_FILES["foto"]["tmp_name"];
$extensoesFoto = $_FILES['foto']['type'];
$salvarFoto = "imagens/$nomeFoto"; 
if($_FILES['foto']['error'] != UPLOAD_ERR_OK) {
    exit;
}
elseif (!array_search($extensoesFoto,$extensoesAceitas)){
    echo "<p style='color:#f00;'>Extensão do arquivo inválida</p>";
    exit;
}    

move_uploaded_file($arquivoTmp,$salvarFoto);


?> 


