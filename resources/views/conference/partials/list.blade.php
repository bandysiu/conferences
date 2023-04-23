<h4 class="subtitle is-4">Title</h4>
<p>{{ $conference['title'] }}</p>

<p class="subtitle is-6"><b>Description:</b> {{ $conference['content'] }}</p>

<p class="subtitle is-6"><b>Date:</b> {{ $conference['date'] }}</p>

<p class="subtitle is-6"><b>Address:</b> {{ $conference['address'] }}</p>

@auth
    <div class="buttons">
        <a href="{{ route('conference.edit', ['conference' => $conference['id']]) }}" class="button is-info is-light">Edit</a>
        <form action="{{ route('conference.destroy', ['conference' => $conference['id']]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="button is-danger is-light">Delete</button>
        </form>
    </div>
@endauth

<br>
