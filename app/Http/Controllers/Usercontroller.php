<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::select('roles.name as roles', 'users.*')
                       ->join('model_has_roles','model_has_roles.model_id','users.id')
                       ->join('roles','roles.id','model_has_roles.role_id')
                       ->get();
        return view('user',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::all();

        $user = User::find($id);

        return view('editli',compact('role','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->roles()->sync($request->rol);

        if ($request->hasfile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $destino = "img";
            $filename = $request->file('file')->move($name,$destino);
            $user->file = $filename;
        }
        $user->save();

        return redirect(Route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
