<?php

require_once "modelo/produtoModelo.php";

function adicionar () {
	if (ehPost ()) {
		$nomeproduto = $_POST ["nomeproduto"];
		$preco = $_POST ["preco"];
		$descricao = $_POST["descricao"];
                $tamanho = $_POST["tamanho"];
                $imagem = $_POST["imagem"];
                $estoque_minimo = $_POST ["estoque_minimo"];
                $estoque_maximmo = $_POST ["estoque_maximmo"];
                $errors = array();
                
                if (strlen(trim($nomeproduto)) == 0){
                $errors[] = "Você deve inserir o nome do produto";
                }
                if (strlen(trim($preco)) == 0){
                $errors[] = "Você deve inserir um preço para o produto";
                }
                if (strlen(trim($descricao)) == 0){
                $errors[] = "Você deve inserir uma descrição";
                }
                if (strlen(trim($tamanho)) == 0){
                $errors[] = "Você deve inserir o(s) tamanho(s) de seu produto";
                }
                if (strlen(trim($imagem)) == 0){
                $errors[] = "Você deve inserir uma imagem referente ao roduto";
                }
                if (strlen(trim($estoque_minimo)) == 0){
                $errors[] = "Você deve inserir a quantidade mínima no estoque";
                }
                if (strlen(trim($estoque_maximmo)) == 0){
                $errors[] = "Você deve inserir a quantidade máxima no estoque";
                }
                
            if (count($errors)> 0){
                $dadoserro = array();
                $dadoserro["errors"] = $errors;
                exibir ("produto/formulario", $dadoserro);
            }else {
                $msg = adicionarProduto($nomeproduto, $preco, $descricao, $tamanho, $imagem, $estoque_minimo, $estoque_maximmo );
                echo $msg;
            }
            
        }else {
		exibir ("produtos/formulario");
	}
}

function listar () {
    $dados = array ();
    $dados["produtos"] = pegarTodosProdutos();
    exibir ("produtos/listar", $dados);
}

function ver ($idproduto){
    $dados["produtos"] = pegarProdutoPorId($idproduto);
    exibir ("produtos/visualizar" , $dados);
}

function deletar ($idproduto){
    $msg = deletarProduto($idproduto);
    redirecionar("produto/listar");
}

function editar($idproduto){
    if (ehPost()) {
        $nomeproduto = $_POST ["nomeproduto"];
        $preco = $_POST ["preco"];
	$descricao = $_POST["descricao"];
        $tamanho = $_POST["tamanho"];
        $imagem = $_POST["imagem"];
        $estoque_minimo = $_POST ["estoque_minimo"];
        $estoque_maximmo = $_POST ["estoque_maximmo"];
        
        editarProduto($idproduto, $nomeproduto, $preco, $descricao, $tamanho, $imagem, $estoque_minimo, $estoque_maximmo);
        redirecionar ("produto/listar");
    }else {
        $dados["produto"] = pegarProdutoPorId($idproduto);
        exibir ("produtos/formulario", $dados);
    }
}

