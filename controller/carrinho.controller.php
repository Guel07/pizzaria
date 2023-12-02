<?php 
 require_once "model/carrinho.model.php";
 require_once "service/carrinho.service.php";
 require_once "conexao/conexao.php";

 @$acaocar = isset($_GET['acaocar'])?$_GET['acaocar']:$acaocar;
 @$idcar = isset($_GET['idcar'])?$_GET['idcar']:$idcar;
 

	 if($acaocar == 'inserir')
	 {
		$carrinho = new Carrinho();
		$carrinho->__set('quantidade', $_POST['quantidade']);
        $carrinho->__set('id_produto', $_POST['id_produto']);
        $carrinho->__set('valorvenda', $_POST['valorvenda']);
        $carrinho->__set('nomecliente', $_POST['nomecliente']);
        $carrinho->__set('endereco', $_POST['endereco']);
        $carrinho->__set('observacao', $_POST['observacao']);
		
		$conexao = new Conexao();
		$carrinhoService = new CarrinhoService($carrinho,$conexao);
		$carrinhoService->inserir();

		echo '<script>alert("Pedido realizado com sucesso ;)")</script>
			<meta http-equiv="refresh" content="0;url=index.php?link=1">';


	}

	 if($acaocar == 'recuperar')
	 {
		 $carrinho = new Carrinho();
		 $conexao = new Conexao();

		 $carrinhoService = new CarrinhoService($carrinho,$conexao);
		 $carrinho = $carrinhoService->recuperar();
	 }

	 if($acaocar == 'recuperarCarrinho')
	 {
		 $carrinho = new Carrinho();
		 $conexao = new Conexao();

		 $carrinhoService = new CarrinhoService($carrinho,$conexao);
		 $carrinho = $carrinhoService->recuperarCarrinho($idc);
	 }

	 if($acaocar == 'excluir')
	 {
		 $carrinho = new Carrinho();
		 $conexao = new Conexao();

		 $carrinho->__set('id',$_POST['id']);


		 $carrinhoService = new CarrinhoService($carrinho,$conexao);
		 $carrinhoService->excluir();

		 header('location:index.php?link=5');
	 }
     if($acaocar == 'recuperarVendas')
	 {
		 $carrinho = new Carrinho();
		 $conexao = new Conexao();

		 $carrinhoService = new CarrinhoService($carrinho,$conexao);
		 $carrinho = $carrinhoService->recuperarVendas();
	 }
	 if($acaocar == 'alterar'){
		$carrinho = new Carrinho();
		$carrinho->__set('descricao',$_POST['descricao']);
		$carrinho->__set('ingredientes',$_POST['ingredientes']);
		$carrinho->__set('quantidade',$_POST['quantidades']);
		$carrinho->__set('custo',$_POST['custo']);
		if($_FILES['foto']['name'] !=''){
	    	$carrinho->__set('foto',$_FILES['foto']['name']);
		}else{
			$carrinho->__set('foto',$_SESSION['foto']);	
		}
		$carrinho->__set('id',$_POST['id']);
		
	  
		
		$conexao = new Conexao();
		$carrinhoService = new  CarrinhoService($carrinho,$conexao);
		$carrinhoService->alterar();
		header('location:index.php?link=4');
	 }
/*
	 if($acaocar =='recuperarLoginCli'){
		$cliente = new  Produto();
		$conexao = new Conexao();
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];
	
		$clienteService = new  CarrinhoService($cliente,$conexao);
		$cliente = $clienteService->recuperarLoginCli($email,$senha);
	    print_r($cliente);
		foreach($cliente as $indice => $cliente){
		}
	
		if(!isset($cliente->email)){
			echo '<script>alert("Cliente com email desconhecido")</script>
			<meta http-equiv="refresh" content="0;url=index.php?link=10">';
		}else{
			$_SESSION['clienteLogado']=$cliente->nome;
			$_SESSION['emailLogadocli']=$cliente->email;
			$_SESSION['idLogadocli']=$cliente->id;
			header('location:index.php?link=1');
		}
	
	 }
	 if($acaocar =='sair'){
		session_destroy();
		header('location:index.php?link=1');
	 }
*/
?>