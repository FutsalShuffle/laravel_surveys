<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class Main extends Controller
{
    public function index()
    {
        return view('create_survey');
    }
    public function store(Request $request)
    {
        $questions = $request->lol;
        $surveyname = $request->surveyname;
        $newsurvey = new \App\Survey;
        $newsurvey->name = $surveyname;
        $newsurvey->save();
        $survey_id = $newsurvey->id;
        foreach ($questions as $question) {
            if (!$question) {
                continue;
            }
            $new_question = new \App\Questions;
            $new_question->question = $question;
            $new_question->survey_id = $survey_id;
            $new_question->save();
        }
        return ['success'];
    }
}
