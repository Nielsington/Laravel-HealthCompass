@extends('layout')

@section('content')
<div id="activityForm-container">
    <form id="activityForm" action="/submit-activity" method="POST">
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
</div>
@endsection