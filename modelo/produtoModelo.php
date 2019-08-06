<?php
function adicionarProduto ($nomeproduto, $preco, $descricao, $tamanho, $imagem, $estoque_minimo, $estoque_maximmo) {
$sql = "INSERT INTO produtos (nomeproduto, preco, descricao, tamanho, imagem, estoque_minimo, estoque_maximmo) VALUES ('$nomeproduto', '$preco', '$descricao', '$tamanho', '$imagem', '$estoque_minimo', '$estoque_maximmo')"; 
$resultado = mysqli_query ($cnx = conn(), $sql);
if(!$resultado) { die('Erro ao cadastrar produto'. mysqli_error($cnx));}
return 'Produto cadastrado com sucesso! <br> <a href="./produto/adicionar/" class="btn btn-primary">Voltar</a>';   
}

function pegarTodosProdutos (){
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $produtos[] = $linha;
    }
    return $produtos; 
}

function pegarProdutoPorId ($idproduto) {
    $sql = "SELECT * FROM produtos WHERE idproduto = $idproduto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = mysqli_fetch_assoc($resultado);
    return $produtos;
}

function deletarProduto ($idproduto) {
    $sql = "DELETE FROM produtos WHERE idproduto = $idproduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao deletar produto' . mysqli_error($cnx));
    }
    return 'Produto deletado com sucesso!';
}

function editarProduto($idproduto, $nomeproduto, $preco, $descricao, $tamanho, $imagem, $estoque_minimo, $estoque_maximmo) {
    $sql  = "UPDATE produtos SET nomeproduto = '$nomeproduto', preco = '$preco', descricao = '$descricao', tamanho = '$tamanho', imagem = '$imagem', estoque_minimo = '$estoque_minimo', estoque_maximmo = '$estoque_maximmo' WHERE idproduto = $idproduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao alterar produto' . mysqli_error($cnx));
    }
    return 'Produto alterado com sucesso!';
}