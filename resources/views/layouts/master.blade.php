<!DOCTYPE Html>
<Html dir="ltr" lang="en-US">
<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PXP9462');</script>
	<!-- End Google Tag Manager -->


	<meta http-equiv="content-type" content="text/Html; charset=utf-8" /> 
	<meta name="author" content="Altcel" />

    {{-- @include('meta::manager') --}}

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Stylesheets
	============================================= -->
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,400;1,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{asset('style.css')}}" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('css/custom.css')}}" />
    {{-- {!! Html::style('../css/bootstrap.css') !!} --}}
	{{-- {!! Html::style('pagina/style.css') !!}
	{!! Html::style('pagina/css/swiper.css') !!}
	{!! Html::style('pagina/css/dark.css') !!}
	{!! Html::style('pagina/css/font-icons.css') !!}
	{!! Html::style('pagina/css/animate.css') !!}
	{!! Html::style('pagina/css/magnific-popup.css') !!}
	{!! Html::style('pagina/css/custom.css') !!} --}}

	@yield('head')

  {{-- {!! Html::style('pagina/css/responsive.css') !!} --}}
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Altcel SAPI de CV</title>


	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138045967-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-138045967-1');
	</script>

	<!--<script type="text/javascript" src="//altcel.com/livechat/php/app.php?widget-init.js"></script>-->
	<!-- Start of HubSpot Embed Code --> <script id="hs-script-loader" async defer src="//js.hs-scripts.com/6823504.js"></script> <!-- End of HubSpot Embed Code -->

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="70507d46-40da-4059-a4fa-80ebb4a1b84b" data-blockingmode="auto"></script>



	<script src="//cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>


	<!-- <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.js'></script>
  <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script> -->

</head>

