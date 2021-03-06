<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('posts.register');

    }
    public function store(Request $request){
        
        $user = new User;
        $user ->name =$request->name;
        $user ->email =$request->email;
        $user ->password =bcrypt($request->password);

        $user->save();

        auth()->login($user);

        return redirect('posts');
    }
}
