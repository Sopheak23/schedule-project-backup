<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Faculty;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {  
        return view('departments.create',['faculty_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'department_name'=>'required'
        ]);

        $department = new Department([
            'department_name'=>$request->get('department_name'),
            'faculty_id' => $request->get('faculty_id')
        ]);

        $department->save();
        $faculty_id = $department->faculty_id;
        return redirect('/faculties/'.$faculty_id )->with('success', 'Department has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departments = Department::find($id);
        $dept_prof = $departments->professors;
        return view('departments.show', compact('departments','dept_prof'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::find($id);
        return view('departments.edit', compact('department'));
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
        $request->validate([
            'department_name'=>'required'
        ]);
        $department = Department::find($id);
        $department->department_name = $request->get('department_name');
        $department->save();

        $faculty_id = $department->faculty_id;
        return redirect('/faculties/'. $faculty_id)->with('success', 'Department has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $faculty_id = $department->faculty_id;
        $department->delete();
        return redirect('/faculties/'. $faculty_id)->with('success', 'Department has been deleted Successfully');
    }
}
