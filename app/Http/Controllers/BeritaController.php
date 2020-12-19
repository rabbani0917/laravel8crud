<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();//select*from berita

        return view('berita.index',compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        Berita::create($input);//inisert into.... ...

        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita=Berita::find($id);
        return view('berita.show',compact ('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $berita=Berita::find($id);

        if( empty ($berita)){
            return redirect(route('berita.create'));
              
        }
        return view ('berita.edit',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
  public function update(Request $id, $request)
    {
        $berita=Berita::find($id);
        $input=$request->all();
        if(empty($berita)){
            return redirect(route('berita.table'));
        }

       // $flight->save();
       // return redirect()->route('berita.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=Berita::find($id);
        if(empty($berita)){
            return redirect(route('berita.index'));
        }
        $berita->delete();
        return redirect(route('berita.index'));
        
    }
   
}