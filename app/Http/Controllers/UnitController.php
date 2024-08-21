<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function create()
    {
        $themes = Theme::all();

        return view('entries.create', compact('themes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit_number' => 'numeric|required',
            'unit_name' => 'string|required|max:255',
            'theme_id' => 'required|exists:themes,id',
        ]);

        Unit::create($validated);

        $themes = Theme::all();
        return redirect()->route('entries.create')->with('themes', $themes);
    }
}
