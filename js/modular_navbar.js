const navbarTemplate = document.createElement('template');

navbarTemplate.innerHTML = `
	<link href="/home/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="/home/css/webflow.css" rel="stylesheet" type="text/css">
	<link href="/home/css/uncp-ssbu.webflow.css" rel="stylesheet" type="text/css">
	<!--NAVBAR HTML STUFF GOES HERE-->
	<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-center-container shadow-three w-nav">
		<div class="container">
			<div class="navbar-wrapper-three">
				<a href="/home/index.html" aria-current="page" class="navbar-brand-three w-nav-brand w--current"><img src="/home/images/uncp-logo.svg" loading="lazy" id="UNCP-Logo" alt="" class="image"></a>
				<link rel="prerender" href="/">
					<nav role="navigation" class="nav-menu-wrapper-three w-nav-menu">
						<div class="nav-menu-three">
							<ul role="list" class="nav-menu-block w-list-unstyled">
								<li class="nav-menu-item">
									<a href="/home/about-us.html" target="_blank" class="nav-link non-indicator-link">About</a>
									<link rel="prefetch" href="/about-us">
								</li>
								<li class="nav-menu-item">
									<a href="/home/contact-us.html" class="nav-link non-indicator-link">Contact</a>
								</li>
							</ul>
							<ul role="list" class="nav-menu-block w-list-unstyled">
								<li class="nav-menu-item">
									<a href="/home/accounts/login.php" class="nav-link-accent non-indicator-link">Log In</a>
									<link rel="prerender" href="/accounts/login">
								</li>
								<li class="mobile-margin-top-10">
									<a href="/home/accounts/register.php" class="button-primary w-button">CREATE ACCOUNT</a>
									<link rel="prerender" href="/accounts/register">
								</li>
							</ul>
						</div>
					</nav>
					<div class="menu-button w-nav-button">
						<div class="icon w-icon-nav-menu"></div>
					</div>
			</div>
		</div>
	</div>
	`;

class Navbar extends HTMLElement { constructor() {super();}
	connectedCallback() {
		const shadowRoot = this.attachShadow({mode:'closed'});
		shadowRoot.appendChild(navbarTemplate.content);
	}
}

customElements.define('navbar-modular', Navbar);