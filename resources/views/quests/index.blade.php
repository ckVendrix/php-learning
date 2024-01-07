<x-layout>
        <h1>Quests</h1>

        <x-category-selector />

        @foreach($quests as $quest)
            <section style="margin-bottom: 48px;">
                <a href='/category/{{$quest->category->id}}'>{{ $quest->category->name }}</a>
                <br>
                <h2><a href='/quests/{{ $quest->id }}'> {{ $quest->title }} </a></h2>
            </section>
        @endforeach
        {{ $quests->links() }}
</x-layout>
