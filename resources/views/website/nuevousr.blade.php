<!DOCTYPE html>
<html>
<head>
	<title>Libreria-Nuevo Usuario</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<header>
  <nav class="blue lighten-1">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo center"><i class="fa fa-book fa-2x"></i>&nbsp Libreria</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">&nbsp &nbsp<i class="fa fa-bars"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/tienda">Tienda</a></li>
        <li><a href="/carrito"><i class="fa fa-shopping-cart"></i>&nbsp Carrito</a></li>
        <li><a href="/ingresar"><i class="fa fa-sign-in"></i>&nbsp Ingresar</a></li>
        <li><a href="/acerca"><i class="fa fa-question-circle"></i>&nbsp Acerca</a></li>
        <li><a href="/contacto"><i class="fa fa-envelope"></i>&nbsp Contacto</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
         <li><a href="/tienda">Tienda</a></li>
         <li><a href="/carrito"><i class="fa fa-shopping-cart"></i>&nbsp Carrito</a></li>
         <li><a href="/ingresar"><i class="fa fa-sign-in"></i>&nbsp Ingresar</a></li>
         <li><a href="/acerca"><i class="fa fa-question-circle"></i>&nbsp Acerca</a></li>
         <li><a href="/contacto"><i class="fa fa-envelope"></i>&nbsp Contacto</a></li>
      </ul>
    </div>
  </nav>        
</header>

<div class="container">
    <div class="row">
        <div class="col m5 img-newusr">
           	<img id="new-usr" src="http://www.profetica.com.mx/wp-content/uploads/2012/01/libreria-48.jpg">
        </div>
        <div class="col m5">
            <h2 class="center-align">Registrate</h2>
            <div class="row">
                <form class="col s12" action="/form" method="POST">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nombre">
                            <label><i class="fa fa-user"></i>&nbsp Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="nick">
                            <label><i class="fa fa-reddit-alien"></i>&nbsp  Nick</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="email" class="validate" name="email">
                            <label><i class="fa fa-envelope"></i>&nbsp Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="password" class="validate" name="password">
                            <label for="pass"><i class="fa fa-key"></i>&nbsp Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="tel" class="validate" name="telefono">
                            <label for="pass"><i class="fa fa-mobile"></i>&nbsp Telefono</label>
                        </div>
                    </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button class="btn waves-effect waves-light" name="action">Registrar &nbsp<i class="fa fa-arrow-right"></i>
 	 							</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer blue lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"><i class="fa fa-book fa-2x"></i>&nbsp Libreria</h5>
                <p class="grey-text text-lighten-4">Los libros que te ayudan más son los que te hacen pensar más. La forma más dura de aprender es con la lectura, pero un gran libro de un gran pensador, es un barco de pensamientos, profundamente cargado verdad y belleza.-Pablo Neruda.</p>
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
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>