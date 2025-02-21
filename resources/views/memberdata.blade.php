<x-layout>

    <div>
        <table>
            <!-- Member の基本情報 -->
            <tr>
                <td>{{ $personalData->name }}</td>
                <td>{{ $personalData->age }}</td>
                <td>{{ $personalData->gender }}</td>
            </tr>
        </table>
        <!-- 関連する Eating のデータは $personalData->eat に格納されている -->
        <div class="inline-grid grid-cols-3 gap-4">
            @foreach ($personalData->eat as $key => $data)
            <a href="{{ route('members.update', ['id' => $personalData->id]) }}">
                <div class="max-w-sm p-6 bg-gray-400 border border-gray-200 rounded-lg">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">personal data
                        {{ $key }}
                    </h5>
                    <p class="mb-3 font-normal text-white">type:{{ $data->type }}</p>
                    <p class="mb-3 font-normal text-white">result:{{ $data->result }}</p>
                    <p class="mb-3 font-normal text-white">time:{{ $data->time }}</p>

                </div>
            </a>
            @endforeach
        </div>
    </div>

</x-layout>