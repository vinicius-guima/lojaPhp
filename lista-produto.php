<?php include("banco-produtos.php") ?>
<?php include("cabecalho.php") ?>

<?php
      if (array_key_exists("removido", $_GET) && $_GET['removido'] == true) {
?>
    <p class="alert-success">Produto removido com sucesso.</p>
<?php
      }
 ?>


<?php
$produtos = listaProdutos($conexao);
?>
<table class="table table-striped table-bordered">
  <tr>
    <th scope="col">Nome</th>
    <th scope="col">Preço</th>
    <th scope="col">Descrição</th>
    <th scope="col">Apagar?</th>
  </tr>

<?php
foreach($produtos as $produto) :
?>

    <tr>
        <td><?=$produto['nome'] ?></td>
        <td><?=$produto['preco'] ?></td>
        <td><?=substr($produto['descricao'],0,20) ?></td>
        <td><form action="remove-produto.php" method="post">
          <input type="hidden" name="id" value="<?=$produto['id']?>">
          <button class="btn btn-outline-danger">Remover</button>
        </td>
    </tr>

<?php
endforeach
?>
</table>
