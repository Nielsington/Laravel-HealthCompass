<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SleepMood;
use App\Models\ActivityLog;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function show() 
    {
        $sleepData = SleepMood::whereDate('created_at', Carbon::today())->first();
        $activityData = ActivityLog::whereDate('created_at', Carbon::today())->first();

        return view('dashboard', ['sleepData'=>$sleepData, 'activityData'=>$activityData]);
    }

    public function handleSleepForm(Request $request) 
    {
        $sleepData = new SleepMood();

        $sleepData->mood = $request['mood'];
        $sleepData->hours_sleep = $request['sleepHours'];
        $sleepData->dream_description = $request['dream'];
        $sleepData->save();

        return redirect()->route('dashboard');
    }

    public function handleActivityForm(Request $request)
    {
        $activityData = new ActivityLog();

        $activityData->Activity_type = $request['activity-type'];
        $activityData->Activity_minutes = $request['activity-duration'];
        $activityData->Kcal_burned = $request['kcal'];
        $activityData->Notes = $request['dream'];
        $activityData->save();

        return redirect()->route('dashboard');
    }
}
