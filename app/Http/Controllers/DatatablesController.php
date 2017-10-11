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
			                 })
			                 ->make(true);
    }
}
