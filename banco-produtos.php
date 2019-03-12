
<?php include("conecta.php");

function listaProdutos($conexao){
  $produtos = array();
  $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_id from produtos
                                          as p join categorias as c on p.categoria_id = c.id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
      }
      return $produtos;
}

 function salvaProduto ($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
     $sqlquery = "insert into produtos (nome, preco, descricao, categoria_id, usado)
                        values ('{$nome}',{$preco}, '{$descricao}',{$categoria_id}, {$usado})";
    echo $sqlquery;
     return mysqli_query($conexao, $sqlquery);
 }

function removeProduto($conexao, $id){
  $sqlquery = "delete from produtos where id = {$id}";
  return mysqli_query($conexao, $sqlquery );
}
