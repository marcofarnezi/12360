<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $forms = DB::table('form')
        ->whereNotIn('id', DB::table('form')
            ->join('response', 'form.id', '=', 'response.form_id')
            ->where('response.user_id', '=', Auth::id())
            ->select('form.id')
        )->get();

        $userCount = User::count();
        
        
        $formsResponsed = DB::table('form')
            ->join('response', 'form.id', '=', 'response.form_id')
            ->groupBy('form.id', 'form.title')
            ->havingRaw('count(response.id) = '.  $userCount)
            ->select(['form.id', 'form.title'])
            ->get();

        $formsWaiting = DB::table('form')
            ->join('response', 'form.id', '=', 'response.form_id')
            ->groupBy('form.id', 'form.title')
            ->havingRaw('count(response.id) < '.  $userCount)
            ->select(['form.id', 'form.title', DB::raw('count(response.id) as count')])
            ->get();

        return view(
            'home',
            [
                'forms' => $forms,
                'formsResponsed' => $formsResponsed,
                'formsWaiting' => $formsWaiting,
                'userCount' => $userCount
            ]
        );
    }
}
