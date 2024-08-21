<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    public function create()
    {
        return view('outcomes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|max:255',
        ]);

        Outcome::create($validated);

        return redirect()->route('entries.create');
    }
}
