<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use App\Curso;
use App\Grade;
use App\Grupo;
use App\CursoMember;
use App\GroupMember;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todosCC = Curso::all();
        return $todosCC;
    }
    public function nivel()
    {
        $todoG = Grupo::all();
        return $todoG;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $student = GroupMember::join('mdluu_user', 'mdluu_user.id', '=', 'mdluu_groups_members.userid')->where('groupid',$id)->get()->toArray();
        return $student;
    }
    public function editc($id)
    {
        $student = CursoMember::join('mdluu_user', 'mdluu_user.id', '=', 'mdluu_course_completions.userid')->where('course',$id)->get()->toArray();
        return $student;
    }
    public function editn($id)
    {

        $studen = Item::select("mdluu_grade_grades.finalgrade","mdluu_grade_grades.rawgrade","mdluu_grade_grades.userid","mdluu_grade_grades.itemid")->join('mdluu_grade_grades', 'mdluu_grade_grades.itemid', '=', 'mdluu_grade_items.id')->where('courseid',$id)->get()->toArray();
        return  $studen;
    }

    public function editnt($id)
    {

        $studen = Grade::select("mdluu_grade_items.itemname","mdluu_grade_grades.userid")->join('mdluu_grade_items', 'mdluu_grade_items.id', '=', 'mdluu_grade_grades.itemid')->get()->toArray();
        return $studen;
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
