<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Promo;
use App\Kategori;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = Promo::all();
        $kategoris = Kategori::all();
        return view('admin.promo',compact('promos', 'kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promo = new Promo();
        $promo->promo = $request->nama;
        $promo->kategori_id = $request->kategori;
        $promo->tanggal_dibuat = $request->date1;
        $promo->tanggal_berakhir = $request->date2;
        $promo->Harga = $request->harga;
        $promo->foto = $request->foto;
        $promo->save();
        return redirect(route('Promo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        return view('admin.promo',compact('promos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $promo = Promo::find($id);
        $promo->promo = $request->nama;
        $promo->kategori_id = $request->kategori;
        $promo->tanggal_dibuat = $request->date1;
        $promo->tanggal_berakhir = $request->date2;
        $promo->Harga = $request->harga;
        $promo->foto = $request->foto;
        $promo->save();
        return redirect(route('Promo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
