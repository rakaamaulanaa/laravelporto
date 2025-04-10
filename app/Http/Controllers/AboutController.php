<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller {
    public function index() {
        $about = \App\Models\About::first(); // Ambil data pertama
        return view('admin.about.index', compact('about')); // Arahkan ke folder yang benar
    }
    

    public function edit() {
        $about = About::first();
        return view('admin.about.edit', compact('about'));
    }

    

    public function update(Request $request) {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $about = About::first();
        if (!$about) {
            $about = new About();
        }

        $about->name = $request->name;
        $about->title = $request->title;
        $about->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about', 'public');
            $about->image = $imagePath;
        }

        $about->save();

        return redirect()->route('about.index')->with('success', 'About updated successfully.');
    }
}
