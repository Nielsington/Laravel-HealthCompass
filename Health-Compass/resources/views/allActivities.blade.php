@extends('layout')

@section('content')
    <div id='cards-container'>
    @foreach ($Activities as $Activity)
        <div class='activity-card'>
            <div class='activity-title'>
                <h3> {{$Activity->Activity_type}}</h3>
            </div>
            <div class='activity-duration'>
                <img src="{{asset('./images/stopwatch.png')}}" alt="stopwatch icon">
                <p>{{$Activity->Activity_minutes}} minutes</p>
            </div>
            <div class='activity-kcal'>
                <img src="{{asset('./images/kcal.png')}}" alt="calories icon">
                <p>{{$Activity->Kcal_burned}} calories burned!</p>
            </div>
            <div class='notes'>
                <img src="{{asset('./images/notes.png')}}" alt="notepad icon">
                @if (isset($Activity->Notes))
                    <p>{{$Activity->Notes}}</p>
                @else
                    <p>No notes reported</p>
                @endif
            </div>
        </div>
    @endforeach
    </div>
@endsection