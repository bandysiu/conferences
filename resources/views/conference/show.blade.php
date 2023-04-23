@extends('format.app')
@section('title', 'Conference Show Form')
@section('content')
    @if(session('status'))
        <div style="color: black;">{{session('status')}}</div>
    @endif
    <h4>Title</h4><p>{{$conference['title']}}</p>
    <p><b>Description: </b>{{$conference['content']}}</p>
    <p><b>Date: </b>{{$conference['date']}}</p>
    <p><b>Address: </b>{{$conference['address']}}</p>
    <a href="{{ route('conference.index') }}">
        <button class="btn btn-secondary">Main page</button>
    </a>
@endsection
