<?php $page = preg_replace('/[^A-z\-]/', '', $_SERVER['REQUEST_URI']); ?>
<nav id="mobile-nav">
	<a href="/" class="<?= $page === '' ? 'active' : '' ?>">HOME</a>
	<a href="/services" class="<?= $page === 'services' ? 'active' : '' ?>">SERVICES</a>
	<a href="/policies" class="<?= $page === 'policies' ? 'active' : '' ?>">POLICIES</a>
	<a href="/pricing" class="<?= $page === 'pricing' ? 'active' : '' ?>">PRICING</a>
	<a href="/testimonials" class="<?= $page === 'testimonials' ? 'active' : '' ?>">TESTIMONIALS</a>
	<a href="/our-friends" class="<?= $page === 'our-friends' ? 'active' : '' ?>">OUR FRIENDS</a>
	<a href="/remembrance" class="<?= $page === 'remembrance' ? 'active' : '' ?>">REMEMBRANCE</a>
	<a href="/client-form" class="<?= $page === 'client-form' ? 'active' : '' ?>">CLIENT FORM</a>
	<a href="/contact" class="<?= $page === 'contact' ? 'active' : '' ?>">CONTACT</a>
</nav>
