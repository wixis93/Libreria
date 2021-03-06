<!DOCTYPE html>
<html>
<head>
	<title>Libreria-Acerca de</title>
  <meta id="token"  name="token" value="{{ csrf_token() }}">
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
  <link rel="stylesheet" href="/css/panel.css"/>
</head>
<body>
	<header>
  <nav class="blue lighten-1">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo center"><i class="fa fa-book fa-2x"></i>&nbsp Libreria</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">&nbsp &nbsp<i class="fa fa-bars"></i></a>
      <ul class="right hide-on-med-and-down"> 
        <li {{{ (Request::is('ingresar') ? 'class=active' : '') }}}><a href="/logout">{{session()->get('Admin')->nombre}}<i class="fa fa-sign-in"></i>&nbsp LogOut</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
         <li><a href="/ingresar"><i class="fa fa-sign-in"></i>&nbsp Salir</a></li>   
      </ul>
    </div>
  </nav>        
</header>

<div class="container">
@yield('navegacion')
    @yield('content')
</div>

<footer class="page-footer blue lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"><i class="fa fa-book fa-2x"></i>&nbsp Libreria</h5>
                <p class="grey-text text-lighten-4">Los libros que te ayudan más son los que te hacen pensar más. La forma más dura de aprender es con la lectura, pero un gran libro de un gran pensador, es un barco de pensamientos, profundamente cargado verdad y belleza.-Pablo Neruda.</p>
                <a class="grey-text text-lighten-4 btn-social" href="/"><i class="fa fa-cc-visa fa-2x"></i></a>
                <a class="grey-text text-lighten-4 btn-social" href="/"><i class="fa fa-cc-amex fa-2x"></i></a>
                <a class="grey-text text-lighten-4 btn-social" href="/"><i class="fa fa-cc-mastercard fa-2x"></i></a>
                <a class="grey-text text-lighten-4 btn-social" href="/"><i class="fa fa-cc-paypal fa-2x"></i></a>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/tienda">Tienda</a></li>
                  <li><a class="grey-text text-lighten-3" href="/carrito">Carrito</a></li>
                  <li><a class="grey-text text-lighten-3" href="/ingresar">Ingresar</a></li>
                  <li><a class="grey-text text-lighten-3" href="/acerca">Acerca</a></li>
                  <li><a class="grey-text text-lighten-3" href="/contacto">Contacto</a></li>
                </ul>
              </div>
       </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Luis Francisco Guzmán Fuentes
            <a class="grey-text text-lighten-4 right btn-social" href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x"></i></a>
             <a class="grey-text text-lighten-4 right btn-social" href="https://twitter.com/"><i class="fa fa-twitter-square fa-2x"></i></a>
             <a class="grey-text text-lighten-4 right btn-social" href="https://www.youtube.com/"><i class="fa fa-youtube-square fa-2x"></i></a>
            </div>
          </div>
 </footer>

	<script src="/js/jquery-2.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/vue/1.0.21/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>
  @yield('scripts')
</body>