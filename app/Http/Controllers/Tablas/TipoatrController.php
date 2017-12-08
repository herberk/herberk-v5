<?php

namespace App\Http\Controllers\Tablas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tablas\Tipo;
use App\Tablas\Atributo;

class TipoatrController extends Controller
{
    public function hayatri(Request $request) {

        if (!$request->ajax()) {
            return redirect('/');
        }
        return [
            'elatributos' => Atributo::where('tipos_id', $request->tipo)->get(),
        ];
    }

    public function atributo_Query(Request $request){

        $atributos = Atributo::with('Tipos')
            ->orderBy('tipos_id',$request)
            ->paginate(10);
            return [
                    'pagination' => [
                    'total'         => $atributos->total(),
                    'current_page'  => $atributos->currentPage(),
                    'per_page'      => $atributos->perPage(),
                    'last_page'     => $atributos->lastPage(),
                    'from'          => $atributos->firstItem(),
                     'to'           => $atributos->lastItem(),
                    ],
                'atributos' => $atributos
            ];
        }

    public function tipos_Query(Request $request)
    {
        if (!$request->ajax()) {
            return redirect('/');
        }
        return [
            'tipos' => Tipo::orderBy('name')->get(),
        ];
    }

    public function tipocreate(Request $request){
        $Tipos = new tipo();
        $Tipos->name=$request->name;
        $Tipos->save();

    }
    public function tipodelete($id)
    {
        Tipo::find($id)->delete();
    }

    public function tipoupdate(Request $request)
    {
        $Tipos = Tipo::find($request->id);
        $Tipos->name = $request->name;
        $Tipos->save();
    }

    public function atributocreate(Request $request){
        $Atributos = new atributo();
        $Atributos->name=$request->name;
        $Atributos->Tipos_id = $request->atributo;
        $Atributos->codigo =$request->codigo;
        $Atributos->save();

    }
    public function atributodelete($id)
    {
        Atributo::find($id)->delete();
    }

    public function atributoupdate(Request $request)
    {
        $Atributos = Atributo::find($request->id);
        $Atributos->name = $request->name;
        $Atributos->Tipos_id = $request->atributo;
        $Atributos->codigo =$request->codigo;
        $Atributos->save();
    }

}