<body class="stretched no-transition" data-loader="7" data-loader-color="#AB0A0A" data-loader-Html="<img src='images/loader_gif.gif' alt='Loader'>" data-animation-in="fadeIn" data-speed-in="1500" data-animation-out="fadeOut" data-speed-out="800">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXP9462"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    <!-- Facebook Pixel Code -->
	<script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '593917278118955');
        fbq('track', 'PageView');
      </script>
      <noscript><img alt="FB" height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=593917278118955&ev=PageView&noscript=1"></noscript>
      <!-- End Facebook Pixel Code -->


	<!-- Document Wrapper ============================================= -->
	<div id="wrapper" class="clearfix ">

		<!-- Header============================================= -->
		<header id="header" class=" transparent-header {{(request() -> is ('/*') ) ? 'header__carru' : ''}}" data-sticky-class="not-dark">



			<nav class="nav__color {{(request() -> is ('recargas*') ) || (request() -> is ('/*')) || (request() -> is ('planes*')) || (request() -> is ('quienesomos*')) || (request() -> is ('soporte*')) ? 'nav_bar' : ''}}">
				<!-- <input type="checkbox" class="mobile-menu" id="mobile-menu"> -->
				<input type="checkbox" id="check">
				<label for="check" class="checkbtn">
					<i class="icon-reorder"></i>
				</label>
				<a href="#" class="enlace">
				    <img class="logoA {{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'img_logo' : ''}}" src="{!! asset('images/Logotipo-01.png') !!}" alt="Altcel">
					<div class="logoE"></div>
				    <!-- <img class="sustituida {{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'img_logo' : ''}}" src="{!! asset('images/logo-rojo.png') !!}" alt="Altcel"> -->
				</a>
				{{-- <a href="{!! URL::to('/') !!}" class=""><img class="logoA" src="{!! asset('images/Logotipo-01.png') !!}" alt="Altcel"></a> --}}
				<ul class="nav__enlaces">
				    <li class="animate__animated animate__backInLeft enlaces__nav_enlaces enlaces__mov1 {{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li' : ''}}"><a class="{{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li_a' : ''}}" href="{!! URL::to('/') !!}">Inicio</a></li>
				    <li class="animate__animated animate__backInLeft enlaces__nav_enlaces {{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li' : ''}}"><a class="{{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li_a' : ''}}" id="test" href="{!! URL::to('recargas') !!}" onclick="myFun()">Recargas</a></li>
				    <li class="animate__animated animate__backInLeft enlaces__nav_enlaces {{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li' : ''}}"><a class="{{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li_a' : ''}}" href="{!! URL::to('quienesomos') !!}">Nosotros</a></li>
				    <li class="animate__animated animate__backInLeft enlaces__nav_enlaces {{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li' : ''}}"><a class="{{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li_a' : ''}}" href="{!! URL::to('planes') !!}">Servicios</a></li>
				    <li class="animate__animated animate__backInLeft enlaces__nav_enlaces link_soport {{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li' : ''}}"><a class="{{(request() -> is ('recargas*') ) || (request() -> is ('planes*')) || (request() -> is ('soporte*')) ? 'nav_li_a' : ''}}" href="{!! URL::to('soporte') !!}">Soporte</a></li>
				</ul>
			</nav> 
			{{-- <section class="menu2nav"></section> --}}

		</header><!-- #header end -->
		

    @yield('content')
	

    {{-- <a href="https://wa.me/34555005500/?text=tu%20texto%20personalizado" target="_blank">
	<img src="{!! asset('images/WhatsApp.png') !!}" width="50" height="50">
  </a> --}}
    <!-- Footer============================================= -->
    <!-- <footer id="footer-redes" style="display: flex; margin-top: 8rem">
	    <div class="col_full center">
		    <div >
			    <div class="row" style="align-content: center">
					<a href="https://www.facebook.com/AltcelMx/"><img class="redes-icon" src="{!! asset('images/Facebook.png') !!}" alt="Facebook"></a>
					<a href="https://www.instagram.com/altcelmx/"><img class="redes-icon" src="{!! asset('images/Instagram.png') !!}" alt="Instagram"></a>
					<a href="https://twitter.com/AltcelMx"><img class="redes-icon" src="{!! asset('images/Twitter.png') !!}" alt="Twitter"></a>
					<a href="https://www.youtube.com/channel/UCAa9VVtFtVk_ehLHdnV41EA?view_as=subscriber"><img class="redes-icon" src="{!! asset('images/Youtube.png') !!}" alt="Youtube"></a>
					<a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta"><img class="redes-icon" src="{!! asset('images/WhatsApp.png') !!}" alt="WhatsApp"></a>
			    </div>
		    </div>
	    </div>
    </footer> -->

    <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">

		<div class="container container__footer">
		    <!-- Footer Widgets
		    ============================================= -->
		    <div class="footer-widgets-wrap clearfix">
			    <!-- <div class="col-md-12">
				    <p class="pFooter">Circuito de la 10a Poniente Norte No. 1050 Interior 1-A. Colonia Vista Hermosa. CP.29030. Tuxtla Gutiérrez, Chiapa.</p> 
			    </div> -->
			   <div class="col_one_third mov-contactanos">
					<div class="widget clearfix">
						<h4 class="text__contac">Contáctanos</h4>
						<div class="fslider  no-image nobg noborder noshadow nopadding contact">
							<div class="flexslider">
								<div class="slider-wrap ">
									<li>E-mail: contacto@altcel.com</li>
									<li>Teléfono: 800 225 8235</li>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			   <div class="col_one_third mov-direcc">
					<div class="widget clearfix">
						<h4 class="text__contac">Dirección</h4>
						<div class="fslider  no-image nobg noborder noshadow nopadding contact">
							<div class="flexslider">
								<div class="slider-wrap">
									<li>Circuito de la 10a Poniente Norte No. 1050 Interior 1-A. Colonia Vista Hermosa. CP.29030. Tuxtla Gutiérrez, Chiapa.</li>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			   <div class="col_one_third col_last mov-ligas">
					<div class="widget quick-contact-widget clearfix direccion">
						<div class="widget clearfix ">
							<h4 class="link__trong" style="margin-top: 5rem;margin-left: 9rem">Ligas de Interes</h4>
							<div class="ligasInteres">
								<li style="list-style: none;">
									<a href="/" class="ligas">
										<!-- <i class="fa fa-angle-right"></i>AVISO DE PRIVACIDAD-->
										AVISO DE PRIVACIDAD
									</a>
								</li>
								<li style="list-style: none;">
									<a href="{!! URL::to('quienesomos') !!}" class="ligas">
										TÉRMINOS Y CONDICIONES
									</a>
								</li>
								<li style="list-style: none;">
									<a href="{!! URL::to('planes') !!}" class="ligas">
										COBERTURA
									</a>
								</li>
								<li style="list-style: none;">
									<a href="{!! URL::to('planes') !!}" class="ligas">
										LEGALES
									</a>
								</li>
								<li style="list-style: none;">
									<a href="{!! URL::to('planes') !!}" class="ligas">
										CONVIÉRTETE EN DISTRIBUIDOR
									</a>
								</li>
							</div>
						</div>
					</div>
			 	</div>

			   <div class="col_one_third col_last mov-redes_soc">
					<div class="widget quick-contact-widget clearfix direccion">
						<div class="widget clearfix ">
							<h4 class="link__trong" style="margin-top: 5rem;margin-left: 9rem">Redes Sociales</h4>
							<div class="ligasInteres">
								<li style="list-style: none;">
									<a href="https://www.facebook.com/AltcelMx/"class="ligas">
										<li style="list-style: none;"><i class="fa-brands fa-facebook"></i>Facebook</li>
									</a>
								</li>
								<li style="list-style: none;">
									<a href="https://www.instagram.com/altcelmx/" class="ligas liga_instragram">
										<li style="list-style: none;"><i class="fa-brands fa-instagram"></i>Instagram</li>
									</a>
								</li>
								<li style="list-style: none;">
									<a href="https://twitter.com/AltcelMx" class="ligas liga_twitter">
										<li style="list-style: none;"><i class="fa-brands fa-twitter"></i>Twitter</li>
									</a>
								</li>
								<li style="list-style: none;">
									<a href="https://www.youtube.com/channel/UCAa9VVtFtVk_ehLHdnV41EA?view_as=subscriber" class="ligas">
										<li style="list-style: none;"><i class="fa-brands fa-youtube"></i>Youtube</li>
									</a>
								</li>
								<li style="list-style: none;">
									<a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta" class="ligas">
										<li style="list-style: none;"><i class="fa-brands fa-whatsapp-square"></i>Whatsapp</li>
									</a>
								</li>
							</div>
						</div>
					</div>
			 	</div>

				 <!-- <div class="col_one_third mov-redes__sociales">
					<div class="widget clearfix mov_contactos">
						<h4>Contáctanos</h4>
						<div class="fslider  no-image nobg noborder noshadow nopadding contact">
							<div class="flexslider">
								<div class="slider-wrap mov_redes__sociales">
									<a href="https://www.facebook.com/AltcelMx/"class="ligas">
										<li><i class="fa-brands fa-facebook"></i>Facebook</li>
									</a>
									<a href="https://www.instagram.com/altcelmx/" class="ligas liga_instragram">
										<li><i class="fa-brands fa-instagram"></i>Instagram</li>
									</a>
									<a href="https://twitter.com/AltcelMx" class="ligas liga_twitter">
										<li><i class="fa-brands fa-twitter"></i>Twitter</li>
									</a>
									<a href="https://www.youtube.com/channel/UCAa9VVtFtVk_ehLHdnV41EA?view_as=subscriber" class="ligas">
										<li><i class="fa-brands fa-youtube"></i>Youtube</li>
									</a>
									<a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta" class="ligas">
										<li><i class="fa-brands fa-whatsapp-square"></i>Whatsapp</li>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->


			   <div class="col_one_third" style="margin-left: 5rem;margin-top: 50px">
				  <div class="widget quick-contact-widget clearfix navlink">
					  {{-- <div class="col-md-3">
						  
							  <li style="list-style: none;"><a href="/" style="color: #CCC"><i class="fa fa-angle-right">Inicio</i></a></li>
							  <li style="list-style: none;"><a href="{!! URL::to('quienesomos') !!}" style="color: #CCC"><i style="color: white" class="fa-user"></i>Nosotros</a></li>
							  <li style="list-style: none;"><a href="{!! URL::to('planes') !!}" style="color: #CCC"><i class="fa fa-angle-right"></i>Paquetes</a></li>
						  
					  </div>
					  <div class="col-md-2">
						  
							  <li style="list-style: none;"><a href="{!! URL::to('soporte') !!}"><i class="fa fa-angle-right"></i>Soporte</a></li>
							  <li style="list-style: none;"><a href="https://altcel2.com/"><i class="fa fa-angle-right"></i>Internet</a></li>
						  
					  </div> --}}
				  </div>
			   </div>
		    </div><!-- .footer-widgets-wrap end -->
		</div>
	 </footer><!-- #footer end -->

	 
