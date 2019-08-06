<?php

function adicionarCategoria ($nomecategoria, $descricaocategoria) {
    $sql = "INSERT INTO categoria (nomecategoria, descricaocategoria) VALUES ('$nomecategoria', '$descricaocategoria')"; 
    $resultado = mysqli_query ($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar categoria'.mysqli_error($cnx));}
    return 'Categoria cadastrada com sucesso! <br> <a href="./categoria/adicionar/" class="btn btn-primary">Voltar</a>';
}

function pegarTodasCategorias (){
    $sql = "SELECT * FROM categoria";
    $resultado = mysqli_query(conn(), $sql);
    $categorias = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $categorias[] = $linha;
    }
    return $categorias; 
}

function pegarCategoriaPorId ($idcategoria) {
    $sql = "SELECT * FROM categoria WHERE idcategoria = $idcategoria";
    $resultado = mysqli_query(conn(), $sql);
    $categorias = mysqli_fetch_assoc($resultado);
    return $categorias;
}

function deletarCategoria ($idcategoria) {
    $sql = "DELETE FROM categoria WHERE idcategoria = $idcategoria";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao deletar categoria' . mysqli_error($cnx));
    }
    return 'Categoria deletada com sucesso!';
}

function editarCategoria ($idcategoria, $nomecategoria, $descricaocategoria){
    $sql = "UPDATE categoria SET nomecategoria = '$nomecategoria', descricaocategoria = '$descricaocategoria' WHERE idcategoria = '$idcategoria'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao alterar categoria' . mysqli_error($cnx));
    }
    return 'Categoria alterada com sucesso!';        
}