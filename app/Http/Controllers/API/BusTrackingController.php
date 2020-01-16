<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\student;
use App\bus;
use App\BusTracking;
use Carbon\Carbon;


class BusTrackingController extends Controller
{

    public function index($id)
    {
        $student = student::findOrFail($id);
        $bus = bus::findOrFail($student->bus_id);
        $busIsMoving = BusTracking::where('bus_id',$bus->id)
                        ->whereHas('bus',function($q){
                            $q->where('start_work_time','<=',date("H:i:s"))->where('end_work_time','>',date("H:i:s"));
                        })
                        ->where('created_at','<',Carbon::now())
                        ->orderBy('id','desc')
                        ->get();

        if($busIsMoving->count() > 0){
            $busIsMoving = $busIsMoving->first();

            return response()->json([
                'current_latitude' => $busIsMoving->current_latitude,
                'current_longitude' => $busIsMoving->current_longitude
                ], 200);
        }

        return response()->json(['message' => 'The bus hadn\'t moved yet.'], 200);

    }

    public function store()
    {

        $busIsMoving = BusTracking::where('bus_id',auth()->id())
                        ->whereHas('bus',function($q){
                            $q->where('start_work_time','<=',date("H:i:s"))->where('end_work_time','>',date("H:i:s"));
                        })
                        ->where('created_at','<',Carbon::now())
                        ->orderBy('id','desc')
                        ->get();

        if($busIsMoving->count() > 0){
            $busIsMoving = $busIsMoving->first();

            $busIsMoving->update([
                'current_longitude' => request('current_longitude'),
                'current_latitude' => request('current_latitude'),
            ]);
        }else{
            BusTracking::create([
                'bus_id' => auth()->id(),
                'current_longitude' => request('current_longitude'),
                'current_latitude' => request('current_latitude'),
            ]);
        }


        return response()->json(['message' => 'success'], 200);
    }
}