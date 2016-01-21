<?php
/**
 * Created by PhpStorm.
 * User: jarriaga - jarriagabarron@gmail.com
 * This is Signup Controller to handle login signup
 * Date: 10/2/15
 * Time: 1:00 AM
 */

namespace App\Http\Controllers\Estado;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class EstadoController extends Controller {

    function getIndex($estadoId)
    {
        $validator  =   Validator::make(['estado'=>$estadoId],['estado'=>'regex:/(^[A-Za-z0-9 ]+$)+/']);

        if($validator->fails()){
          return  redirect()->route('homepage');
        }

        return view('estado.abbaEstadoHome')->with(['estado'=>$estadoId]);
    }

}