<h2>Listar Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Tamanho</th>
            <th>Imagem</th>
            <th>Estoque mínimo</th>
            <th>Estoque máximo</th> 
            <th>Ver detalhes</th>
            <th>Alterar</th>
            <th>Deletar o usuario</th>
            
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['descricao']?></td>
        <td><?=$produto['tamanho']?></td>
        <td><?=$produto['imagem']?></td>
        <td><?=$produto['estoque_minimo']?></td>
        <td><?=$produto['estoque_maximmo']?></td>  
        <td><a href="./produto/ver/<?=$produto['idproduto']?>">Ver</a></td>
        <td><a href="./produto/editar/<?=$produto['idproduto']?>">Alterar</a></td>
        <td><a href="./produto/deletar/<?=$produto['idproduto']?>">Deletar</a></td>
        
    </tr>
    <?php endforeach; ?>
</table>
<a href="./produto/adicionar/" class="btn btn-primary">Novo produto</a>
