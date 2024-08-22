<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function criar(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->cpf = $request->cpf;
        $user->email = $request->email;

        $user->save();
    }
}
