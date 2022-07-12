<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function create()
    {
        echo 'ok';
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['password'] = Hash::make($request->password);

        User::create($data);
        echo "thêm thành công";
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)   
    {
        $user = User::findOrFail($id);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        $user->update();
        // $user::update($data);
        echo "cập nhật thành công";
    }
}
