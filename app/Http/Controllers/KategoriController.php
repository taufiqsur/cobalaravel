<?php

namespace App\Http\Controllers;

use App\KategoriModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\Illuminate\Http\Request $request)
    {
        //return FilmModel::all()->toArray();
        //$varFilm = FilmModel::all();

        $varKategori = KategoriModel::when($request->keyword, function ($query) use ($request) {
            $query->where('nama_kategori', 'like', "%{$request->keyword}%");
                //->orWhere('nama', 'like', "%{$request->keyword}%");
        })->get();

        return view('dashboard.maincontent', compact('varKategori'));

        
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
     // insert data ke table kategori
        DB::table('kategori')->insert([
        'nama_kategori' => $request->nama_kategori,
        'slug' => $request->slug,
        'waktu_posting' => $request->waktu_posting,
       
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = DB::table('kategori')->where('id',$id)->get();
        return view('dashboard.edit',['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('kategori')->where('id',$request->id)->update([
            'nama_kategori' => $request->nama_kategori,
            'slug' => $request->slug
       
        ]);
   
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id', $id)->delete();
            return redirect('/kategori');
    }
}
