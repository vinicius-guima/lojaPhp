<?php include("cabecalho.php")?>
<?php include("conecta.php") ?>
<?php
function salvaProduto ($conexao, $nome, $preco){
    $sqlquery = "insert into produtos (nome, preco) values ('{$nome}',{$preco})";
    return mysqli_query($conexao, $sqlquery);
}

$nome = $_GET ["nome"];
$preco = $_GET["preco"];

if(salvaProduto($conexao, $nome, $preco)){
?>
  <p class="text-success"><?= $nome ?> de <?=$preco?> R$ adicionado com sucesso!</p>
<?php
}else{
  $msg= mysqli_error($conexao);
?>
  <p class="text-danger"> O prduto não pode ser adicionado!<?= $msg ?></p>
<?php
}
?>
<?php include ("rodape.php")?>
