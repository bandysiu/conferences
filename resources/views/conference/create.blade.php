@extends('format.app')

@section('title', 'Conference Creation Form')

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
        <h1 style="text-align: center; color: #1E90FF;">Conference Creation Form</h1>
        <form action="{{route('conference.store')}}" method="POST" style="margin-top: 30px;">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="title-input" style="display: block; font-weight: bold; color: #555;">Title: </label>
                <input id="title-input" type="text" name="title" value="{{old('title', optional($conference ?? null)->title)}}" style="padding: 8px; border-radius: 3px; border: 1px solid #ccc; width: 100%;">
                @error('title')
                <p style="color: red; margin-top: 5px;">{{$message}}</p>
                @enderror
            </div>
            <div style="margin-bottom: 20px;">
                <label for="content-input" style="display: block; font-weight: bold; color: #555;">Content: </label>
                <textarea  id="content-input" type="text" name="content" style="padding: 8px; border-radius: 3px; border: 1px solid #ccc; width: 100%;">{{old('content', optional($conference ?? null)->content)}}</textarea>
                @error('content')
                <p style="color: red; margin-top: 5px;">{{$message}}</p>
                @enderror
            </div>
            <div style="margin-bottom: 20px;">
                <label for="date-input" style="display: block; font-weight: bold; color: #555;">Date: </label>
                <input id="date-input" type="date" name="date" value="{{old('date', optional($conference ?? null)->date)}}" required style="padding: 8px; border-radius: 3px; border: 1px solid #ccc; width: 100%;">
                @error('date')
                <p style="color: red; margin-top: 5px;">{{$message}}</p>
                @enderror
            </div>
            <div style="margin-bottom: 20px;">
                <label for="address-input" style="display: block; font-weight: bold; color: #555;">Address: </label>
                <textarea id="address-input" type="text" name="address" style="padding: 8px; border-radius: 3px; border: 1px solid #ccc; width: 100%;">{{old('address', optional($conference ?? null)->address)}}</textarea>
                @error('address')
                <p style="color: red; margin-top: 5px;">{{$message}}</p>
                @enderror
            </div>
            <div style="text-align: center;">
                <input type="submit" value="Create" class="btn btn-success" style="padding: 8px 16px; background-color: #1E90FF; color: white; border: none; border-radius: 3px; cursor: pointer;">
            </div>
        </form>
    </div>
@endsection
