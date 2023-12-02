<?php
if (isset($_GET['metodo'])) {
    $metodo = $_GET['metodo'];
    $acao = 'recuperarProduto';
    $id = $_GET['id'];
    echo $id;
    require_once 'produto.controller.php';
    foreach ($produto as $index => $produto) {
        $id = $produto->id;
        $descricao = $produto->descricao;
        $ingredientes = $produto->ingredientes;
        $quantidade = $produto->quantidade;
        $custo = $produto->valorcusto;
        $foto = $produto->foto;
        $_SESSION['foto'] = $produto->foto;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
       
            <h1>Cadastro de Produto</h1>
            <form name="form1" class="appointment-form" action="index.php?link=4&acao=<?php if (!isset($metodo)) {
                    echo 'inserir';
                } elseif ($metodo == 'alterar') {
                    echo 'alterar';
                } else {
                    echo 'excluir';
                } ?>" method="post" enctype="multipart/form-data">
                    <div class="d-md-flex">

                    <input type="text" name="descricao" class="form-control" placeholder="Descrição" value="<?php if (isset($descricao)) {
                        echo $descricao;
                    } else {
                        echo '';
                    } ?>">
                </div>
                <div class="mb-3">
                    <label>Ingredientes</label>
                    <input type="text" placeholder="Ingredientes" name="ingredientes" class="form-control" value="<?php if (isset($ingredientes)) {
                        echo $ingredientes;
                    } else {
                        echo '';
                    } ?>">
                </div>
                <div class="mb-3">
                    <label>Quantidade</label>
                    <input type="text" placeholder="Quantidade" name="quantidades" class="form-control" value="<?php if (isset($quantidade)) {
                        echo $quantidade;
                    } else {
                        echo '';
                    } ?>">
                </div>
                <div class="mb-3">
                    <label>Valor de custo</label>
                    <input type="text" placeholder="Valor de custo" name="custo" class="form-control" value="<?php if (isset($custo)) {
                        echo $custo;
                    } else {
                        echo '';
                    } ?>">
                </div>
                <div class="mb-3">
                    <label>Foto</label>
                    <input type="file" placeholder="Foto" name="foto" class="form-control">
                </div>
                <input type="hidden" name="id" value="<?php if (isset($id)) {
                        echo $id;
                    } else {
                        echo '';
                    } ?>">
                <?php
                if (isset($foto)) {
                    echo '<img src="fotoProduto/' . $foto . '" width="100" height="100">';
                }
                ?>
                <input type="submit" class="btn btn-primary" value="<?php if (!isset($metodo)) {
                    echo 'inserir';
                } elseif ($metodo == 'alterar') {
                    echo 'alterar';
                } else {
                    echo 'excluir';
                } ?>">
                <form>
        
    </div>
</body>

</html>