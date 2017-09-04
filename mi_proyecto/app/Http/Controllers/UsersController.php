<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(3);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'name' => 'min:4|max:120|required',
            'email' => 'min:4|max:120|required|unique:users' /* a unique hay que pasarle el nombre de la tabla en la BD */
        ]);
        //dd($request->all()); //all nos trae solo los datos enviados
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash("Usuario registrado correctamente")->success()->important();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $u = User::find($id);
        return view('admin.users.edit')->with('user', $u);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user        = User::find($id);
        $user->fill($request->all());
        /*$user->name  = $request->name;
        $user->email = $request->email;
        $user->type  = $request->type;*/
        $user->save();
        flash("Usuario editado correctamente")->info()->important();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = User::find($id);
        $u->delete();
        flash("Usuario eliminado")->warning()->important();
        return redirect()->route('users.index');
    }
}
