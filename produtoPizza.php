<?php
 $acao='recuperar';
 require_once 'produto.controller.php';

?>

<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Hot Pizza Meals</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
			<?php foreach($produto as $indice =>$produto) { ?>
    		<div class="row no-gutters d-flex">
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
						<img src="fotoProduto/<?= $produto->foto; ?>"  width="200" height="200" alt="">
    					<!-- <a href="#" class="img" style="background-image: url(fotoProduto/);"></a>-->
    					<div class="text p-4">
    						<h3><?= $produto->descricao;?></h3>
    						<p><?= $produto->ingredientes;?> </p>
    						<p class="price"><span><?= $produto->valorcusto * 1.8;?></span> <a href="#" class="ml-2 btn btn-white btn-outline-white">pedir</a></p>
    					</div>
    				</div>
    			</div>
    			<?php } ?>
<!--
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-4.jpg);"></a>
    					<div class="text p-4">
    						<h3>American Pizza</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
    					</div>
    				</div>
    			</div>
-->
    		</div>
    	</div>