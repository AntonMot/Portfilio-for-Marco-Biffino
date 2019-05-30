<!-- header
    ================================================== -->
<header class="s-header">

	<nav class="header-nav">

		<a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

		<div class="header-nav__content">
			

			<ul class="header-nav__list">
				<li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
				<li><a class="smoothscroll" href="#about" title="resume">{{ trans('messages.resume') }}</a></li>
				<li><a class="smoothscroll" href="#publications" title="publications">{{ trans('messages.publications') }}</a></li>
				<li><a class="smoothscroll" href="#services" title="services">{{ trans('messages.services') }}</a></li>
				<li><a class="smoothscroll" href="#books" title="book reviews">{{ trans('messages.book_reviews') }}</a></li>
				<li><a class="smoothscroll" href="#calculators" title="calculator reviews">{{ trans('messages.scientific_calculators_reviews') }}</a></li>
				<li><a class="smoothscroll" href="#software" title="software reviews">{{ trans('messages.software_reviews') }}</a></li>
				<li><a class="smoothscroll" href="#contact" title="contact">{{ trans('messages.contacts') }}</a></li>
			</ul>

			<ul class="header-nav__social">
				<li>
					<a target="_blank" href="http://{{ $contacts->facebook}}"><i class="fab fa-facebook"></i></a>
				</li>
				<li>
					<a target="_blank" href="http://{{ $contacts->linkedin }}"><i class="fab fa-linkedin"></i></a>
				</li>
				<li>
					<a target="_blank" href="http://{{ $contacts->twitter }}"><i class="fab fa-twitter"></i></a>
				</li>
				<li>
					<a target="_blank" href="http://{{ $contacts->instagram }}"><i class="fab fa-instagram"></i></a>
				</li>
			</ul>

			<ul class="header-nav__list policy">
				<li><a class="smoothscroll" href="" title="privacy policy" id="show_privacy">Privacy policy</a></li>
				<li><a class="smoothscroll" href="" title="cookie policy" id="show_cookiepolicy">Cookie policy</a></li>
				<li><a class="smoothscroll" href="" title="social media policy" id="show_social">Social media policy</a></li>
				<li><a class="smoothscroll" href="" title="legal policy" id="show_legal">{{ trans('messages.legal_notes') }}</a></li>
			</ul>
		</div>
		<!-- end header-nav__content -->

	</nav>
	<!-- end header-nav -->

	<a class="header-menu-toggle" href="#0">
		<span class="header-menu-icon"></span>
	</a>


</header>
<!-- end s-header -->
