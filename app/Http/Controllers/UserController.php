<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kategori;
use \App\Order;


class UserController extends Controller
{
    public function index()
    {
        return view('user.emeraldanew',compact(''));
    }
    

    public function store(Request $request)
    {
        Order::create($request->all());
        //dd($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $transaksi= Order::all();
        return view('user.BirthdayOrder',compact('transaksi'));
    }

    
}
