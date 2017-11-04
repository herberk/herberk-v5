<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ProfileUpdated;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use App\Http\Controllers\Controller;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $profile = auth()->user()->profile;
        return view('admin/users/profile', compact('profile', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $profile = auth()->user()->profile;
        $user   = auth()->user();
        return view('admin/users/profile', compact('profile', 'user'));

    }



    /**
     * Update the specified resource in storage.
     * public function edit()
    {
    $profile = auth()->user()->profile;
    $user   = auth()->user();
    $posts  = Post::orderBy('title','ASC')->get();
    return view('users/profile', compact('profile', 'user','posts'));

    }
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $profile = auth()->user()->profile;

        $this->validate($request,[

            'nickname' =>['required','min:3','max:10',
            Rule::unique('users')->ignore($profile->id)],
            'name' => ['required','min:3','max:250'],
            'description' => ['required','min:10','max:750'],
           /* 'opciones' => "required|in:Si,No",*/
            'type' => "required|in:admin,editor,user,visit",
            'avatar' => [
                'image',
                Rule::dimensions()->maxWidth(150)->maxHeight(150)
            ],

        ]);

        $user   = auth()->user();
        $profile->fill($request->all());
        $user->fill($request->all());
        if ($request->hasFile('avatar')){
            $profile->avatar = $request->file('avatar')
                ->storeAs("avatars/".auth()->id(), 'avatar.jpg');
        }
        $profile->save();
        $user->save();
        /* auth()->user()->notify(new ProfileUpdated($profile));  */
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function avatar()
    {
        $profile = auth()->user()->profile;

        $file = storage_path("app/{$profile->avatar}");

        $headers =[
            /* 'Content-Length' => File::size($file),
             'Content-Tipe'   => File::mimeType($file)*/
        ];
        return response()->download(
            $file,
            null, $headers, ResponseHeaderBag::DISPOSITION_INLINE

        );
    }
}
