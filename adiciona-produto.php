
<?php include("conecta.php") ?>
<?php include("banco-produtos.php") ?>
<?php include("cabecalho.php")?>
<?php

$nome = $_POST ["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];

if(salvaProduto($conexao, $nome, $preco, $descricao)){
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
