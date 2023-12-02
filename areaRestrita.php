<?php 
if(!isset($_SESSION['usuarioLogado'])){
    header("location:index.php?link=11");
}else{
    $acao = 'recuperar';
    require_once 'produto.controller.php';
   $acaocar = 'recuperarVendas';
   require_once 'carrinho.controller.php';
   $acao = 'recuperar';
    require_once 'usuario.controller.php';
}
?>
<table class="table">
    <h1>Usuários</h1>
 <thead>
    <tr>
        <th scope="col">
            Nome
        </th>
      
        <th scope="col">
           
        </th>
        <th scope="col">
            
        </th>
    </tr>
 </thead>
<?php foreach ($usuario as $key => $usuario) {?>

 <tbody>
    <tr>
        <td><?= $usuario->nome?></td>
        
        <td><a href="index.php?link=2&metodo=alterar&id=<?= $usuario->id?>"> Alterar</a></td>
        <td><a href="index.php?link=2&metodo=excluir&id=<?= $usuario->id?>"> Excluir</a></td>
    </tr>
 </tbody>

<?php }?>
</table>
<table class="table">
    <h1>Produtos</h1>
 <thead>
    <tr>
        <th scope="col">
            Descrição
        </th>
        <th scope="col">
            Imagem
        </th>
        <th scope="col">
           
        </th>
        <th scope="col">
            
        </th>
    </tr>
 </thead>
<?php foreach ($produto as $key => $produto) {?>

 <tbody>
    <tr>
        <td><?= $produto->descricao?></td>
        <td><img src="fotoProduto/<?= $produto->foto?>" width="40" height="40"></td>
        <td><a href="index.php?link=3&metodo=alterar&id=<?= $produto->id?>"> Alterar</a></td>
        <td><a href="index.php?link=3&metodo=excluir&id=<?= $produto->id?>"> Excluir</a></td>
    </tr>
 </tbody>

<?php }?>
</table>
<a href="index.php?link=3">Cadastro de Produto</a>
<hr>
<table class="table">
    <h1>Relatório de Vendas</h1>
 <thead>
    <tr>
        <th scope="col">
            Descrição
        </th>
        <th scope="col">
            Imagem
        </th>
        <th scope="col">
           Valor da venda
        </th>
        <th scope="col">
            
        </th>
    </tr>
 </thead>
<?php foreach ($carrinho as $key => $carrinho) {?>

 <tbody>
    <tr>
        <td><?= $carrinho->descricao?></td>
        <td><img src="fotoProduto/<?= $carrinho->foto?>" width="40" height="40"></td>
        <td><?= $carrinho->valorvenda?>
     </td>
        <td><a href="index.php?link=3&metodo=excluir&id=<?= $carrinho->id?>"> Excluir</a></td>
    </tr>
 </tbody>

<?php }?>
</table>
<a href="index.php?link=3">Cadastro de Produto</a>