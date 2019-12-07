<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use App\User;
use Illuminate\Http\Request;

use Auth;


class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $lecturers = User::where('role_id', '2')->orderBy('created_at','desc')->get();
        $departments = Department::orderBy('name', 'asc')->get();


        return view('admin.lecturer.index', compact('user', 'lecturers', 'departments'));
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
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'regnumber' => 'required|string|unique:users',
            'phone' => 'required|integer',
            'department_id' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|string|min:6|confirmed',

        ]);

        $user = new User;
        
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->othername = $request->othername;
        $user->regnumber = $request->regnumber;
        $user->department_id = $request->department_id;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        

        $user->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lecturer=User::find($id);
        $lecturercourses=Course::where('user_id',$id)->get();
        
        return view('admin.lecturer.show',array('user'=>Auth::user()),compact('lecturer','lecturercourses'));
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
