<?php
namespace App\Http\Controllers\Tablas;

use App\Http\Requests\StoreCiudadRecuest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tablas\giros;
use App\Tablas\ciudades;
use App\Tablas\Comunas;
use App\Tablas\Regiones;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class TablasController extends Controller
{
    public function locaciones(){
        $regiones = regiones::orderBY('name')->paginate(15);
        $comunas = comunas::orderBY('name')->paginate(15);
        $ciudades = ciudades::orderBY('name')->paginate(15);
        return view('tablas.locaciones',compact( 'regiones', 'comunas', 'ciudades'));
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

    /*ciuda */
    public function createciudad()
    {
        return view('tablas.storeciudad');
    }

    public function storeciudad(StoreCiudadRecuest $request)
    {
        ciudades::create($request->all());
        \Alert::message('La ciudad fue guardada');
        return back()->withInput();
        //return redirect()->route('locaciones');
    }

    /*glosa*/
    public function createglosas()
    {
        return view('tablas.storeglosas');
    }

    public function storeglosas(StoreGlosasRecuest $request)
    {
        ciudades::create($request->all());
        \Alert::message('La glosas fue guardada');
        return back()->withInput();
    }
    /*desglosas*/
    public function createdesglosas()
    {
        return view('tablas.storedesglosas');
    }

    public function storedesglosas(StoreDesglosasRecuest $request)
    {
        ciudades::create($request->all());
        \Alert::message('El Tipo de glosa fue guardada');
        return back()->withInput();
    }



    public function glosas()
    {
        return view('tablas.glosas', compact('makeForm'));
    }
    public function destroy($id, Request $request)
    {
            dd('hola');
           // abort(500);
        $ciudades = ciudades::findOrFail($id);
        $ciudades->delete();
        $message = $ciudades->name. ' Fue eliminado de nuestros registros';
        if ($request->ajax()) {
            return response()->json([
                'id'      => $user->id,
                'message' => $message
            ]);
        }
        Session::flash('message', $message);
        return redirect()->route('locaciones');
    }



    //*** parece que de aqui adelate nada


    public function index_reg_com()
    {
        $regiones = regiones::orderBY('name')->paginate(15);
        $comunas = comunas::orderBY('name')->paginate(15);
        $ciudades = ciudades::orderBY('name')->paginate(15);

        return view('tablas.listaloca', compact('regiones','comunas','ciudades'));
    }

    public function index_modal()
    {
        return view('tablas.modal');
    }


}
