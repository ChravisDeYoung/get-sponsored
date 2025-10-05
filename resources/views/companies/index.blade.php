<x-layout>
    <div class="pb-4 mb-8 flex items-center justify-between border-b border-gray-200 dark:border-gray-800">
        <h1 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white" id="content">
            Companies
        </h1>

        <a href='/companies/create'
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Add Company
        </a>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>

                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($companies as $company)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 flex items-center space-x-3">
                            <img class='rounded-full w-12 h-12' src="{{ $company->logo }}"></img>

                            <div>
                                <span class='font-medium text-gray-900 dark:text-white'>{{ $company->name }}</span>
                                <br />
                                Canada
                                <div>
                        </td>

                        <td class="px-6 py-4 text-right">
                            <a href="/companies/{{ $company->id }}" class='underline text-blue-700 dark:text-blue-600'>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
