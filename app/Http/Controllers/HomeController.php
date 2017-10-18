<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = \App\Exam::paginate(20);
        $userExams = \App\UserExam::where('user_id',Auth::user()->id)->get();
        return view('home',compact('exams','userExams'));
    }
}
