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
    <div id="flex-wrap">
        <div id='activityContainer'>
            @if(isset($activityData))
                {{-- <p>Form has been submitted</p> --}}
                <div id='activity_stats'>
                    <div id="activity">
                        <img src="{{asset('./images/sport.png')}}" alt="sport icon">
                        <p>{{$activityData->Activity_type}} </p>
                    </div>
                    <div id="activityDuration">
                        <img src="{{asset('./images/stopwatch.png')}}" alt="stopwatch icon">
                        <p>{{$activityData->Activity_minutes}} minutes</p>
                    </div>
                    <div id="kcalBurned">
                        <img src="{{asset('./images/kcal.png')}}" alt="kcal icon">
                        <p>{{$activityData->Kcal_burned}} calories burned!</p>
                    </div>
                </div>
                {{-- TODO:if notes = NULL then <p>No notes to report</p> --}}
                <img id="notes" src="{{asset('./images/notes.png')}}" alt="notes icon">
                <p id='activityReport'>{{$activityData->Notes}}</p>
            @else
                {{-- TODO: Add plus sign logo to go to activityForm view --}}
                <a href="{{route('activityForm')}}"><img id="plusIcon" src="{{asset('./images/plus.png')}}" alt="Add sign icon"></a>
            @endif
        </div>

    <div id='grid-container'>
        <div id='bodyPicContainer'>
            bodyPic
        </div>

        <div id="mood-container">
            @if(isset($moodData))
                <img src="{{asset('./images/mood.png')}}" alt="mood icon">
                <p>{{$sleepData->mood}} mood</p>
            @else
                <img src="./images/plus.png" alt="Add sign icon" id="addMood">
            @endif
        </div>

        {{-- TODO: style the form you generate with javascript --}}
        
        <div id='sleepContainer'>
            @if(isset($sleepData))
                <div id='sleep-container'>
                    <div id="sleepDuration">
                        <img src="{{asset('./images/sleepDuration.png')}}" alt="sleep duration icon">
                        <p>{{$sleepData->hours_sleep}} hours of sleep</p>
                    </div>
                </div>
                {{-- TODO:if dream = NULL then <p>No dream to report</p> --}}
                <img id="dreamCatcherIcon" src="{{asset('./images/dream.png')}}" alt="dream catcher icon">
                <p id='dreamReport'>{{$sleepData->dream_description}}</p>
            @else
                {{-- <form id="moodSleepForm" action="/submit-sleep" method="POST">
                    @csrf
                    <label for="mood">Mood</label>
                    <input type="text" name="mood" id="mood">
                    <label for="sleepHours">Sleep duration</label>
                    <input type="text" name="sleepHours" id="sleepHours">
                    <label for="dream">Dream</label>
                    <textarea name="dream" id="dream" cols="30" rows="10" placeholder="If you had a dream, describe it here"></textarea>
                    <button type="submit" id="submit-sleep">SAVE</button>
                </form> --}}
            @endif
            
        </div>
        <div id='newDay'>
            <form action="/reset" method="post">
                <button type="submit"><a>RESET</a></button>
            </form>
        </div>
    </div>
</div>
@endsection