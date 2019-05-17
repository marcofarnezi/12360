<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Form;
use App\Question;
use App\User;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();
        $form = Form::where('id',$request->id)->first();
        $questions = Question::where('form_id', $form->id)->get();

        return view(
            'evaluation.index',
            [
                'users' => $users,
                'form' => $form,
                'questions' => $questions
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

}
