<h2>Listar Categorias</h2>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ver detalhes</th>
            <th>Alterar</th>
            <th>Deletar a categoria</th>
            
        </tr>
    </thead>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria['nomecategoria']?></td>
        <td><?=$categoria['descricaocategoria']?></td>
        <td><a href="./categoria/ver/<?=$categoria['idcategoria']?>">Ver</a></td>
        <td><a href="./categoria/editar/<?=$categoria['idcategoria']?>">Alterar</a></td>
        <td><a href="./categoria/deletar/<?=$categoria['idcategoria']?>">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="./categoria/adicionar/" class="btn btn-primary">Nova categoria</a>

