<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Band;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = Band::all(); //Geeft alle bands terug
        return view('bands.index', ['bands' => $bands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = Album::all();
        return view('bands.create', ['albums' => $albums]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:50',
            'genre'=>'required|max:30',
            'founded'=>'required|integer|min:1000|max:9999',
            'active_till'=>'max:20',
        ]);
        if(Auth::check()) {
            Band::create($request->only(['name', 'genre', 'founded', 'active_till']));
        }
        return redirect()->route('bands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $band = Band::find($id); // find = zoek op ID
        return view('bands.show', ['band' => $band]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $band = Band::find($id); // find = zoek op ID
        $albums = Album::all();
        return view('bands.edit', ['band' => $band, 'albums' => $albums]);
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
        $request->validate([
            'name'=>'required|max:50',
            'genre'=>'required|max:30',
            'founded'=>'required|integer|min:1000|max:9999',
            'active_till'=>'max:20',
        ]);
        if(Auth::check()){
            Band::find($id)->update($request->only(['name', 'genre', 'founded', 'active_till']));
            if ($request->album_id != null)
            {
                $album = Album::find($request->album_id);
                $band = Band::find($id);
                $band->albums()->save($album);
            }
        }
        return redirect()->route('bands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()){
            Band::destroy($id);
        }
        $bands = Band::all();
        return view('bands.index', ['bands' => $bands]);
    }
}
