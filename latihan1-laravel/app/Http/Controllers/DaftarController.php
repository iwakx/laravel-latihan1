<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function showForm()
    {
        return view('poster_form');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:100',
            'poster_title' => 'required|string|max:255',
            'poster_file' => 'required|image|mimes:jpeg,png|max:2048',
        ]);

        $path = $request->file('poster_file')->store('posters', 'public');

        $data = [
            'name' => $request->input('name'),
            'class' => $request->input('class'),
            'poster_title' => $request->input('poster_title'),
            'poster_path' => $path
        ];

        return view('poster_result', compact('data'));
    }
}
