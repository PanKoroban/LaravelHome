<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addOrderController extends Controller
{
    public function index()
    {
        return view('addOrder');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        file_put_contents('order.txt',$request->except(['_token']), FILE_APPEND );

        return response()->json($request->only('name'), 202);
    }
}
