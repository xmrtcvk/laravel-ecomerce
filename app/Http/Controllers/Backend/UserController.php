<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view("backend.users.index", ["users" => $user]);
    }

    /**
     * ekleme işlemi sayfası gösterilmesi
     */
    public function create()
    {
        return view("backend.users.insertForm");
    }

    /**
     * ekleme işlemi yaparken kaydtme (post)
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $pass = $request->password;
        $pass2 = $request->password2;
        $is_admin = ($request->is_admin == "on") ? 1 : 0;
        $is_active = ($request->is_active == "on") ? 1 : 0;

        $user = new User();

        $user->name = $name;
        $user->email = $email;
        $user->password = $pass;
        $user->is_admin = 1;
        $user->is_active = 1;

        $user->save();

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view("backend.users.updateForm", ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_active = ($request->is_active) ? 1 : 0;
        $user->is_admin = ($request->is_admin) ? 1 : 0;

        $user->save();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users');
    }
}
