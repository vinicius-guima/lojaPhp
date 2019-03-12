<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-categorias.php");


	$categorias = listaCategorias($conexao);
 ?>

<form action="adiciona-produto.php" method="post">
	<table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" class="form-control" name="nome" /></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input type="number" class="form-control" name="preco" /></td>
            </tr>
						<tr>
								<td>Descricao</td>
								<td><textarea class="form-control" name="descricao"></textarea></td>
						</tr>
            <tr>
              <td>Usado?<input type="checkbox" name="usado" value="true"></td>
            </tr>
						<tr>
							<td>Categoria</td>
							<td>
                <select name="categoria_id" class="form-control">
                  <?php foreach ($categorias as $categoria ): ?>
                    <option value="<?=$categoria['id']?>"><?=$categoria['nome']?><br></option>
                  <?php endforeach ?>
                </select>
						</td>
						<tr>
                <td></td>
                <td><input type="submit" value="Cadastrar" class="btn btn-primary" /></td>
            </tr>
						</tr>
        </table>
</form>
<?php include ("rodape.php")?>
