<?php

namespace App\Http\Controllers;

use App\Music;
use App\Http\Requests\MusicRequest;

class MusicController extends Controller
{
    public function index(Music $music){
        return view('Music')->with(['musics' => $music->getPaginateByLimit()]);
    }
    
    public function show(Music $music)
    {
        return view('show')->with(['music' => $music]);
    }
    
    public function create(){
        return view('create');
    }
    
    public function store(MusicRequest $request, Music $music)
    {
        $input = $request['music'];
        $music->fill($input)->save();
        return redirect('/musics/' . $music->id);
    }
    
    public function edit(Music $music)
    {
        return view('edit')->with(['music' => $music]);
    }
    
    public function update(MusicRequest $request, Music $music)
    {
        $input_music = $request['music'];
        $music->fill($input_music)->save();
        return redirect('/musics/' . $music->id);
    }
}
