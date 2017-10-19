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
        $fields = \App\Field::get();
        $levels = \App\Level::get();
        if(isset($_POST['search_exam'])) {
            if(isset($_POST['field']))
                $exams = \App\Exam::join('levels','levels.id','=','exams.level_id')->join('fields','levels.field_id','=','fields.id')->whereIn('levels.field_id',$_POST['field'])->where('levels.id',$_POST['level'])->paginate(20);
            else
                $exams = \App\Exam::join('levels','levels.id','=','exams.level_id')->join('fields','levels.field_id','=','fields.id')->where('levels.id',$_POST['level'])->paginate(20);
        }
        else
            $exams = \App\Exam::paginate(20);
        $userExams = \App\UserExam::where('user_id',Auth::user()->id)->get();
        return view('home',compact('exams','userExams','fields','levels'));
    }
}
