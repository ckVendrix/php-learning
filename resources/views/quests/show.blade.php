<x-layout>
    <p>{{$quest->id}}</p>
    <p><a href='/quests?category={{$quest->category->id}}'>{{ $quest->category->name }}</a></p>
    <h1>{{$quest->title}}</h1>
    <p>{{$quest->description}}</p>
    <a href="/quests">Quests</a>
</x-layout>
