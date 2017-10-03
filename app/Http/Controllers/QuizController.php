<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index($examId){
    	$questions=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$examId)->groupBy('question_id')->paginate(1);
        $answers=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$examId)->select('*','content_answers.id as content_answer_id')->get();
    	return view('member.quiz',compact('examId','answers','questions'));
    }
    /*________update answer________*/
    public function updateAnswer() {
    	$getUAns=\App\ContentAnswer::where('id', $_GET['contentA_id'])->first();
    	if($getUAns->user_answer==0)
	    	\App\ContentAnswer::where('id', $_GET['contentA_id'])
	          ->update(['user_answer' => 1]);
	    else
	    	\App\ContentAnswer::where('id', $_GET['contentA_id'])
	          ->update(['user_answer' => 0]);
    }

}
