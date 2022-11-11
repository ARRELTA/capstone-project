const navbarTemplate = document.createElement('template');


navbarTemplate.innerHTML = `
	<style>
		article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary { display: block; }
		* { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
		.w-clearfix:after { clear: both; }
		.w-hidden { display: none; }
		.w-button { display: inline-block; padding: 9px 15px; background-color: #3898EC; color: white; border: 0; line-height: inherit; text-decoration: none; cursor: pointer; border-radius: 0; }
		input.w-button { -webkit-appearance: button; }
		[class*=" w-icon-"] { 
			font-family: 'webflow-icons' !important; speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; 
			line-height: 1; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;
		}
		ul, ol { margin-top: 0px; margin-bottom: 10px; padding-left: 40px; }
		.w-list-unstyled { padding-left: 0; list-style: none; }
		.w-dropdown { display: inline-block; position: relative; text-align: left; margin-left: auto; margin-right: auto; z-index: 900; }
		.w-dropdown-btn, .w-dropdown-toggle, .w-dropdown-link { 
			position: relative; vertical-align: top; text-decoration: none; color: #222222; padding: 20px; text-align: left; 
			margin-left: auto; margin-right: auto; white-space: nowrap;
		}
		.w-dropdown-toggle { -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; display: inline-block; cursor: pointer; padding-right: 40px; }
		.w-dropdown-toggle:focus { outline: 0; }
		.w-icon-dropdown-toggle { position: absolute; top: 0; right: 0; bottom: 0; margin: auto; margin-right: 20px; width: 1em; height: 1em; }
		.w-dropdown-list { position: absolute; background: #dddddd; display: none; min-width: 100%; }
		.w-dropdown-list.w--open { display: block; }
		.w-dropdown-link { padding: 10px 20px; display: block; color: #222222; }
		.w-dropdown-link.w--current { color: #0082f3; }
		.w-dropdown-link:focus { outline: 0; }
		
		.w-nav { position: relative; background: #dddddd; z-index: 1000; }
		.w-nav:before,.w-nav:after { content: " "; display: table; grid-column-start: 1; grid-row-start: 1; grid-column-end: 2; grid-row-end: 2; }
		.w-nav:after { clear: both; }
		.w-nav-brand { position: relative; float: left; text-decoration: none; color: #333333; }
		.w-nav-link { position: relative; display: inline-block; vertical-align: top; text-decoration: none; color: #222222; padding: 20px; text-align: left; margin-left: auto; margin-right: auto; }
		.w-nav-link.w--current { color: #0082f3; }
		.w-nav-menu { position: relative; float: right; }
		[data-nav-menu-open] { display: block !important; position: absolute; top: 100%; left: 0; right: 0; background: #C8C8C8; text-align: center; overflow: visible; min-width: 200px; }
		.w--nav-link-open { display: block; position: relative; }
		.w-nav-overlay { position: absolute; overflow: hidden; display: none; top: 100%; left: 0; right: 0; width: 100%; }
		.w-nav-overlay [data-nav-menu-open] { top: 0; }
		.w-nav[data-animation="over-left"] .w-nav-overlay { width: auto; }
		.w-nav[data-animation="over-left"] .w-nav-overlay, .w-nav[data-animation="over-left"] [data-nav-menu-open] { right: auto; z-index: 1; top: 0; }
		.w-nav[data-animation="over-right"] .w-nav-overlay { width: auto; }
		.w-nav[data-animation="over-right"] .w-nav-overlay,.w-nav[data-animation="over-right"] [data-nav-menu-open] { left: auto; z-index: 1; top: 0; }
		.w-nav-button { 
			position: relative; float: right; padding: 18px; font-size: 24px; display: none; cursor: pointer; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
			tap-highlight-color: rgba(0, 0, 0, 0); -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;
		}
		.w-nav-button:focus { outline: 0; }
		.w-nav-button.w--open { background-color: #C8C8C8; color: white; }
		.w-nav[data-collapse="all"] .w-nav-menu { display: none; }
		.w-nav[data-collapse="all"] .w-nav-button { display: block; }
		.w--nav-dropdown-open { display: block; }
		.w--nav-dropdown-toggle-open { display: block; }
		.w--nav-dropdown-list-open { position: static; }
		.container { width: 100%; max-width: 1220px; margin-right: auto; margin-left: auto; }
		.navbar-logo-center-container { z-index: 5; width: 1030px; max-width: 100%; margin-right: auto; margin-left: auto; padding: 20px; background-color: transparent; }
		.navbar-logo-center-container.shadow-three {
			position: fixed; top: 0px; bottom: auto; z-index: 5; display: block; width: 100%; height: 84px; max-height: none; max-width: 100%;
			min-width: 100%; margin-right: 0px; margin-left: 0px; padding-right: 20px; -webkit-box-pack: center; -webkit-justify-content: center;
			-ms-flex-pack: center; justify-content: center; background-color: rgba(0, 0, 0, 0.69); text-align: center;
		}
		.navbar-wrapper-three {
			position: relative; display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; -webkit-box-pack: center; -webkit-justify-content: center;
			-ms-flex-pack: center; justify-content: center; -webkit-box-align: center; -webkit-align-items: center; -ms-flex-align: center; align-items: center;
		}
		.navbar-brand-three { position: absolute; z-index: 5; width: 12.5%; height: auto; -webkit-box-flex: 0; -webkit-flex: 0 0 auto; -ms-flex: 0 0 auto; flex: 0 0 auto; }
		.nav-menu-wrapper-three { width: 100%; -webkit-align-self: center; -ms-flex-item-align: center; -ms-grid-row-align: center; align-self: center;}
		.nav-menu-three {
			display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; width: auto; max-width: none; margin-right: auto; margin-bottom: 0px; margin-left: auto;
			padding-right: 2%; padding-left: 2%; -webkit-box-pack: justify; -webkit-justify-content: space-between; -ms-flex-pack: justify; justify-content: space-between; -webkit-box-align: center;
			-webkit-align-items: center; -ms-flex-align: center; align-items: center; text-align: left; -o-object-fit: fill; object-fit: fill;
		}
		.nav-menu-block {
			display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; margin-bottom: 0px; -webkit-box-pack: center; -webkit-justify-content: center; -ms-flex-pack: center;
			justify-content: center; -webkit-box-align: center; -webkit-align-items: center; -ms-flex-align: center; align-items: center;
		}
		.nav-link {
			margin-right: 5px; margin-left: 5px; padding: 5px 10px; -webkit-backface-visibility: visible; backface-visibility: visible; -webkit-transition: color 200ms ease;
			transition: color 200ms ease; color: #fff; font-size: 14px; line-height: 20px; font-weight: 600; letter-spacing: 0.25px; text-decoration: none;
		}
		.nav-link:hover { color: #e24309; }
		.nav-link:focus-visible { border-radius: 4px; outline-color: #0050bd; outline-offset: 0px; outline-style: solid; outline-width: 2px; color: #0050bd; }
		.nav-link[data-wf-focus-visible] { border-radius: 4px; outline-color: #0050bd; outline-offset: 0px; outline-style: solid; outline-width: 2px; color: #0050bd; }
		.nav-link.non-indicator-link:hover { color: #e24309; }
		.nav-link.non-indicator-link:active { color: #e24309; }
		.nav-link.non-indicator-link:visited { color: #fff; }
		.nav-dropdown { margin-right: 5px; margin-left: 5px; color: #fff; }
		.nav-dropdown:hover { color: #fff; }
		.nav-dropdown-toggle { display: block; padding: 5px 30px 5px 10px; color: #fff; font-size: 14px; line-height: 20px; letter-spacing: 0.25px; mix-blend-mode: normal; }
		.nav-dropdown-toggle:hover { color: #e24309; }
		.nav-dropdown-toggle:focus-visible { border-radius: 5px; outline-color: #e24309; outline-offset: 0px; outline-style: solid; outline-width: 2px; color: #e24309; }
		.nav-dropdown-toggle[data-wf-focus-visible] { border-radius: 5px; outline-color: #e24309; outline-offset: 0px; outline-style: solid; outline-width: 2px; color: #e24309; }
		.nav-dropdown-icon { margin-right: 10px; -webkit-transition: color 200ms ease; transition: color 200ms ease; color: #fff; font-weight: 600; }
		.nav-dropdown-icon:hover { color: #e24309; }
		.nav-dropdown-list { border-radius: 12px; background-color: #fff; }
		.nav-dropdown-list.w--open { padding-top: 10px; padding-bottom: 10px; }
		.nav-dropdown-link { padding-top: 5px; padding-bottom: 5px; -webkit-transition: color 200ms ease; transition: color 200ms ease; font-size: 14px; }
		.nav-dropdown-link:hover { color: #e24309; }
		.nav-dropdown-link:focus-visible { border-radius: 5px; outline-color: #0050bd; outline-offset: 0px; outline-style: solid; outline-width: 2px; color: #0050bd; }
		.nav-dropdown-link[data-wf-focus-visible] { border-radius: 5px; outline-color: #0050bd; outline-offset: 0px; outline-style: solid; outline-width: 2px; color: #0050bd; }
		.nav-dropdown-link:visited { color: #000; }
		.nav-dropdown-link.admin-link { display: block; }
		.nav-dropdown-link.admin-link.w--current { color: #000; }
		.nav-dropdown-link.admin-link.w--current:hover { color: #e24309; }
		.nav-dropdown-link.admin-link.w--current:focus { color: #e24309; }
		.nav-link-accent { 
			margin-right: 20px; margin-left: 5px; padding: 5px 10px; -webkit-transition: color 200ms ease; transition: color 200ms ease; 
			color: #fff; font-size: 14px; line-height: 20px; font-weight: 600; letter-spacing: 0.25px; text-decoration: none;
		}
		.nav-link-accent:hover { color: #e24309; }
		.nav-link-accent.non-indicator-link:hover { color: #e24309; }
		.nav-link-accent.non-indicator-link:active { color: #e24309; }
		.nav-link-accent.non-indicator-link:visited { color: #fff; }
		.button-primary {
			padding: 12px 25px; border-top-left-radius: 25px; border-bottom-right-radius: 25px; background-color: #fff; -webkit-backface-visibility: hidden;
			backface-visibility: hidden; -webkit-transition: all 250ms cubic-bezier(.251, .469, .099, .796); transition: all 250ms cubic-bezier(.251, .469, .099, .796);
			color: #000; font-size: 12px; line-height: 20px; font-style: normal; font-weight: 800; letter-spacing: 2px; text-transform: uppercase;
		}
		.button-primary:hover { background-color: #e24309; color: #fff; }
		.button-primary:active { background-color: #e24309; }
		.button-primary:visited { background-color: #fff; color: #000; }
		.image { position: static; left: 0%; top: 0%; right: 0%; bottom: 0%; width: 100%; height: auto; max-height: 100%; min-height: 54px; min-width: auto; margin-bottom: 2%; float: none; clear: none; }
		.text-block { -webkit-transition: color 200ms ease; transition: color 200ms ease; font-weight: 600; }
		
	</style>
	<!--NAVBAR HTML STUFF GOES HERE-->
	<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-center-container shadow-three w-nav">
		<div class="container">
			<div class="navbar-wrapper-three">
				<a href="index.html" aria-current="page" class="navbar-brand-three w-nav-brand w--current"><img src="images/uncp-logo.svg" loading="lazy" id="UNCP-Logo" alt="" class="image"></a>
				<link rel="prerender" href="/">
					<nav role="navigation" class="nav-menu-wrapper-three w-nav-menu">
						<div class="nav-menu-three">
							<ul role="list" class="nav-menu-block w-list-unstyled">
								<li class="nav-menu-item">
									<a href="about-us.html" target="_blank" class="nav-link non-indicator-link">About</a>
									<link rel="prefetch" href="/about-us">
								</li>
								<li class="nav-menu-item">
									<a href="contact-us.html" class="nav-link non-indicator-link">Contact</a>
								</li>
								<li class="nav-menu-item">
									<div data-hover="false" data-delay="0" class="nav-dropdown w-dropdown">
										<div class="nav-dropdown-toggle w-dropdown-toggle" id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
											<div class="text-block">Tournaments</div>
											<div class="nav-dropdown-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
										</div>
										<nav class="nav-dropdown-list shadow-three mobile-shadow-hide w-dropdown-list" id="w-dropdown-list-0" aria-labelledby="w-dropdown-toggle-0">
											<a href="tournaments/view-tournaments.html" class="nav-dropdown-link w-dropdown-link" tabindex="0">Upcoming</a>
											<a href="tournaments/view-tournaments.html" class="nav-dropdown-link w-dropdown-link" tabindex="0">Ongoing</a>
											<a href="#" class="nav-dropdown-link w-dropdown-link" tabindex="0">Recent Winners</a>
											<a href="tournaments/new-tournament.html" class="nav-dropdown-link admin-link w-dropdown-link" tabindex="0">Create Tournament</a>
											<a href="tournaments/delete-tournament.html" class="nav-dropdown-link admin-link w-dropdown-link" tabindex="0">Delete Tournament</a>
											<a href="tournaments/edit-tournament.html" class="nav-dropdown-link admin-link w-dropdown-link" tabindex="0">Edit Tournament</a>
										</nav>
									</div>
								</li>
							</ul>
							<ul role="list" class="nav-menu-block w-list-unstyled">
								<li class="nav-menu-item">
									<a href="./accounts/login.php" class="nav-link-accent non-indicator-link">Log In</a>
									<link rel="prerender" href="/accounts/login">
								</li>
								<li class="mobile-margin-top-10">
									<a href="./accounts/register.php" class="button-primary w-button">CREATE ACCOUNT</a>
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