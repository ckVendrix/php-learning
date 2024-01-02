<x-layout>
        <h1>Quests</h1>
        @foreach($quests as $quest)
            <section>
                <a href='/quest/{{$quest->id}}'> {{$quest->title}} </a>
            </section>
        @endforeach
        <a href="/">home</a>
</x-layout>
