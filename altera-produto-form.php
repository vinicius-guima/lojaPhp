<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-categorias.php");
 include("banco-produtos.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";

?>
<h1>altera Produto</h1>
<form action="altera-produto.php" method="post">
  <input type="hidden" name="id" value="<?=$produto['id']?>">
	<table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" class="form-control" name="nome" value="<?=$produto['nome']?>" /></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input type="number" class="form-control" name="preco" value="<?=$produto['preco']?>"/></td>
            </tr>
						<tr>
								<td>Descricao</td>
								<td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
						</tr>
            <tr>
              <td>Usado?<input type="checkbox" name="usado" <?=$usado?> value="true"></td>
            </tr>
						<tr>
							<td>Categoria</td>
							<td>
                <select name="categoria_id" class="form-control">
                  <?php foreach ($categorias as $categoria):
                      $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                      $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                    <option value="<?=$categoria['id']?>" <?=$selecao?>> <?=$categoria['nome']?></option>
                  <?php endforeach ?>
                </select>
						</td>
						<tr>
                <td></td>
                <td><input type="submit" value="Alterar" class="btn btn-primary" /></td>
            </tr>
						</tr>
        </table>
</form>
<?php include ("rodape.php")?>
