<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function create(Request $request)
    {
        $user = User::create([
            "first_name" => $request->fname,
            "surname" => $request->sname,
            'middle_name' => $request->mname,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        if ($user)
            return redirect()->back();
    }

    public function find(int $user_id)
    {
        $user=User::find($user_id);
        dd($user);
        return view('post',["user"=>$user]);
    }
}
