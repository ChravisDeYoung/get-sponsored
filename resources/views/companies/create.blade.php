<x-layout>
    <div class="pb-4 mb-8 flex items-center justify-between border-b border-gray-200 dark:border-gray-800">
        <h1 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white" id="content">
            Create Company
        </h1>
    </div>

    <form class="">
        <div class='max-w-sm pb-4'>
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Name
                </label>

                <input type="text" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Company" required />
            </div>

            <div>
                <label for="logo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Logo
                </label>

                <input type="file" id="logo"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
            </div>
        </div>

        <div class='mt-8 pt-4 border-t border-gray-200 dark:border-gray-800 flex justify-end'>
            <x-forms.button href="/companies" variant='alternative' class='mr-2'>Cancel</x-forms.button>
            <x-forms.button type='submit' variant='default'>Submit</x-forms.button>
        </div>
    </form>
</x-layout>
