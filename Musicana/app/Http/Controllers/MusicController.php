<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\User;
use Illuminate\Http\Request;

class MusicController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function addmusic()
    {
        return view('admin.addmusic');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addmusic_data(Request $request, Music $music)
    {
        $file = $request->file('music');
        // dd($file);
        if ($file) {
            $fileNameEx = $file->getClientOriginalExtension();
            $fileName = "music".date("dmyhis").".".$fileNameEx;
            // dd($fileNameEx);
            $file->move(public_path('uploads'), $fileName);
        }else{
            // dd("inside else");
            // $fileName = "default.png";
        }

        $music->name = $request->name;
        $music->music = $fileName;
        $music->save();
        return redirect('addmusic');
    }


    /**
     * Display the specified resource.
     */

    public function userlist(User $user)
    {

        $user = User::All();
        // dd($music);
        return view('admin.userlist', compact('user'));
    }
    public function musiclist(Music $music)
    {

        $music = Music::All();
        // dd($music);
        return view('admin.musiclist', compact('music'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Music $music)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delmusic(request $request, $id)
    {
        $data = Music::findOrFail($id);
        $data->delete();
        return redirect('musiclist');
    }
}
