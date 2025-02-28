<x-app-layout>
    <div>
        <h1>Edit New Note</h1>
        <form action="{{route('note.update', $note)}}" method="POST">
            @csrf
            @method('PUT')
            <textarea name="note" id="note" cols="30" rows="10" placeholder="Enter notes here!">{{$note->note}}</textarea>
            <div>
                <a href="{{route('note.index')}}">Cancel</a>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
