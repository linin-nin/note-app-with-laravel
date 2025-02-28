<x-app-layout>
    <div>
        <a class="text-red-500" href="{{ route('note.create')}}">
            New Note
        </a>
        <div>
            @foreach ($notes as $note)
            @endforeach
        </div>
        {{$notes->links()}}
    </div>
</x-app-layout>
