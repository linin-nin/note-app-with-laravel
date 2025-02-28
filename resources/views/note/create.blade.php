<x-app-layout>
    <div>
        <h1>Create New Note</h1>
        <form action="{{route('note.store')}}" method="POST">
            @csrf
            <textarea name="note" id="note" cols="30" rows="10" placeholder="Enter notes here!"></textarea>
            <div>
                <a href="{{route('note.index')}}">Cancel</a>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
