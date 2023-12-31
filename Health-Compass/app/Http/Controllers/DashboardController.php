<?php
// TODO: add validation for every form
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SleepLog;
use App\Models\ActivityLog;
use App\Models\MoodLog;
use App\Models\StepsLog;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class DashboardController extends Controller
{
    public function show() 
    {
        $sleepData = $this->fetchSleepData();
        $activityData = $this->fetchActivityData();
        $moodData = $this->fetchMoodData();
        $stepsData = $this->fetchStepsData();

        return view('dashboard', ['sleepData'=>$sleepData, 
                                               'activityData'=>$activityData, 
                                               'moodData'=>$moodData,
                                               'stepsData'=>$stepsData
                                            ]);
    }

    //Activity Form

    public function showActivityForm ()
    {
        return view('activityForm');
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

    private function fetchActivityData(): Collection
    {
        $activityData = ActivityLog::whereDate('created_at', Carbon::today())->get();
        return $activityData;
    }

    //Steps Form

    public function handleStepsForm(Request $request)
    {
        $steps = new StepsLog();
        $steps->steps = $request['stepsInput'];
        $steps->save();

        return redirect('/');
    }

    private function fetchStepsData(): int
    {
        $stepsData = StepsLog::whereDate('created_at', Carbon::today())->get();
        $stepTotal = 0;
        foreach ($stepsData as $steps) {
            $stepTotal += $steps->steps;
        }
        return $stepTotal;
    }

    //Mood Form

    public function handleMoodForm(Request $request)
    {
        $mood = new MoodLog();
        $mood->mood = $request['mood'];
        $mood->save();

        return redirect('/');
    }

    private function fetchMoodData()
    {
        $moodData = MoodLog::whereDate('created_at', Carbon::today())->first();
        if ($moodData)
            return $moodData;
    }

    //Sleep Form

    public function showSleepForm()
    {
        return view('sleepForm');
    }

    public function handleSleepForm(Request $request) 
    {
        $sleepData = new SleepLog();

        $sleepData->hours_sleep = $request['sleepHours'];
        $sleepData->dream_description = $request['dream'];
        $sleepData->save();

        return redirect()->route('dashboard');
    }

    private function fetchSleepData()
    {
        $sleepData = SleepLog::whereDate('created_at', Carbon::today())->first();

        if($sleepData)
            return $sleepData;
    }
}
