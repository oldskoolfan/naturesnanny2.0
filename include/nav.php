<?php $page = preg_replace('/[^A-z\-]/', '', $_SERVER['REQUEST_URI']); ?>
<nav id="desktop-nav">
	<a href="/" class="<?= $page === '' ? 'active' : '' ?>">HOME</a>
	<div id="services" class="<?= $page === 'services' || $page === 'policies'
		|| $page === 'pricing' ? 'nav-placeholder active' : 'nav-placeholder' ?>">
		<span>SERVICES &amp;<br>PRICING</span>
		<div class="nav-wrapper">
			<a href="/services">SERVICES</a>
			<a href="/policies">POLICIES</a>
			<a href="/pricing">PRICING</a>
		</div>
	</div>
	<a href="/testimonials" class="<?= $page === 'testimonials' ? 'active' : '' ?>">TESTIMONIALS</a>
	<div id="photos" class="<?= $page === 'our-friends' || $page === 'remembrance' ?
		'nav-placeholder active' : 'nav-placeholder' ?>">
		<span>PHOTOS</span>
		<div class="nav-wrapper">
			<a href="/our-friends">OUR FRIENDS</a>
			<a href="/remembrance">REMEMBRANCE</a>
		</div>
	</div>
	<a href="/client-form" class="<?= $page === 'client-form' ? 'active' : '' ?>">CLIENT FORM</a>
	<a href="/contact" class="<?= $page === 'contact' ? 'active' : '' ?>">CONTACT</a>
</nav>
