<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="box-content no-padding-top">			
			<div class="bloco-img grande title-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-tit-contato.jpg');">
				<h2 class="center bg-cor5">CONTATO</h2>
			</div>

			<div class="container">	
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
						<li>Contato</li>
					</ul>
				</div>
			</div>

			<div class="container container-mobile">
				<h3 class="mobile-750px-hide center">Dúvidas ou sugestões, entre em <strong class="cor5">CONTATO</strong> preenchendo esse formulário, ou fale conosco via telefone ou e-mail.</h3>
				<h3 class="mobile-750px-show center">Dúvidas ou sugestões, entre em contato:</h3>

				<div class="content form">
					<form class="fale-conosco">
						<div class="row">
							<div class="col-6 esq">
								<fieldset>
									<input type="text" name="" placeholder="NOME">
								</fieldset>

								<fieldset>
									<input type="text" name="" placeholder="TELEFONE">
								</fieldset>

								<fieldset>
									<input type="text" name="" placeholder="E-MAIL">
								</fieldset>

								<fieldset>
									<input type="text" name="" placeholder="ASSUNTO">
								</fieldset>
							</div>

							<div class="col-6 dir">
								<fieldset>
									<textarea name="" placeholder="MENSAGEM"></textarea>
								</fieldset>
								<fieldset>
									<button class="enviar">ENVIAR</button>
								</fieldset>
							</div>
						</div>
					</form>
				</div>

			</div>

			<div class="contato-info">
				<div class="container">
						<div class="item-contato-info">
							<div class="ico-contato">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato-1.jpg">
							</div>
							<div class="txt-contato">
								<a href="emailto:sac@massasdaboa.com.br">sac@massasdaboa.com.br</a>
							</div>
						</div>	
						<div class="item-contato-info">
							<div class="ico-contato"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato-2.jpg"></div>
							<div class="txt-contato">
								<span>(48) 9981.4573<br>(48) 3432.3196</span>
							</div>
						</div>	
						<div class="item-contato-info">
							<div class="ico-contato"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-contato-3.jpg"></div>
							<div class="txt-contato">
								<span>0800 646 1416</span>
							</div>
						</div>	
				</div>
			</div>
		</section>

	<?php endwhile; ?>

<?php get_footer(); ?>