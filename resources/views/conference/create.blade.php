@extends('format.app')

@section('title', 'Conference Creation Form')

@section('content')
    <h1>Conference Creation Form</h1>
    <form action="{{route('conference.store')}}" method="POST">
        @csrf
        @include('conference.partials.form')
        <br>
        <div><input type="submit" value="Create" class="btn btn-success"></div>
    </form>
@endsection
