<x-layout>
    <ul>
        @foreach ($members as $member)
            <li>{{$member}}</li>   
        @endforeach
    </ul>
</x-layout>