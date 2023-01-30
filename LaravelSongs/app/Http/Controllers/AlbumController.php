<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Album;
use App\Models\Band;
use App\Models\Song;
use App\Models\Album_song;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all(); //Geeft alle albums terug
        return view('albums.index', ['albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
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
            'year'=>'integer|min:1000|max:9999',
            'times_sold'=>'integer|min:0',
        ]);
        if (Auth::check()) {
            Album::create($request->only(['name', 'year', 'times_sold']));
        }
        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::find($id); // find = zoek op ID
        $band = Band::find($album->band_id);
        $albumsongs = $album->songs()->pluck('title');

        return view('albums.show', ['album' => $album, 'band' => $band, 'albumsongs' => $albumsongs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id); // find = zoek op ID

        $songs = Song::whereDoesntHave('albums', function (Builder $query) use ($id) {
            $query->where('albums.id', $id);
        })->get();

        $titles = $album->songs()->pluck('title');
        $gekoppeldeSongs = Album_song::all()->where('album_id', $id);
        return view('albums.edit', ['album' => $album, 'songs' => $songs, 'gekoppeldeSongs' => $gekoppeldeSongs, 'titles' => $titles]);
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
            'year'=>'integer|min:1000|max:9999',
            'times_sold'=>'integer|min:0',
        ]);
        if (Auth::check()) {
            Album::find($id)->update($request->only(['name', 'year', 'times_sold']));
            if($request->song_id != null)
            {
                $albumsong = new Album_song(['album_id' => $id, 'song_id' => $request->song_id]);
                $albumsong->save();
            }
        }
        return redirect()->route('albums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check()) {
            Album::destroy($id);
        }
        $albums = Album::all();
        return view('albums.index', ['albums' => $albums]);
    }
}
