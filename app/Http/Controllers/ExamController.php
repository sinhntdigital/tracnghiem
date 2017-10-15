<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.exam.listExam');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listFields = \App\Field::get();
        return view('admin.exam.create_and_edit',compact('listFields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if(isset($_POST['send_form_exam_edit'])) {
            $exam = \App\Exam::find($request->exam_id);
            $exam->level_id = $_POST['level_id'];
            $exam->title_exam = $_POST['title_exam'];
            $exam->user_id = 1;
            $exam->save();
        }
        else {
            $exam = new \App\Exam;
            $exam->level_id = $_POST['level_id'];
            $exam->title_exam = $_POST['title_exam'];
            $exam->user_id = 1;
            $exam->save();
        }
        return redirect()->route('exam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listQuestions = \App\Question::leftjoin('content_answers','questions.id','=','content_answers.question_id')->where('exam_id',$id)->groupBy('questions.id')->select('*',\DB::raw('count(question_id) as total_ans'))->get();
        return view('admin.exam.detail_exam',compact('listQuestions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rowExam = \App\Exam::where('id',$id)->first();
        $rowLevel = \App\Level::where('id',$rowExam->level_id)->first();
        $listFields = \App\Field::get();
        $listLevels = \App\Level::where('field_id',$rowLevel->field_id)->get();
        return view('admin.exam.create_and_edit',compact('rowExam','rowLevel','listFields','listLevels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
