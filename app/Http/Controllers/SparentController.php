<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sparent;
use App\student;


class SparentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $Sparents = Sparent::with('student')->get();
     return view('Sparents.index',compact('Sparents') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $students = Student::all();   
       return view('Sparents.create',compact('Sparent') ,['student' => $students]);



   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              // dd($request->all());

         $request->validate([
        'code'=>'required',
        'first_name'=> 'required',
        'last_name' => 'required',
        'user_name' => 'required',
        'password' => 'required',
        'mobile_number1' => 'required',
        'mobile_number2' => 'required',
        'address' => 'required',
        'student_id'=>'required'
      ]);
      $sparent = new sparent([
        'code' => $request->get('code'),
        'first_name' => $request->get('first_name'),
        'last_name'=> $request->get('last_name'),
        'user_name'=> $request->get('user_name'),
        'password'=> $request->get('password'),
        'mobile_number1'=> $request->get('mobile_number1'),
        'mobile_number2'=> $request->get('mobile_number2'),
        'address'=> $request->get('address'),
        'student_id'=> $request->get('student_id')
      ]);
      $students = Student::all(); 
      $sparent->save();
      return redirect('/Sparents')->with('success', 'parent has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $Sparent = Sparent::find($id);

     return view('Sparents.show', compact('Sparent'));
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Sparent = Sparent::find($id);
         $students = Student::all(); 

        return view('Sparents.edit', compact('Sparent') ,['student' => $students]);    }

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
        'code'=>'required',
        'first_name'=> 'required',
        'last_name' => 'required',
        'user_name' => 'required',
        'password' => 'required',
        'mobile_number1' => 'required',
        'mobile_number2' => 'required',
        'address' => 'required'
      ]);

      $sparent = Sparent::find($id);
      $sparent->first_name = $request->get('first_name');
      $sparent->last_name = $request->get('last_name');
      $sparent->user_name = $request->get('user_name');
      $sparent->password = $request->get('password');
      $sparent->mobile_number1 = $request->get('mobile_number1');
      $sparent->mobile_number2 = $request->get('mobile_number2');
      $sparent->address = $request->get('address');
      $sparent->save();

      return redirect('/Sparents')->with('success', 'Parent has been updated');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  $sparent = sparent::find($id);
     $sparent->delete();

     return redirect('/sparents')->with('success', 'parent has been deleted Successfully');
    }
}
