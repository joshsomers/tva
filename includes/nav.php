<nav id="site-menu">
	<div class="logo-area">
		<div class="logo"><img src="source/img/logo.svg" alt="" /></div>
		<div class="social-links">
			<a href="#"><i class="fa fa-etsy"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
		</div>
	</div>
	<ul>
		<li class="<?php if ($pagename === 'about'){ echo 'active';} ?>"><a href="about.php">About</a></li>
		<li class="<?php if ($pagename === 'contact'){ echo 'active';} ?>"><a href="contact.php">Contact</a></li>
		<li class="<?php if ($pagename === 'shop'){ echo 'active';} ?>"><a class="btn" href="contact.php">Shop Vinyl</a></li>
	</ul>
</nav>


