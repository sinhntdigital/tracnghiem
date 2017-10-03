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
        $exam=\App\Exam::where('id', $examId)->first();

        if($exam->start_doing==null or (strtotime($exam->end_doing) - strtotime('now') ) <= 0 )
        	return redirect('listquiz');
        else
    		return view('member.quiz',compact('examId','answers','questions','exam'));
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
     /*________list quiz________*/
    public function listQuiz() {
    	$listQuizs=\App\Exam::where('user_id', Auth::user()->id)->get();
  		return view('member.list_quiz',compact('listQuizs'));
    }

     /*________update_start_doing________*/
    public function updateStartDoing() {
    	\App\Exam::where('id', $_GET['sd'])
	          ->update(['start_doing' => date('Y-m-d H-i-s'),'end_doing' => date('Y-m-d H-i-s',strtotime("+ ".$_GET['timeKT']." minutes"))]);
    }

}
