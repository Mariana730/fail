<?php

require_once "modelo/categoriaModelo.php";

function adicionar (){
    if (ehPost ()){
        $nomecategoria = $_POST["nomecategoria"];
        $descricaocategoria = $_POST["descricaocategoria"];
        $errors = array();
        
        if (strlen(trim($nomecategoria)) == 0){
            $errors[] = "Você deve inserir um nome para a categoria";
        }
        if (strlen(trim($descricaocategoria)) == 0){
            $errors[] = "A descrição da categoria criada é obrigatória";
        }
        
        if (count($errors)> 0){
                $dadoserro = array();
                $dadoserro["errors"] = $errors;
                exibir ("categoria/formulario", $dadoserro);
        }else {
                $msg = adicionarCategoria($nomecategoria, $descricaocategoria);
                echo $msg;
        }  
   
    }else {
        exibir ("categoria/formulario");
    }
}

function listar () {
    $dados = array ();
    $dados["categorias"] = pegarTodasCategorias();
    exibir ("categoria/listar", $dados);
}

function ver ($idcategoria){
    $dados["categorias"] = pegarCategoriaPorId($idcategoria);
    exibir ("categoria/visualizar" , $dados);
}

function deletar ($idcategoria){
    $msg = deletarCategoria($idcategoria);
    redirecionar("categoria/listar");
}

function editar ($idcategoria) {
    if (ehPost()) {
        $nomecategoria = $_POST["nomecategoria"];
        $descricaocategoria = $_POST["descricaocategoria"];
        
        editarCategoria ($idcategoria, $nomecategoria, $descricaocategoria);
        redirecionar ("categoria/listar");
    }else {
        $dados["categorias"] = pegarCategoriaPorId ($idcategoria);
        exibir ("categoria/formulario", $dados);
    }
}