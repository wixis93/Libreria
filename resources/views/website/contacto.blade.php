@extends('templates.website')
@section('content')
<section class="container">
        <div class="col m8">
            <h2 class="center-align">Contacto</h2>
            <p>
              Para cualquier duda o aclaración que tengas con alguno de nuestros servicios, por favor completa los siguientes campos y selecciona el tema en el cual te podemos ayudar.
            </p>
            <div class="row">
                <form action="/mensajes" method="POST" class="col s12">
                 {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="nombre">
                            <label for="email"><i class="fa fa-user"></i>&nbsp Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="pass" type="email" class="validate" name="correo">
                            <label for="pass"><i class="fa fa-envelope"></i>&nbsp Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="mensaje"></textarea>
          					<label for="textarea1"><i class="fa fa-commenting"></i>&nbspComentarios</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button type="submit" class="btn btn-large waves-effect waves-light" type="button" name="action">Enviar &nbsp<i class="fa fa-arrow-right"></i></button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop
