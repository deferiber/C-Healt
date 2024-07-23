<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data User';
        $users = User::paginate(5);
        return view('users.user', compact('users','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create User';
        return view('users.formUser', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all()); //perintah check penerimaan data yang diinput dari form
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users',
            // 'setuju' => 'required|true',
        ]);

        User::create([
            'name' => $request->name,
            'jenkel' => $request->jenkel,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'setuju' => $request->setuju,
        ]);

        return redirect('users')->with('success', 'User created!');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.userShow', ['id' => $user->name]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $title = 'Create User';
        return view('users.editUser', compact('user', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'setuju' => 'required|true',
        ]);

        $user->name = $request->name;
        $user->jenkel = $request->jenkel;
        $user->umur = $request->umur;
        $user->pekerjaan = $request->pekerjaan;
        $user->email = $request->email;
        $user->roles = $request->roles;
        $user->setuju = $request->setuju;
        if($request->password != "") {
            $user->password = Hash::make($request->password);
        }

        $user->update();
        return redirect()->route('users.index')->with('success', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //cara1
        // $user->delete();
        // return redirect()->back()->with('success', 'User deleted');

        //cara2
        try {
            $user->deleteOrFail();
             return redirect()->back()->with('success', 'User deleted');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
