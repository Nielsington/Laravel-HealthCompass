@extends('layout')

@section('title')
    <title> New Day </title>
@endsection

@section('content')
    <main>
        <div class='container-style'>
            <form action="{{route('newDay')}}" method="POST">
                @csrf
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <label for="firstName">First name:</label>
                <input type="text" id="firstName" name="firstName">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="description">Describe your problem:</label>
                <textarea id="description" rows="4" cols="50" name="description"></textarea>
                <button type="submit">Submit ticket!</button>
            </form>
        </div>
    </main>
@endsection