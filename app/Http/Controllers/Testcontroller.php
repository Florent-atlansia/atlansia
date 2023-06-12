<?php

namespace App\Http\Controllers;

use App\Mail\Testmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class Testcontroller extends Controller
{

   /** public function _construct(){
        $this->middleware('auth');
    }*/

    public function foo(){

        if (!Gate::allows('access-admin')){
            abort('403');
        }
        return view ('test.foo');
        }
 public function foo1(){

        if (!Gate::allows('access-admin')){
            abort('403');
        }
        return view ('test.foo');
        }
    public function bar(){

        /*if (!empty($user->email)) {
            mail::to ($user->email)->send(new Testmail($user));
        }*/
         $user= ['email'=>'user@test.com', 'name'=>'monsieur florent pascal'];
               mail::to ($user['email'])->send(new Testmail($user));
        return view ('test.bar');
        $uri = $request->path();
        dd($uri);

    }

   /** public function index(){
        $response = Http::get("https://schow.com");
        dd($response);
    }
*/
}
