<html>
    <head>
        
        <link rel="stylesheet" href="./publico/css/app.css">	
        <title>MarbeUrban</title>
        <meta charset="utf-8">
        <link rel="icon" href="./publico/imagens/cabide.PNG" type="image/x-icon"/>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
        
    <div id="topo">
        <div id="inicio">
        
            <div id="imagemlogo">
                <a href=""> <img src="./publico/imagens/logo.png" width="230px"> </a>
            </div>
        
            <div id="icons">
                <a href="#"> <img src="imagens2/lupa.jpg" width="50px" title="Pesquisar" id="lupa"> </a> 
                <a href="marbeurban.onlinewebshop.net/MarbeUrban/cadastro.html"> <img src="imagens2/rostinho.png" width="50px" title="Login" id="rosto"> </a>
                <a href="marbeurban.onlinewebshop.net/MarbeUrban/carrinho.html"> <img src="imagens2/carrinho2.png" width="43px" title="Meu carrinho" id="carrinho"> </a>
            </div>
        
        </div>   
    </div>
        
        <a href="./cliente/listar"> Listar usuários </a> <br>
        <a href="./produto/listar"> Listar produtos </a> <br>
        <a href="./categoria/listar"> Listar categorias </a>
        
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

    </body>
</html>
