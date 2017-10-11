<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class DatatablesController extends Controller
{
    //user datatables
    public function userData()
    {

    	$user = \App\User::leftjoin('role_user','role_user.user_id','=','users.id')->leftjoin('roles','role_user.role_id','=','roles.id')->where('roles.name','=','member')->select('users.*')->get();
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
}
