<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Image::create([
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return back()->with('success', 'Image uploaded successfully.');
    }
}