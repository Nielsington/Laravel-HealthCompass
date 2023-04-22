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
    <aside id='activity-container'>
        <div id='addActivity-container'>
            <p id='activity-container-title'>Today's activities</p>
            <a id='addActivity' href="{{route('activityForm')}}">
                <img src="{{asset('./images/plus.png')}}" alt="Add sign icon">
            </a>
        </div>
        @if(isset($activityData))
            @foreach($activityData as $activity)
                @if($loop->last)
                    <div id='last_activity_stats'>
                @else
                    <div id='activity_stats'>
                @endif
                        <div id="activity">
                            <img src="{{asset('./images/sport.png')}}" alt="sport icon">
                            <p>{{$activity->Activity_type}}</p>
                        </div>
                        <div id="activityDuration">
                            <img src="{{asset('./images/stopwatch.png')}}" alt="stopwatch icon">
                            <p>{{$activity->Activity_minutes}} minutes</p>
                        </div>
                        <div id="kcalBurned">
                            <img src="{{asset('./images/kcal.png')}}" alt="kcal icon">
                            <p>{{$activity->Kcal_burned}} calories</p>
                        </div>
                        {{-- Make detail page --}}
                        {{-- <a href="{{route('detail')}}">See details</a> --}}
                    </div>
            @endforeach
        @endif
    </aside>
    <main id='grid-container'>

        <section id='weather-widget'>
            <div id="ww_9c42bdaca2406" v='1.3' loc='auto' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722","el_whr":3,"el_phw":3}'>
                Weather Data Source: 
                <a href="https://wetterlang.de/wetter_21_tage/" id="ww_9c42bdaca2406_u" target="_blank">Wettervorhersage 21 tage</a>
            </div>
        </section>

        <section id='stepCount'>
            <p>Daily steps</p>
            <p>{{$stepsData}} / 10.000</p>
            <form action="/submit-steps" method="post">
                @csrf
                <input type="text" name="stepsInput" placeholder="Enter steps">
                <button type="submit">+</button>
            </form>
        </section>

        <section id='kcalCount'>
            <p>Max kcal/day</p>
            <p># / #</p>
        </section>

        <div id="mood-container">
            <p>Mood Tracker</p>
            @if(isset($moodData))
                <div id='mood-data-container'>
                    <img src="{{asset('./images/mood.png')}}" alt="mood icon">
                    <p>{{$moodData->mood}} mood</p>
                </div>
            @else
                <img src="./images/plus.png" alt="Add sign icon" id="addMoodIcon">
            @endif
        </div>

        <div id='sleep-container'>
            <p id="dreamCatcherTitle">Sleep Tracker</p>
            <img src="{{asset('./images/sleepDuration.png')}}" alt="sleep duration icon">

            @if(isset($sleepData))
                    <div id="sleepDuration">
                        <p>{{$sleepData->hours_sleep}} hours of sleep</p>
                    </div>
                {{-- TODO:if dream = NULL then <p>No dream to report</p> --}}
                <img id="dreamCatcherIcon" src="{{asset('./images/dream.png')}}" alt="dream catcher icon">
                <p id='dreamReport'>{{$sleepData->dream_description}}</p>
            @else
                <a href="/create-sleep"><img src="./images/plus.png" alt="Add sign icon" id="addSleep"></a>   
            @endif
        </div>

        {{-- <div id='newDay'>
            <form action="/reset" method="post">
                <button type="submit"><a>RESET</a></button>
            </form>
        </div> --}}
    </main>
</div>
@endsection