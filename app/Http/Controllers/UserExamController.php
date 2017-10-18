<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserExamController extends Controller
{
    public function Addnew($examId) {
    	$userExam = new \App\UserExam;
    	$userExam->exam_id = $examId;
    	$userExam->user_id = Auth::user()->id;
    	$userExam->save();
    	return redirect()->route('listquiz');
    }

    public function deleteExam($examId) {
    	$deletedRows = \App\UserExam::where('exam_id', $examId)->where('user_id', Auth::user()->id)->delete();
    	return redirect()->route('listquiz');
    }

}
