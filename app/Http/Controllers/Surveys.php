<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Surveys extends Controller
{
    public function show($id)
    {
        $all = \App\Survey::with('questions')->findOrFail($id);
        return view('survey', compact('all'));
    }
    public function store(Request $request)
    {
        dump($request->all());
        $survey_id = $request->surveyid;
        $questions = $request->question;
        $answers = $request->answer;
        $new_result = new \App\Result;
        $new_result->survey_id = $survey_id;
        $new_result->save();
        for ($i = 0, $len = count($answers); $i < $len; $i++) {
            $new_answer = new \App\Answer;
            $new_answer->question_id = $questions[$i];
            $new_answer->result_id = $new_result->id;
            $new_answer->answer = $answers[$i];
            $new_answer->save();
        }
    }
}
