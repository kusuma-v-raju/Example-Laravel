<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Song;

class SongController extends Controller
{

    // Display all the songs
    public function index()
    {
        //return 'Display all the songs!';
       // $songs = DB::select('SELECT * FROM songs'); -- without using model
       $songs = Song::all();
        return view('all-songs', ['mysongs' => $songs]);

        // like var_dump in laravel its -- dd($songs);
        //return view('all-songs');
    }

    public function show($id)
    {
        //    $song = DB::select("SELECT * FROM songs WHERE id = $id");
        // return view('song-detail', ['mysong' => $song]);
        $song = DB::table('songs')->where('id', $id)->first();

        return view('song-details', ['mysong' => $song[0]]);
    }

    // Display the form
    public function create()
    {
        return view('new-song');
    }

    //insert song to DB
    public function insert(Request $request)
    {

        $request->validate([
            'title' => 'required'|'max:50',
            'release_date' => 'required',
        ]);

        //   $result = DB::insert('INSERT INTO songs(title, release_date, poster, artist_id, categ_id) 
        // VALUES(?, ?, ?, 1, 1)', [$request->title, $request->release_date, $request->poster]); //assuming artist id and categ id is 1

        $result = Song::create([
            'title' => $request->title,
            'release_date' => $request->release_date,
            'poster' => $request->poster,
            'artist_id' => 1,
            'categ_id' => 1,
        ]);

        if ($result)
            return 'Inserted successfully';
        else
            return 'Problem inserting. Try inserting again';
    }
}
