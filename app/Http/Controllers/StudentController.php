<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $student=Student::all();
        return view('Students.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $student =new Student;
        
        $student->name=$request->name;

        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/students',$filename);
            $student->image=$filename;
        }
        $student->class=$request->class;
        $student->section=$request->section;
        $student->fname=$request->fname;
        $student->number=$request->number;
        $student->save();
        return redirect()->back()->with('status','Student data Add Successfully');


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
        $student=Student::find($id);
        return view('Students.edit', compact('student'));
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
        
        $student =Student::find($id);
        
        $student->name=$request->name;

        if($request->hasfile('image'))
        {
            $destination ='uploads/students'.$student->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/students',$filename);
            $student->image=$filename;
        }
        $student->class=$request->class;
        $student->section=$request->section;
        $student->fname=$request->fname;
        $student->number=$request->number;
        $student->update();
        return redirect()->back()->with('status','Student data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->back()->with('status','Student data Delete Successfully');
    }
}
