<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Results extends Controller
{
    public function show($id)
    {
        $all = \App\Result::with('answers')->where('survey_id', $id)->get();
        $all2 = \App\Survey::with('questions')->findOrFail($id);
        return view('results', compact('all', 'all2'));
    }
}
