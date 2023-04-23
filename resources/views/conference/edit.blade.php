@extends('format.app')

@section('title', 'Conference Edit Form')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1 class="text-center mb-0">Conference Edit Form <i class="fa-solid fa-pen-to-square"></i></h1>
                </div>
                <div class="card-body">
                    <form action="{{route('conference.update', ['conference'=> $conference->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title-input">Title:</label>
                            <input id="title-input" type="text" name="title" value="{{old('title', optional($conference ?? null)->title)}}" class="form-control">
                            @error('title')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content-input">Content:</label>
                            <textarea  id="content-input" type="text" name="content" class="form-control">{{old('content', optional($conference ?? null)->content)}}</textarea>
                            @error('content')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date-input">Date:</label>
                            <input id="date-input" type="date" name="date" value="{{old('date', optional($conference ?? null)->date)}}" class="form-control" required>
                            @error('date')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address-input">Address:</label>
                            <textarea id="address-input" type="text" name="address" class="form-control">{{old('address', optional($conference ?? null)->address)}}</textarea>
                            @error('address')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