</div><!-- #wrapper end -->

<!-- Go To Top============================================= -->
{{-- <div id="gotoTop" class="icon-angle-up"></div> --}}

<!-- External JavaScripts============================================ -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>

<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

{{-- {!! Html::script('pagina/js/jquery.js') !!} --}}
{{-- {!! Html::script('pagina/js/plugins.js') !!} --}}

<!-- Footer Scripts============================================= -->
<script src="{{asset('js/functions.js')}}"></script>
{{-- {!! Html::script('pagina/js/functions.js') !!} --}}


<script >
	var windowHeight = $(window).height();
    var barraAltura = $('.nav_bar').innerHeight();
    $(window).scroll(function(){
        var scroll = $(window > windowHeight).scrollTop();
		console.log(windowHeight);
        if(scroll){
            $('.nav_bar').addClass('fixed');
            $('.enlaces__mov1').addClass('fixed_color');
            $('body').css({'margin-top': barraAltura+'px'});
        }
		else{
            $('.nav_bar').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
        
    });


	function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
	alert("hola");

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion-principal');
	alert("hola");
    navegacion.classList.toggle('mostrar')
}

const menu = document.getElementById('menu');
const indicador = document.getElementById('indicador');
const secciones = document.querySelectorAll('.seccion');

let tamañoIndicador = menu.querySelector('a').offsetWidth;
indicador.style.width = tamañoIndicador + 'px';

