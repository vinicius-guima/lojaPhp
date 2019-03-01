
<?php include("conecta.php") ?>
<?php include("banco-produtos.php") ?>
<?php include("cabecalho.php")?>
<?php

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
