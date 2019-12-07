<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\Semester;
use Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $semesters=Semester::orderBy('name','asc')->get();
        $departments=Department::orderBy('name','asc')->get();
        $courses=Course::orderBy('created_at','desc')->get();

        return view('admin.course.index',compact('courses','departments','semesters','user'));
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
        $this->validate($request, [
            'title' => 'required|string',
            'code' => 'required',
            'creditload' => 'required',
            'semester_id' => 'required',
            'acadsession' => 'required',
            'department_id' => 'required',
        ]);

        Course::create($request->all());

        return redirect(route('course.index'));
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
        $user = Auth::user();
        $semesters=Semester::orderBy('name','asc')->get();
        $departments=Department::orderBy('name','asc')->get();
        $courses=Course::where('id',$id)->first();

        return view('admin.course.edit',compact('courses','departments','semesters','user'));
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
        $this->validate($request, [
            'title' => 'required|string',
            'code' => 'required',
            'creditload' => 'required',
            'semester_id' => 'required',
            'acadsession' => 'required',
            'department_id' => 'required',
        ]);

        $course = Course::find($id);
        $course->title = $request->title;
        $course->code = $request->code;
        $course->creditload = $request->creditload;
        $course->semester_id = $request->semester_id;
        $course->acadsession = $request->acadsession;
        $course->department_id = $request->department_id;

        $course->save();

        return redirect(route('course.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Course::where('id', $id)->delete();
        return redirect()->back();
    }
}
