<x-layout>
    <style>
        input {
            padding: 4px;
        }
    </style>

    @foreach($personalData->eat as $data)
        <form action="{{ route('eatings.update', $data->id) }}" method="POST" class="max-w-sm mx-auto mb-4 bg-gray-400 p-3 ">
            @csrf
            @method('PUT')

            <div class="mb-2">
                <label for="type_{{ $data->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">type</label>
                <select name="type" id="type_{{ $data->id }}">
                    @foreach($selectTypes as $type)
                        <option value="{{ $type }}" {{ $data->type === $type ? 'selected' : '' }}>
                            {{ $type }}
                        </option>
                    @endforeach
                </select>
                
            </div>
            <div class="mb-2">
                <label for="result_{{ $data->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">result</label>
                <select name="result" id="result{{ $data->id }}">
                    @foreach($selectResults as $result)
                        <option value="{{ $result }}" {{ $data->result === $result ? 'selected' : '' }}>
                            {{ $type }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label for="time_{{ $data->id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">time</label>
                <input type="text" id="time_{{ $data->id }}" class="block w-full p-4 border rounded-lg" value="{{ $data->time }}" name="time">
            </div>

            <input type="submit" value="更新する" class="text-white bg-blue-700 hover:bg-blue-800 rounded-full text-sm px-5 py-2.5">
        </form>
    @endforeach
</x-layout>
