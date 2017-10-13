<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.level.listLevel");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listFields = \App\Field::get();
        return view("admin.level.create_and_edit",compact('listFields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($_POST['send_form_level_edit'])) {
            $level = \App\Level::find($_POST['level_id']);
            $level->field_id  = $_POST['field_id'];
            $level->title_level  = $_POST['title_level'];
            $level->save();
        }
        else {
            $level = new \App\Level;
            $level->field_id  = $_POST['field_id'];
            $level->title_level  = $_POST['title_level'];
            $level->save();
        }
        

        return redirect()->route('level.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listFields = \App\Field::get();
        $listLevel = \App\Level::where('id',$id)->first();
        return view("admin.level.create_and_edit",compact('listFields','listLevel'));
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