let indexSeccionActiva;

// Observer
const observer = new IntersectionObserver((entradas, observer) => {
	entradas.forEach(entrada => {
		if(entrada.isIntersecting){
			// Obtenemos cual es la seccion que esta entrando en pantalla.
			// console.log(`La entrada ${entrada.target.id} esta intersectando`);

			// Creamos un arreglo con las secciones y luego obtenemos el index del la seccion que esta en pantalla.
			indexSeccionActiva = [...secciones].indexOf(entrada.target);
			indicador.style.transform = `translateX(${tamañoIndicador * indexSeccionActiva}px)`;
		}
	});
}, {
	rootMargin: '-80px 0px 0px 0px',
	threshold: 0.2
});

// Agregamos un observador para el hero.
observer.observe(document.getElementById('hero'));

// Asignamos un observador a cada una de las secciones
secciones.forEach(seccion => observer.observe(seccion));

// Evento para cuando la pantalla cambie de tamaño.
const onResize = () => {
	// Calculamos el nuevo tamaño que deberia tener el indicador.
	tamañoIndicador = menu.querySelector('a').offsetWidth;

	// Cambiamos el tamaño del indicador.
	indicador.style.width = `${tamañoIndicador}px`;

	// Volvemos a posicionar el indicador.
	indicador.style.transform = `translateX(${tamañoIndicador * indexSeccionActiva}px)`;
}

window.addEventListener('resize', onResize);



</script>
@yield('scripts')

</body>


</Html>
