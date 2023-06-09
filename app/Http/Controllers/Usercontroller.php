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
        $users = User::select('roles.name as roles','users.*')
                       ->join('model_has_roles','model_has_roles.model_id','users.id')
                       ->join('roles','roles.id','model_has_roles.role_id')
                       ->get();

        return view('user',compact('users'));
    }

    public function edit(string $id)
    {
        $roles = Role::all();
        $user = User::find($id);
        return view ('editli',compact('user','roles'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->roles()->sync($request->rol);

        return redirect(Route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
