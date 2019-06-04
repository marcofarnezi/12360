<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Form;
use App\Question;
use App\Response;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function save(Request $request)
    {
        foreach ($request->get('score') as $user_id => $scores) {
            foreach ($scores as $question_id => $response) {
                Evaluation::insert([
                    'question_id' => $question_id,
                    'user_id' => $user_id,
                    'response' => $response,
                    'form_id' => $request->get('form_id')
                ]);
            }
        }

        /**
         * @todo salvar o usuario que respondeu a pesquisa
         */

        $response = new Response();
        $response->user_id = Auth::id();
        $response->form_id = $request->get('form_id');
        $response->save();

        return redirect('/');
    }

    public function show(Request $request)
    {
        $responses = Evaluation::where('form_id', $request->id)->get();
        $respUser = [];
        foreach ($responses as $response) {
            if (!empty($response->response)) {
                if (is_numeric($response->response) && ! isset($respUser[$response->user_id][$response->question_id]['score'])) {
                    $respUser[$response->user_id][$response->question_id]['score'] = 0;
                    $respUser[$response->user_id][$response->question_id]['qnt'] = 0;
                }

                if (is_numeric($response->response)) {
                    $respUser[$response->user_id][$response->question_id]['score'] += $response->response;
                    $respUser[$response->user_id][$response->question_id]['qnt']++;
                } else {
                    $respUser[$response->user_id][$response->question_id]['obs'][] = $response->response;
                }
            }
        }
        dd($respUser);
    }

}
