@extends('layout')

@section('content')
    {{-- <div id='nutrition'>
        <div id='breakfast'>
            breakfast
        </div>
        <div id='lunch'>
            lunch
        </div>
        <div id='diner'>
            diner
        </div>
    </div> --}}

    <div class='containers-wrap'>
        <div id='activityContainer'>
            @if(isset($activityData))
                <p>Form has been submitted</p>
            @else
                <form class="dashboard-forms" action="/submit-activity" method="POST">
                    @csrf
                    <label for="activity-type">Sport</label>
                    <input type="text" name="activity-type" id="activity-type">
                    <label for="activity-duration">Duration (minutes)</label>
                    <input type="text" name="activity-duration" id="activity-duration">
                    <label for="kcal">Calories burned</label>
                    <input type="text" name="kcal" id="kcal">
                    <label for="notes">Notes</label>
                    <textarea name="dream" id="dream" cols="30" rows="10" placeholder="Any additional notes?"></textarea>
                    <button type="submit" id="submit-activity">SAVE</button>
                </form>
            @endif
        </div>

        <div id='bodyPicContainer'>
            bodyPic
        </div>

        <div id='sleepContainer'>
            @if(isset($sleepData))
                <p>Form has been submitted</p>
            @else
                <form class="dashboard-forms" action="/submit-sleep" method="POST">
                    @csrf
                    <label for="mood">Mood</label>
                    <input type="text" name="mood" id="mood">
                    <label for="sleepHours">Sleep duration</label>
                    <input type="text" name="sleepHours" id="sleepHours">
                    <label for="dream">Dream</label>
                    <textarea name="dream" id="dream" cols="30" rows="10" placeholder="If you had a dream, describe it here"></textarea>
                    <button type="submit" id="submit-sleep">SAVE</button>
                </form>
            @endif
            
        </div>
        <div id='newDay'>
            <p>NEW DAY</p>
        </div>
    </div>
@endsection