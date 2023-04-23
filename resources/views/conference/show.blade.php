@extends('format.app')

@section('title', 'Conference Show Form')

@section('content')
    @if(session('status'))
        <div style="background-color: cyan; color: black;">{{session('status')}}</div>
    @endif
    <div class="card card-body mt-5">
        <h4 class="text-center mb-3">Conference Details</h4>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="title-input">Title:</label>
                    <p>{{$conference['title']}}</p>
                </div>
                <div class="form-group">
                    <label for="content-input">Description:</label>
                    <p>{{$conference['content']}}</p>
                </div>
                <div class="form-group">
                    <label for="date-input">Date:</label>
                    <p>{{$conference['date']}}</p>
                </div>
                <div class="form-group">
                    <label for="address-input">Address:</label>
                    <p>{{$conference['address']}}</p>
                </div>
                <div class="text-center">
                    <a href="{{ route('conference.index') }}" class="btn btn-secondary mr-2">Main page</a>
                </div>
            </div>
        </div>
    </div>
@endsection
