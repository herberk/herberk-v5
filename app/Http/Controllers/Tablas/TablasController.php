<?php
namespace App\Http\Controllers\Tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tablas\giros;
use App\Tablas\Ciudades;
use App\Http\Requests\StoreCiudad;
use App\Http\Requests\Updateciudad;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class TablasController extends Controller
{

    public function ciudadQuery(Request $request){

        $ciudades = Ciudades::orderBY('name')->paginate(10);
     return [
         'pagination' => [
             'total'         => $ciudades->total(),
             'current_page'  => $ciudades->currentPage(),
             'per_page'      => $ciudades->perPage(),
             'last_page'     => $ciudades->lastPage(),
             'from'          => $ciudades->firstItem(),
             'to'            => $ciudades->lastItem(),
         ],
         'ciudades' => $ciudades
     ];

    }
        //StoreCiudad
     public function create(Request $request){
        $ciudades=new Ciudades();
        $ciudades->name=$request->name;
        $ciudades->codigo =$request->codigo;
        $ciudades->save();
    }
    public function delete($id)
    {
        Ciudades::find($id)->delete();
    }
     //Updateciudad
    public function update(Request $request)
    {
        $ciudades = Ciudades::find($request->id);
        $ciudades->name = $request->name;
        $ciudades->codigo =$request->codigo;
        $ciudades->save();
    }
    public function giros(Request $request){
        $giros = Giros::filterAndPaginate($request->get('name'),  $request->get('type'), $request->get('codigo'));
        return view('tablas.giros',compact( 'giros'));
    }

    public function bexcel(Request $request){
        Excel::create('Listado de Giros', function ($excel) {
            $excel->sheet('Giros', function ($sheet) {
                $giros = giros::select('id', 'codigo', 'name', 'afecto', 'cat_tribut','desgiros_id')->get();
                $sheet->fromArray($giros);
            });
        })->download('xls');
    }

}
