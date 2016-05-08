@extends('templates.website')
@section('content')
<div class="container">
    <div class="row">
        <div class="col m5 img-login">
           	<img class="imglog" src="http://www.ugr.es/~laboveda/imag/libreria02.jpg">
        </div>
        <div class="col m5">
        <div class="card-panel">
            <h2 class="center-align">Login</h2>
            <div class="row">
            @if(Session::has('error'))
              <p class="error">Usuario y/o Contraseña no coninsiden</p>
            @endif
                <form class="col s12" action="/login" method="POST">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="text" class="validate" name="nick">
                            <label for="email"><i class="fa fa-reddit-alien"></i>&nbsp nick</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="password" class="validate" name="pass">
                            <label for="pass"><i class="fa fa-key"></i>&nbsp Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <p>
                                <input type="checkbox" id="remember">
                                <label for="remember">Remember me</label>
                                &nbsp ¿Eres nuevo?,Registrate <a href="/nuevousr">aquí</a>
                            </p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button class="btn btn-large waves-effect waves-light" type="submit" name="action">Ingresar &nbsp<i class="fa fa-arrow-right"></i></button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>    
        </div>
    </div>
</div>
@stop
