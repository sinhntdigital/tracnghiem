<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class DatatablesController extends Controller
{
    //user datatables
    public function userData()
    {

    	$user = \App\User::leftjoin('role_user','role_user.user_id','=','users.id')->leftjoin('roles','role_user.role_id','=','roles.id')->where('roles.name','!=','admin')->select('users.*')->get();
       	return Datatables::of($user)
			                ->addColumn('action', function($user) {
			                	$textDelete = "<form action='' method='post'>";
			                 	$textDelete .= csrf_field() . method_field('delete');
								$textDelete .= "<a href='". route("admin.edit", $user->id) ."' class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i></a>";
								$textDelete .= "<button type=\"submit\" onclick=\"return confirm('Are you sure ?')\" class=\"btn btn-xs btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></button>";
								$textDelete .= "</form>";

				                return $textDelete;
			                })
			                ->make(true);
    }

     //user datatables
    public function roleData()
    {

    	$role = \App\Role::get();
       	return Datatables::of($role)
			                ->addColumn('action', function($role) {
			                	$textDelete = "<form action='' method='post'>";
			                 	$textDelete .= csrf_field() . method_field('delete');
								$textDelete .= "<a href='". route("listRole.edit", $role->id) ."' class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i></a>";
								$textDelete .= "<button type=\"submit\" onclick=\"return confirm('Are you sure ?')\" class=\"btn btn-xs btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></button>";
								$textDelete .= "</form>";

				                return $textDelete;
			                })
			                ->make(true);
    }

     //user datatables
    public function fieldData()
    {

    	$field = \App\Field::get();
       	return Datatables::of($field)
			                ->addColumn('action', function($field) {
			                	$textDelete = "<form action='' method='post'>";
			                 	$textDelete .= csrf_field() . method_field('delete');
								$textDelete .= "<a href='". route("field.edit", $field->id) ."' class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i></a>";
								$textDelete .= "<button type=\"submit\" onclick=\"return confirm('Are you sure ?')\" class=\"btn btn-xs btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></button>";
								$textDelete .= "</form>";

				                return $textDelete;
			                })
			                ->make(true);
    }

       //user datatables
    public function LevelData()
    {

    	$level = \App\Level::leftjoin('fields','levels.field_id','=','fields.id')->select('levels.*',"fields.name")->get();
       	return Datatables::of($level)
			                ->addColumn('action', function($level) {
			                	$textDelete = "<form action='' method='post'>";
			                 	$textDelete .= csrf_field() . method_field('delete');
								$textDelete .= "<a href='". route("level.edit", $level->id) ."' class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i></a>";
								$textDelete .= "<button type=\"submit\" onclick=\"return confirm('Are you sure ?')\" class=\"btn btn-xs btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></button>";
								$textDelete .= "</form>";

				                return $textDelete;
			                })
			                ->make(true);
    }

        //exam datatables
    public function examData()
    {

    	$exam = \App\Exam::leftjoin('questions','questions.exam_id','=','exams.id')->leftjoin('content_answers','content_answers.question_id','=','questions.id')->groupBy('exams.id')->select('*','exams.id as eid', \DB::raw('count(DISTINCT(questions.id)) as total'))->get();
       	return Datatables::of($exam)
			                ->addColumn('action', function($exam) {
			                	$textDelete = "<form action='' method='post'>";
			                 	$textDelete .= csrf_field() . method_field('delete');
								$textDelete .= "<a href='". route("exam.edit", $exam->eid) ."' class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i></a>";
								$textDelete .= "<button type=\"submit\" onclick=\"return confirm('Are you sure ?')\" class=\"btn btn-xs btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></button>";
								if($exam->total == 0)
									$textDelete .= "<a href='". route("question.create","exam_id=".$exam->eid) ."' class=\"btn btn-xs btn-primary\">thêm câu hỏi</a>";
								else
									$textDelete .= "<a href='". route("exam.show", $exam->eid) ."' class=\"btn btn-xs btn-primary\">xem chi tiết</a>";
								$textDelete .= "</form>";

				                return $textDelete;
			                })
			                ->make(true);
    }
}
