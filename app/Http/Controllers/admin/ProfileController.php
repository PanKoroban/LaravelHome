<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();
        if($request->isMethod('post')){
            //написать валидацию
            $user->fill([
                'name' => $request->post('name'),
                'email' => $request->post('email'),
                'is_admin' => $request->post('is_admin')
            ]);
        }
        $user->save();
        return view('Admin.profile', ['user' => $user]);
    }
}
