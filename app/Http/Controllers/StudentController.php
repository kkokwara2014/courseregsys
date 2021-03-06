<?php

namespace App\Http\Controllers;

use App\Course;
use App\Course_reg;
use App\User;
use Illuminate\Http\Request;
use Auth;

use App\Department;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $user = Auth::user();
        $students = User::where('role_id', '3')->orderBy('created_at', 'desc')->get();
        $departments = Department::orderBy('name', 'asc')->get();

        return view('admin.student.index', compact('user', 'students', 'departments'));

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
        $student = User::find($id);

        $courses=Course::orderBy('title','asc')->get();

        $regcourses=Course_reg::where('user_id',$id)->get();
        // $regcourses=User::find($id)->coursereg;
    
        return view('admin.student.show', array('user' => Auth::user()), compact('student','courses','regcourses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
