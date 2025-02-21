<x-layout>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

            <caption class="p-5 text-lg font-semibold text-center rtl:text-right text-gray-900 bg-white dark:bg-gray-800">
                メンバー一覧
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400 mt-4">登録されているすべてのメンバーの一覧表示です。</p>
            </caption>

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        氏名
                    </th>
                    <th scope="col" class="px-6 py-3">
                        年齢
                    </th>
                    <th scope="col" class="px-6 py-3">
                        性別
                    </th>
                    <th scope="col" class="px-6 py-3">
                        詳細
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$member->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$member->age}}
                    </td>
                    <td class="px-6 py-4">
                        {{$member->gender}}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('members.show', $member->id) }}">詳細を見る</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
    
</x-layout>
