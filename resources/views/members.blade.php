<x-layout>
    <h1 class="text-5xl font-bold underline">テストタイトル</h1>
    <table class="table-auto">
        <thead>
            <tr>
                <td>氏名</td>
                <td>年齢</td>
                <td>性別</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->age }}</td>
                <td>{{ $member->gender }}</td>
            </tr>
            <tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
