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
use App\Http\Models\Estado;
use Illuminate\Support\Facades\Validator;


class EstadoController extends Controller {

    /**
     * @param $estadoId
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    function getIndex($estadoId)
    {
        $validator  =   Validator::make(['estado'=>$estadoId],['estado'=>'regex:/(^[A-Za-z0-9 ]+$)+/']);

        if($validator->fails()){
          return  redirect()->route('homepage');
        }

        $estadoRegiones       =       Estado::findBy(["identificador"  =>  $estadoId]);
        //si el estado no fue encontrado entonces lo regresamos al home page
        if($estadoRegiones->count() <=  0){
            return  redirect()->route('homepage');
        }
        //get the first element of the query
        $current = $estadoRegiones->next();


        return view('estado.abbaEstadoHome')->with(['estadoRegiones'   =>  $current]);
    }

}