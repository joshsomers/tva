<?php $bodyclass=""; include('includes/header.php'); ?>
<?php $pagename ="home"; include('includes/nav.php'); ?>

<header id="hero-slider">
	<div class="slide bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-6 middle">
					<div class="slide-title">
						<p class="h6">Creative Unique and Inspired</p>
						<h1>Tolhurst Vinyl Art</h1>
						<p class="slide-info">Lorem ipsum Morbi luctus Quisque vulputate arcu molestie. Sed condimentum velit vitae ut eu In Vestibulum ex, quis.</p>
					</div>
				</div>
				<div class="col-md-6 middle">
					<img src="source/img/slide-img.png" alt="" />
				</div>
			</div>
		</div>
	</div>
	<div class="slide bg-grey" style="background-image:url(source/img/slide-img-bowie.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 middle">
					<div class="slide-title">
						<h1>Shop David Bowie</h1>
						<p class="slide-info">Lorem ipsum Morbi luctus Quisque vulputate arcu molestie. Sed condimentum velit vitae ut eu In Vestibulum ex, quis.</p>
						<a href="#" class="btn-w">Shop Bowie</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<section id="featured-artwork">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title center">
					<h3>Featured Artwork</h3>
					<a href="shop.php">View All</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="featured-product">
					<div class="image-outer">
						<div class="product-frame"><img src="source/img/frame-300.jpg" alt="" /></div>
						<div class="product-cover"><img src="source/img/cover-250.jpg" alt="" /></div>
					</div>
					<div class="product-info">
						<p class="product-name">U2 'Hold Me, Thrill Me, Kill Me' Batman Vinyl Record Art</p>
						<p class="product-price">£59.99 <span>plus shipping</span></p>
						<a href="#" class="btn-g">Shop Now</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="featured-product">
					<div class="image-outer">
						<div class="product-frame"><img src="source/img/frame-300.jpg" alt="" /></div>
						<div class="product-cover"><img src="source/img/cover-250.jpg" alt="" /></div>
					</div>
					<div class="product-info">
						<p class="product-name">U2 'Hold Me, Thrill Me, Kill Me' Batman Vinyl Record Art</p>
						<p class="product-price">£59.99 <span>plus shipping</span></p>
						<a href="#" class="btn-g">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="hand-crafted">
	<div class="container">
		<div class="row center">
			<div class="col-md-12 section-title">
				<p class="h6">The Process</p>
				<h2>Hand-made to Perfection</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="process-item center">
					<i class="icon ion-alert"></i>
					<p class="h4">Shape Cutting</p>
					<p>Lorem ipsum Morbi ipsum pharetra vel vitae. Vulputate lorem a metus, Vestibulum elit. Fusce in nostra, a felis. Leo, vel.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="process-item center">
					<i class="icon ion-alert"></i>
					<p class="h4">Cleanup</p>
					<p>Lorem ipsum Morbi ipsum pharetra vel vitae. Vulputate lorem a metus, Vestibulum elit. Fusce in nostra, a felis. Leo, vel.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="process-item center">
					<i class="icon ion-alert"></i>
					<p class="h4">Finalising</p>
					<p>Lorem ipsum Morbi ipsum pharetra vel vitae. Vulputate lorem a metus, Vestibulum elit. Fusce in nostra, a felis. Leo, vel.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="client-reviews">
	<div class="container">
		<div class="row center">
			<div class="col-md-12 section-title">
				<h2>Happy Customers</h2>
			</div>
		</div>
		<div class="review-slider">
			<div class="review-item">
				<div class="social-icon">
					<i class="icon ion social-twitter"></i>
				</div>
				<p class="review-content">Lorem ipsum per sagittis nisi. Ad iaculis, arcu. Hendrerit vel rutrum, consectetur lorem, felis rhoncus Mauris risus. Vel non diam.</p>
				<p class="review-name">John Doe</p>
				<a href="#">Link to the Review</a>
			</div>
		</div>
	</div>
</section>


<?php include('includes/footer.php'); ?>