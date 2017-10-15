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

    	$listUsers = \App\Role::where('name','!=','admin')->get();
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
        		\App\RoleUser::where('user_id','=',$_POST['user_id'])->where('role_id','=',$_POST['old_auth_id'])->update(['role_id' => $_POST['auth_id']]);
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
	    $listUsers = \App\Role::where('name','!=','admin')->get();
	    $userEdits = \App\User::leftjoin('role_user','role_user.user_id','=','users.id')->where('users.id','=',$id)->first();
	    return view("admin.user.create_and_edit",compact('listUsers','userEdits'));
    }

     //-----select level-------//
    public function selectLevel(Request $request) {
    	if ($request->field_id == "")
    		return "";
    	else
    	{
    		$listLevels = \App\Level::where('field_id',$request->field_id)->get();
    		return view("admin.ajax.select_level",compact('listLevels'));
    	}
    }

}
