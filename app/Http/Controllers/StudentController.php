<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\Sparent;
use App\bus;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
     $students = student::all();
        return view ('students.index', compact('students'));      
   }

    
    public function create()
    {
     $parents = Sparent::all(); 
     $buses = bus::all();  
     return view('Students.create', compact('parents','buses'));

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

             
             'name'=>'required',
             // 'parent_id'=>'required',
        ]);

        Student::create($request->all());

        return redirect()->route('Students.index')->with('success','Buses created Successfully');   

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
        $student = student::find($id);
        $buses = bus::all();  

        return view('Students.edit', compact('student','buses'));
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
             'name'=>'required',
                          ]);

      $student = student::find($id);
        $student->name = $request->get('name');
        $student->save();
      return redirect('/Students')->with('success', 'student has been updated');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $student = Student::find($id);
            $student->delete();
      return redirect('/Students')->with('success', 'Student has been deleted Successfully');  
    }
}
