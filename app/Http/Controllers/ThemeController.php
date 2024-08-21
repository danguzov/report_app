<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function create()
    {
        return view('themes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'theme_number' => 'numeric|required',
            'theme_name' => 'string|required|max:255',
        ]);

        Theme::create($validated);

        return redirect()->route('entries.create');
    }


}
