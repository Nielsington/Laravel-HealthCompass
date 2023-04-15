@extends('layout')

@section('content')
    <div id='nutrition'>
        <div id='breakfast'>
            breakfast
        </div>
        <div id='lunch'>
            lunch
        </div>
        <div id='diner'>
            diner
        </div>
    </div>

    <div class='containers-wrap'>
        <div id='sleepContainer'>
            <form class="dashboard-forms" action="/submit-sleep" method="POST">
                @csrf
                <label for="mood">Mood</label>
                <input type="text" name="mood" id="mood">
                <label for="sleepHours">Hours of sleep</label>
                <input type="text" name="sleepHours" id="sleepHours">
                <label for="dream">If you had a dream, describe it here</label>
                <textarea name="dream" id="dream" cols="30" rows="10"></textarea>
                <button type="submit">SAVE</button>
            </form>
        </div>

        <div id='activityContainer'>
            <form class="dashboard-forms" action="/submit-activity" method="POST">
                @csrf
                <label for="activity-type">What sport did you do?</label>
                <input type="text" name="activity-type" id="activity-type">
                <label for="activity-duration">For how long? (minutes)</label>
                <input type="text" name="activity-duration" id="activity-duration">
                <label for="kcal">How many calories did you burn?</label>
                <input type="text" name="kcal" id="kcal">
                <label for="notes">Any additional notes?</label>
                <textarea name="dream" id="dream" cols="30" rows="10"></textarea>
                <button type="submit">SAVE</button>
            </form>
        </div>
        <div id='bodyPicContainer'>
            bodyPic
        </div>
        <div id='newDay'>
            <p>NEW DAY</p>
        </div>
    </div>
@endsection