<?php get_header(); ?>

	<!-- Breadcrumb -->
	<section style="background-color: #e9ecef;">
		<div class="container max-width" style="max-width: 900px;">
			<div aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Notícias</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Título da notícia com até tantos dígitos que será definido</li>
			  </ol>
			</div>			
		</div>
	</section>
	<!-- Título da sessão Notícias --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-8 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1"><?php the_title(); ?></h2>
			</div>
		</div>
	</section>
	
	<!-- Descrição da Notícia -->
	<section class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto mt-2">
				<!-- Descrição da Notícia -->
		        <p class="description-v-noticia">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras egestas mollis ante, nec sodales quam molesti habitasse platea dictumst. Fusce vitae felis a enim bibendum sodales. Phasellus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		        <small class="text mb-0">Equipe AEBA - Associação dos Empresários do Bairro do Alecrim</small>
				<p><small class="text-muted mt-0">Publicado em <?php echo get_the_date('d/m/y');?></small></p>
				<div class="row-title mb-4"></div>
			</div>
			
			<!-- Imagem da Notícia -->
			<div class="col-lg-8 mx-auto">
				<img src="<?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top rounded-0 border-noticia img-fluid', 'alt' => 'Descrição da imagem'));?>
				<p class="text-center mt-2"><small class="text">Legenda da imagem</small></p>
			</div>
		</div>
	</section>
	<!-- Texto da Notícia -->
	<section class="container">
		<div class="row">
			<div class="col-lg-8 pt-4 mx-auto">
				<p class="text-flow"><?php echo the_excerpt(); ?></p>
			</div>
		</div>
	</section>
    <!-- Ler Mais Notícias -->
	<section class="container">
		<div class="row">
			<div class="col-lg-8 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Ler mais notícias</h2>
				<div class="row-title mb-3"></div>
			</div>
		</div>
	</section>
	<!-- Cards horizontais de outras notícias -->
	<section class="container mt-2">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="card mb-0 border-0">
				  <div class="row no-gutters">
				    <div class="col-md-4 d-md-block d-none">
				      <img src="<?php bloginfo('template_url')?>/assets/img/image-noticia.png" style="width: 100%;" class="" alt="Imagem da Notícia">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body pt-lg-1 pt-sm-3">
				        <a href="#"><h5 class="card-title title-card-noticia">Título da notícia</h5></a>	
				        <p class="card-text card-description-v-noticia">Aliquam erat volutpat. Aliquam pretium odio non leo semper efficitur. Vivamus rhoncus, sem eu luctus interdum, nibh nunc commodo odio, a auctor lacus ante eget odio. In ac fermentum nulla.</p>
				        <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<!-- Linha de divisão das notícias		 -->
			<div class="col-lg-8 mx-auto mt-2">
				<div class="row-title mb-3"></div>
			</div>
		
			<div class="col-lg-8 mx-auto mt-2">
				<div class="card mb-0 border-0">
				  <div class="row no-gutters ">
				    <div class="col-md-4 d-md-block d-none">
                      <img src="<?php bloginfo('template_url')?>/assets/img/image-noticia.png" style="width: 100%;" class="" alt="Imagem da Notícia">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body pt-lg-1 pt-sm-3">
				      	<a href="#"><h5 class="card-title title-card-noticia">Título da notícia</h5></a>			
				        <p class="card-text card-description-v-noticia">Aliquam erat volutpat. Aliquam pretium odio non leo semper efficitur. Vivamus rhoncus, sem eu luctus interdum, nibh nunc commodo odio, a auctor lacus ante eget odio. In ac fermentum nulla.</p>
				        <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<!-- Linha de divisão das notícias		 -->
			<div class="col-lg-8 mx-auto mt-2">
				<div class="row-title mb-3"></div>
			</div>
		</div>
    </section>
    
<?php get_footer(); ?>