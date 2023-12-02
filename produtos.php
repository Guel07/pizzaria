<?php
$id_produto = $_GET["id_produto"];
$valorvenda = $_GET["valorvenda"];
$descricao = $_GET["descricao"];
$imagem = $_GET["imagem"];
?>
<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center"><br>
            <h2 class="mb-4">Monte e Peça sua pizza</h2>
            <p> Peça sua pizza de forma simples e rápida da forma que preferir, conforme seu gosto e criatividade culinária.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="fotoProduto/<?= $imagem; ?>" class="img-thumbnail" alt="...">
        </div>
        <div class="col">
            <div class="container">

                <form name="form1" action="index.php?link=8&acaocar=inserir" method="post"
                    enctype="multipart/form-data">
                    <h3>
                        <?= $descricao ?><br>
                    </h3>
                    <div class="text-danger">
                        <h1> R$
                            <?= $valorvenda ?>
                        </h1>
                    </div>
                    <input type="hidden" name="id_produto" value="<?= $id_produto; ?>">
                    <input type="hidden" name="valorvenda" value="<?= $valorvenda; ?>">
                    <label for="">Observação</label><br>
                    <textarea name="observacao" id="" cols="30" rows="5"></textarea><br>
                    <label for="">Nome</label><br>
                    <input type="text" name="nomecliente"><br>
                    <label for="">Endereço</label><br>
                    <input type="text" name="endereco"><br>
                    <label for="">Quantidade</label><br>
                    <select class="form-select" name="quantidade" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select><br>
                    <br><br><br>
                    <button type="submit" class="btn btn-primary">Confirmar pedido</button>
                </form>
            </div>
        </div>
    </div>
</div>
