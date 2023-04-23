@extends('format.app')

@section('title', 'Conferences')

@section('content')
    <h1 class="title">List of Conferences</h1>

    @if(session('status'))
        <div class="notification is-success">{{ session('status') }}</div>
    @endif

    @auth
        <a href="{{ route('conference.create') }}" class="button is-primary">Create conference</a>
    @endauth

    @foreach($conferences as $conference)
        @include('conference.partials.list', ['conference' => $conference])
    @endforeach
@endsection
