<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Crypt;


class LoginController extends Controller
{     

	/*public function _construct(){
		$this->middleware('guest', ['except' => 'getLogout']);
	}*/

    public function index(Request $request){
      
        if(Auth::check()){
            if(Auth::user()->tipo == 1){
                    //return "eres admin";
                    //dd("eres admin");
                //dd("si infresaaaaaaaa");
                    return redirect('/admin/panel');
                }else{
                    return redirect('/');
                }
            } 
            //dd("valgo verga");
        return view('website.ingresar');
    }

    public function store(Request $request){
        //dd("si entro a la funcion store");
        if (Auth::attempt(['nick' => $request->nick, 'password' => $request->pass])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
               //dd("creo la sesion");
                if(Auth::user()->tipo == 1){
                    //return "eres admin";
                    //dd("eres admin");
                    $request->session()->put('Admin', $usuario);
                    return redirect('/admin/panel');
                }else{
                    //return redirect('/');
                    return "es cliente";
                }
            
           
          return back()->with('error', true); //peromite declarar una variable de sesion flash
        }
        //dd("no entro");
            
            return back()->with('error', true); //peromite declarar una variable de sesion flash
    }
}
 