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

}
