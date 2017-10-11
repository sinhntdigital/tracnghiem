<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    public function index() {
    	return view("admin.user.listUser");
    }

   

     public function create()
    {

    	$listUsers = \App\User::leftjoin('role_user','role_user.user_id','=','users.id')->leftjoin('roles','role_user.role_id','=','roles.id')->where('roles.name','!=','admin')->groupBy('roles.id')->select('users.*','roles.name as role_name')->get();
       return view("admin.user.create_and_edit",compact('listUsers'));
    }

    public function store(Request $request) {
    	if(isset($_POST['send_form_edit_user']))
	        DB::transaction(function () {
		    	$user = \App\User::where('id',$_POST['user_id'])->first();
		        $user->name  = $_POST['name'];
		        $user->email = $_POST['email'];
		        $user->password = bcrypt($_POST['password']);
		        $user->save();
		        //save role_user
		        $roleUser = \App\RoleUser::where('user_id','=',$_POST['user_id'])->where('role_id','=',$_POST['auth_id'])->first();
		        $roleUser->role_id = $_POST['auth_id'];
		        $roleUser->save();
			});
    	else
    		DB::transaction(function () {
		    	$user = new \App\User;
		        $user->name  = $_POST['name'];
		        $user->email = $_POST['email'];
		        $user->password = bcrypt($_POST['password']);
		        $user->save();
		        //get max id user
		        $maxId = \App\User::max('id');
		        //save role_user
		        $roleUser = new \App\RoleUser;
		        $roleUser->user_id = $maxId;
		        $roleUser->role_id = $_POST['auth_id'];
		        $roleUser->save();
			});
        return redirect()->route('homeAdmin');
    }

    public function show($id) {

    }
    //-----function edit-------//
    public function edit($id,Request $request) {
	    $listUsers = \App\User::leftjoin('role_user','role_user.user_id','=','users.id')->leftjoin('roles','role_user.role_id','=','roles.id')->where('roles.name','!=','admin')->groupBy('roles.id')->select('users.*','roles.name as role_name')->get();
	    $userEdits = \App\User::leftjoin('role_user','role_user.user_id','=','users.id')->leftjoin('roles','role_user.role_id','=','roles.id')->where('users.id','=',$id)->groupBy('roles.id')->select('users.*','roles.name as role_name')->first();
	    return view("admin.user.create_and_edit",compact('listUsers','userEdits'));
    }

}
