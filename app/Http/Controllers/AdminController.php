<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

    }

    public function manageUser() {
    	return view("admin.user.listUser");
    }

    public function store(Request $request) {
    	
    }
}
