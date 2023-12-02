<?php
$acao = 'recuperar';
require_once 'produto.controller.php';

?>


<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center"><br>
            <h2 class="mb-4">Cardápio</h2>
            <p>Peça sua pizza de forma simples e rápida da forma que preferir, conforme seu gosto e criatividade culinária.</p>
        </div>
    </div>
</div>
<div class="container-wrap">

    <div class="row no-gutters d-flex">
        <?php foreach ($produto as $indice => $produto) { ?>
           
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <!--<img src="fotoProduto/" width="200" height="200" alt="">-->
                        <a href="#" class="img" style="background-image: url(fotoProduto/<?= $produto->foto; ?>);"></a>
                        <div class="text p-4">
                            <h3>
                                <?= $produto->descricao; ?>
                            </h3>
                            <p>
                                <?= $produto->ingredientes; ?>
                            </p>
                            <p class="price"><span>
                                    <?= $produto->valorcusto * 1.8; ?>
                                </span> <a href="index.php?link=7&id_produto=<?=$produto->id;?>&valorvenda=<?=$produto->valorcusto * 1.8;?>&imagem=<?=$produto->foto;?>&descricao=<?=$produto->descricao?>" class="ml-2 btn btn-white btn-outline-white">Pedir</a></p>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>
<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">PREFERIDAS DA CASA</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Preço das pizzas mais vendidas nos ultimos dias e com as melhores avaliações dos clientes</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Italiana</span></h3>
	        				<span class="price">R$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pizza Italiana: ingredientes...</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza com Bacon</span></h3>
	        				<span class="price">R$29.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pizza com Bacon: ingredientes...</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-3.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza quatro Queijos</span></h3>
	        				<span class="price">R$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pizza quatro Queijos: ingredientes...</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-4.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Grega</span></h3>
	        				<span class="price">R$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pizza Grega: ingredientes...</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Bacon crocante fino</span></h3>
	        				<span class="price">R$49.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Bacon crocante fino: ingredientes...</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza de Frango</span></h3>
	        				<span class="price">R$81.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pizza de Frango: ingredientes...</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Doce (chocolate com morango)</span></h3>
	        				<span class="price">R$198.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pizza Doce: ingredientes...</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza de Calabresa</span></h3>
	        				<span class="price">R$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pizza de Calabresa: ingredientes...</p>
	        			</div>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>
    <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center"><br>
            <p> Para mais avaliações e críticas siga em "Contato" para dar o seu FeedBack para que possamos melhorar em prol do cliente .</p>
        </div>
    </div>
</div>