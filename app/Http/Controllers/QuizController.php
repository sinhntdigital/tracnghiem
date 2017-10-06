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
        $answers=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->leftjoin('user_answers','content_answers.id','=','user_answers.content_answer_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$examId)->select('*','content_answers.id as content_answer_id')->get();
        $userA=\App\UserAnswer::where('user_answers.content_answer_id', $examId)->where('user_answers.user_id',Auth::user()->id)->first();
        $exam=\App\Exam::where('id', $examId)->first();

        if($exam->start_doing==null or (strtotime($exam->end_doing) - strtotime('now') ) <= 0 )
        	return redirect('listquiz');
        else
    		return view('member.quiz',compact('examId','answers','questions','exam','userA'));
    }
    /*________update answer________*/
    public function updateAnswer() {
    	$userA=\App\UserAnswer::where('user_answers.content_answer_id', $_GET['contentA_id'])->where('user_answers.user_id',Auth::user()->id)->first();
    	$iUserA = new \App\UserAnswer;
    	if ($userA==null)
    	{
        	$iUserA->user_id = Auth::user()->id;
        	$iUserA->content_answer_id = $_GET['contentA_id'];
        	$iUserA->user_answer = 1;
        	$iUserA->save();
    	}
    	else {
				if($userA->user_answer==0)
					$userA=\App\UserAnswer::where('user_answers.content_answer_id', $_GET['contentA_id'])->where('user_answers.user_id',Auth::user()->id)->update(['user_answer' => 1]);
				else
					$userA=\App\UserAnswer::where('user_answers.content_answer_id', $_GET['contentA_id'])->where('user_answers.user_id',Auth::user()->id)->update(['user_answer' => 0]);
	    	}
    	
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

    /*__________result quiz__________*/
    public function result($examId){
        $answers=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->leftjoin('user_answers','content_answers.id','=','user_answers.content_answer_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$examId)->select('*','content_answers.id as content_answer_id')->get();

        $questions=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->leftjoin('user_answers','content_answers.id','=','user_answers.content_answer_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$examId)->groupBy('question_id')->select('*','content_answers.id as content_answer_id')->get();

        $results=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->leftjoin('user_answers','content_answers.id','=','user_answers.content_answer_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$examId)->where('answer','=',1)->select('*','content_answers.id as content_answer_id')->get();
         $resultOfYous=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->leftjoin('user_answers','content_answers.id','=','user_answers.content_answer_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$examId)->where('user_answer','=',1)->select('*','content_answers.id as content_answer_id')->get();
        return view('member.result',compact('answers','questions','results','resultOfYous')); 
    }

    /*________detail question____________*/
    public function detailQuestion() {
    	$details=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->leftjoin('user_answers','content_answers.id','=','user_answers.content_answer_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$_GET['exam_id'])->where('question_id','=',$_GET['question_id'])->select('*','content_answers.id as content_answer_id')->get();
    	return view('member.detailQuestion',compact('details'));
    }

}
