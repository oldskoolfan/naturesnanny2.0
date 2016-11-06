$ ->
	$('#Logo').children().first().on 'click', ->
		location.href = "/"

	# Our Friends slideshow
	$('#Slideshow').slidesjs
		width: 800
		height: 600
		play:
			active: false
			auto: true
			effect: "fade"
		pagination:
			active: false
			effect: "fade"
		navigation:
			active: false
			effect: "fade"

	# mobile nav toggle
	toggleNav = ->
		$('html').toggleClass "m-nav-visible"

	$('#m-nav-toggle').on 'click', toggleNav
