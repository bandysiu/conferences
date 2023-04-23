@extends('format.app')
@section('title', 'Conferences')
@section('content')
    <h1>List of Conferences</h1>
    @if(session('status'))
        <div style="background-color: cyan; color: cyan;">{{session('status')}}</div>
    @endif
    @guest
    @else
        <a href="{{route('conference.create')}}">
            <button type="button" class="btn btn-success">Create conference</button>
        </a>
    @endguest
    @each('conference.partials.list', $conferences, 'conference')
@endsection
