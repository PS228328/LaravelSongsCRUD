<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Album;
use App\Models\Band;
use App\Models\Song;
use App\Models\Album_song;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Album_SongController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Album $album
     * @param  Song $song
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Album $album, Song $song)
    {
        $album->songs()->attach($song->id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Album $album
     * @param  Song $song
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Album $album, Song $song)
    {
        $album->songs()->detach($song->id);
        return redirect()->back();
    }
}
