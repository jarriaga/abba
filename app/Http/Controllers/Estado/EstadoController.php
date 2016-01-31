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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EstadoController extends Controller {

    /**
     * @param $estadoId
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function getIndex($estadoId)
    {
        $validator  =   Validator::make(['estado'=>$estadoId],['estado'=>'regex:/(^[A-Za-z0-9 ]+$)+/']);

        if($validator->fails()){
          return  redirect()->route('homepage');
        }
        //estado retorna un estado
        $estadoRegiones       =       Estado::findBy(["identificador"  =>  $estadoId]);

        //si el estado no fue encontrado entonces lo regresamos al home page
        if($estadoRegiones->count() <=  0){
            return  redirect()->route('homepage');
        }

        //get the first element of the query
        $current = $estadoRegiones->next();

        return view('estado.abbaEstadoHome')->with(['estadoRegiones'   =>  $current]);
    }


    public function getAutoSuggest($estadoId, Request $request)
    {
        $validator  =   Validator::make(['estado'=>$estadoId],['estado'=>'regex:/(^[A-Za-z0-9 ]+$)+/']);
        if($validator->fails()){
            return  redirect()->route('homepage');
        }

        $search     =     (string)  $request->input('search',null);
        $limit      =     (int)     $request->input('limit',20);


        if(isset($search)    &&      !empty($search) && isset($estadoId) && !empty($estadoId) ){
            //localizar un estado
            $estadoRegiones       =       Estado::findBy(["identificador"  =>  $estadoId]);
            //verificar que tengamos almenos un estado
            if($estadoRegiones->count() <=  0){
                return  redirect()->route('homepage');
            }
            //obtenemos el cursor
            $estadoRegiones = $estadoRegiones->next();
            //preparamos la respuesta
            $result     =       array();
            //iteramos el resultado de las regiones de un estado
            foreach($estadoRegiones['region'] as $region){
                //convertimos el nombre de la region para eliminar los acentos
                $region_sinacentos = str_replace("'","",iconv('UTF-8','ASCII//TRANSLIT//IGNORE',$region['nombre']));
                //comparamos la region sin acentos con el texto buscado
                if(preg_match('/.*'.$search.'.*/uUi',$region_sinacentos) && count($result)<=$limit){
                    $result[] = $region_sinacentos;
                }
            }
            //retornamos el arreglo de respuesta en formato Json
            return response()->json($result,200);
        }
        return response()->json(array('error'=>'something is wrong'),400);
    }
}