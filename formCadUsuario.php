<?php 
    if(isset($_GET['metodo']))
    {
        $metodo = $_GET['metodo'];
        $id = $_GET['id'];
        $acao = 'recuperarUsuario';
        require_once 'usuario.controller.php';
        foreach ($usuario as $key => $usuario) 
        {
            $nome = $usuario->nome;
            $email = $usuario->email;
            $senha = $usuario->senha;
            
        }
    }
?>

<div class="container"><br>
    <h1>Cadastro de usuário</h1>
    <form name="form1" action="index.php?link=10&acao=<?php if(!isset($metodo)){echo 'inserir';}else if($metodo == 'alterar'){echo 'alterar';}else if($metodo == 'excluir'){echo 'excluir';}?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nome</label>
            <input type="name" name="nome" class="form-control" id="" value="<?php if(isset($nome)){echo $nome;}else{echo '';}?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" id="" value="<?php if(isset($email)){echo $email;}else{echo '';}?>">
        </div>
        <div class="form-group">
            <label for="">Senha</label>
            <input type="password" name="senha" class="form-control" id="" value="<?php if(isset($senha)){echo $senha;}else{echo '';}?>">
        </div>
        <input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}else{ echo '';}?>">
        <button type="submit" class="btn btn-primary"><?php if(!isset($metodo)){echo 'inserir';}else if($metodo == 'alterar'){echo 'alterar';}else if($metodo == 'excluir'){echo 'excluir';}?></button>
    </form>
</div>