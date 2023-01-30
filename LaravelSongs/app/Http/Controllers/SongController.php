<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Song;
use App\Models\Album_song;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all(); //Geeft alle songs terug
        return view('songs.index', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $songsFromAPI = []; //Een array waar alles in komt te staan

        if($request->query->has('title')) { //Als de query title bevat, dan moeten we iets doen

            $api_key = '1ffbab7e8fffbdc5f7ea6a4716d420ef'; //Om naar de API te kunnen gaan hebben we een variabele nodig

            $title = $request->query('title'); //De title is hetgeen wat ingevuld is

            $response = Http::get( //Response wat de website stuurt
                'http://ws.audioscrobbler.com/2.0/?method=track.search&track=' .
                $title . '&api_key=' . $api_key . '&format=json'
            )->json();

            $songsFromAPI = $response["results"]["trackmatches"]["track"]; //De variabele word gevuld met de respons
        }
        return view('songs.create', ['songsFromAPI' => $songsFromAPI]); //We returnen de view met variabele
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
            'title'=>'required|max:100',
            'singer'=>'max:255'
        ]);
        if(Auth::check()){
            Song::create($request->only(['title', 'singer']));
        }
        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Song::find($id); // find = zoek op ID
        return view('songs.show', ['song' => $song]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id); // find = zoek op ID

        $albums = Album::whereDoesntHave('songs', function (Builder $query) use ($id) {
            $query->where('songs.id', $id);
        })->get();

        return view('songs.edit', ['song' => $song, 'albums' => $albums]);
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
            'title'=>'required|max:100',
            'singer'=>'max:255'
        ]);
        if(Auth::check()){
            Song::find($id)->update($request->only(['title', 'singer']));
            if($request->album_id != null)
            {
                $albumsong = new Album_song(['album_id' => $request->album_id, 'song_id' => $id]);
                $albumsong->save();
            }
        }
        return redirect()->route('songs.index');
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
            Song::destroy($id);
        }
        $songs = Song::all();
        return view('songs.index', ['songs' => $songs]);
    }
}
