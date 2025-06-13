<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $songs = Song::all();

        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSongRequest $request)
    {
        $data = $request->except('_token');

        Song::create($data);


        return redirect()->route('song.index');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSongRequest $request, Song $song)
    {
        
        $song->fill($request->except(['_method', '_token', 'files']))->update();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
