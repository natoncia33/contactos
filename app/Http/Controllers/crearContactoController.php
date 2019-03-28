<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NuevoRegistro;

class crearContactoController extends Controller
{
    /*protected $request;

    public function _construct(Request $request)
    {
        $this->request = $request;
    }*/

    public function mensajes(NuevoRegistro $request)
    {
        

        $data = $request->all();
        return back()
       
        ->with('enviado','tu informacion fue enviada correctamente');


        /*return redirect()
                        ->route('saludo')
                        ->with('enviado','tu informacion fue enviada correctamente');*/
       // return response()->json(['data'=>$data],203);
        //return $request->all();

      /*  if($request->has('null'))
        {
            return $request->all();
        }
        return 'La descripcion esta en blanco';
        */
    }
}
