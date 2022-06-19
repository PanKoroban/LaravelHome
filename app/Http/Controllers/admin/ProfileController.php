<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
                'name' => $request->post('name')
            ]); //дописать
        }
        return view('admin.profile', ['user' => $user]);
    }
}
