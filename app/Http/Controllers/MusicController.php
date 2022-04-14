<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicController
{


    public function getRandomMusic()
    {
        $musics =  Music::all()->random();
        return $musics;
    }


    public function getRandomMusicByCategory(string $category)
    {
        $musics = Music::all()->where('category', $category);
        return $musics;
    }

    public function addMusic(Request $request)
    {

        $payload = [
            'title' => $request->input('title'),
            'reference' => $request->input('reference'),
            'category' => $request->input('category')
        ];

        if($payload != [])
        {
            Music::create($payload);
            return ['message' => 'ok'];
        }
        return ['message' => 'something wrong has occured'];
    }

    public function musicDelete(Request $request)
    {
        $payload = [
            'title' => $request->input('title')
        ];

        if($payload != [])
        {
            Music::where('title', $payload['title'])->delete();
            return ['message' => 'ok'];
        }
        return ['message' => 'something wrong has occured'];
    }
}