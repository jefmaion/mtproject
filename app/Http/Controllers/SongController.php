<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;
use App\Models\Track;
use Illuminate\Http\Request;
use ZipArchive;

use BoyHagemann\Waveform\Waveform;
use Illuminate\Support\Facades\Storage;

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

    public function track_update(Song $song, Request $request) {
        foreach($request->get('tracks') as $id => $data) {
                Track::find($id)->update($data);
        }
        return redirect()->route('song.show', $song);
    }

    public function upload(Song $song, Request $request) {

        // dd($song, $_FILES);
        
        if($request->get('media')) {
            dd($song, $request->all(), $request->file());
        }

        $folder = 'app/public/tracks/'.$song->id;
        
        $path = storage_path($folder);

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);


        $zipPath = storage_path($folder . '/' .$name );
        
        $zip = new ZipArchive;
        $zip->open($zipPath);
        $zip->extractTo(storage_path($folder));


        $arquivos = [];
        for ($i = 0; $i < $zip->numFiles; $i++) {
            $song->tracks()->create(['filename' => $zip->getNameIndex($i)]);
        }

        $zip->close();


        // $container = '<div class="card">
        //                         <div class="card-body d-flsex aligns-items-center">
        //                             <div class="row d-flex align-items-center">
        //                                 <div class="col-8">
        //                                     <h5 class="card-title">
        //                                         <strong>%s</strong>
        //                                     </h5>
        //                                 </div>
        //                                 <div class="col">
        //                                     <select id="my-select" class="form-control" name="">
        //                                         <option>Text</option>
        //                                     </select>
        //                                 </div>
        //                             </div>
        //                         </div>
        //                     </div>';

        // foreach($arquivos as $arq) {
        //     $files[] = sprintf($container, $arq);
        // }


        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
            'fsp' => $zipPath,
            'path' => $path,
        ]);

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
