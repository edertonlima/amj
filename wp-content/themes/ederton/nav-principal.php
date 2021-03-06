<nav class="nav nav-principal">	
	<ul>
		<li class="logo">
		</li>

		<li class="<?php if ( is_front_page() ) : echo 'ativo'; endif ?>">
			<a href="<?php echo get_home_url(); ?>" title="">HOME</a>
		</li>

		<li class="<?php if ( is_page('sobre-nos') ) : echo 'ativo'; endif ?>">
			<a href="<?php echo get_permalink(get_page_by_path('sobre-nos')); ?>" title="">SOBRE NÓS</a>
		</li>

		<li class="<?php if ( is_home('produtos') ) : echo 'ativo'; endif ?>">
			<a href="<?php echo get_permalink(get_page_by_path('produtos')); ?>" title="">PRODUTOS</a>
		</li>

		<li class="<?php if ( is_page('funcionamiento') ) : echo 'ativo'; endif ?>">
			<a href="<?php echo get_home_url(); ?>/receitas" title="">RECEITAS</a>
		</li>

		<li class="<?php if ( is_page('contato') ) : echo 'ativo'; endif ?>">
			<a href="<?php echo get_permalink(get_page_by_path('contato')); ?>" title="">CONTATO</a>
		</li>
	</ul>
</nav>

<a href="javascript:" class="menu-mobile">
	<i class="fas fa-bars"></i>
	<i class="fas fa-times"></i>
</a>

<a href="javascript:" class="ico-search">
	<i class="fas fa-search"></i>
</a>