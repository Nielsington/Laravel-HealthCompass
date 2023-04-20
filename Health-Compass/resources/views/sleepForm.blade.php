@extends('layout')

@section('content')
    <div id="sleepForm-container">
        <form id="moodSleepForm" action="/submit-sleep" method="POST">
            @csrf
            <label for="mood">Mood</label>
            <input type="text" name="mood" id="mood">
            <label for="sleepHours">Sleep duration</label>
            <input type="text" name="sleepHours" id="sleepHours">
            <label for="dream">Dream</label>
            <textarea name="dream" id="dream" cols="30" rows="10" placeholder="If you had a dream, describe it here"></textarea>
            <button type="submit" id="submit-sleep">SAVE</button>
        </form>
    </div>
@endsection