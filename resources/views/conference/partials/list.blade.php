<h4>Title</h4><p>{{$conference['title']}}</p>
<p><b>Description:</b> {{$conference['content']}}</p>
<p><b>Date:</b> {{$conference['date']}}</p>
<p><b>Address:</b> {{$conference['address']}}</p>
@guest
@else
    <a href="{{route('conference.edit', ['conference'=>$conference['id']]) }}">
        <button type="button" class="btn btn-secondary">Edit</button>
    </a>
    <form action="{{ route('conference.destroy', ['conference' => $conference['id']])  }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endguest
<br>
