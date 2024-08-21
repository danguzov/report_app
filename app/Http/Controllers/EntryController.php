<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function create()
    {
        $themes = Theme::all();

        return view('entries.create', compact('themes'));
    }
}
