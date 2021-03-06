<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

     public function findUser(Route $route)
    {
        $this->user = User::findOrFail($route->getParameter('users'));
    }

    public function index(Request $request)
    {

    $users = User::filterAndPaginate($request->get('name'), $request->get('type'));
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateUserRequest $request)
    {

        $user = User::create($request->all());
        return redirect()->route('users.index');
    }

   public function show(){

   }


    public function edit($id)
    {

        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(EditUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();
        return redirect()->back();

    }

    public function destroy($id, Request $request)
    {
     // abort(500);
       $user = User::findOrFail($id);
       $user->delete();
        $message = $user->name. ' Fue eliminado de nuestros registros';
        if ($request->ajax()) {
            return response()->json([
                'id'      => $user->id,
                'message' => $message
            ]);
        }
        Session::flash('message', $message);
        return redirect()->route('users.index');
    }

    public function aexcel(Request $request)
    {
        $Users = User::filterAndPaginate($request->get('name'), $request->get('type'));

        Excel::create('Listado de Usuario', function ($excel) {
            $excel->sheet('Usuarios', function ($sheet) {
                $UserProfile = UserProfile::all();
                $User = User::all();
                 $users = user::select('id', 'name', 'email', 'type','active')->get();
                $sheet->fromArray($User);
            });
        })->download('xls');
    }
}
