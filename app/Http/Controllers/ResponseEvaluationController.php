<?php


namespace App\Http\Controllers;


use App\Question;
use App\User;

class ResponseEvaluationController extends Controller
{
    private $question;
    private $user;

    public function __construct(Question $question, User $user)
    {
        $this->question = $question;
        $this->user = $user;
    }

    public function index()
    {
        dd('teste');

    }

}