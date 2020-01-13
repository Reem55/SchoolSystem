<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $buses = bus::all();
        return view ('buses.index', compact('buses'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('buses.create'); 
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

             'code'=>'required',
             'user_name'=>'required',
             'driver_name'=>'required',
             'phone'=>'required',
             'password'=>'required',
             'driver_id'=>'required',
             'start_work_time' => 'required',
             'end_work_time' => 'required',
        ]);
        Bus::create($request->all());

        return redirect()->route('buses.index')->with('success','Buses created Successfully');  
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
       $bus = bus::find($id);

        return view('buses.edit', compact('bus'));
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
             'code'=>'required',
             'user_name'=>'required',
             'driver_name'=>'required',
             'phone'=>'required',
             'password'=>'required',
             'driver_id'=>'required',
             'start_work_time' => 'required',
             'end_work_time' => 'required',

      ]);

      $bus = bus::find($id);
        $bus->code = $request->get('code');
        $bus->user_name = $request->get('user_name');
        $bus->driver_name = $request->get('driver_name');
        $bus->phone = $request->get('phone');
        $bus->password = $request->get('password');
        $bus->driver_id = $request->get('driver_id');
        $bus->start_work_time = $request->get('start_work_time');
        $bus->end_work_time = $request->get('end_work_time');
        $bus->save();
      return redirect('/buses')->with('success', 'bus has been updated');  
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            $bus = Bus::find($id);
            $bus->delete();

             return redirect('/buses')->with('success', 'parent has been deleted Successfully');  
    }
}
