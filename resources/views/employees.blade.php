<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- TODO: ISOLATE BORDERS TO COMPONENT --}}
                    <table class="border-separate border-spacing-2 table-auto w-full text-center">
                        <tr>
                            <th class="border border-gray-400 dark:border-gray-700">
                                First Name
                            </th>
                            <th class="border border-gray-400 dark:border-gray-700">
                                Last Name
                            </th>
                            <th class="border border-gray-400 dark:border-gray-700">
                                Company
                            </th>
                            <th class="border border-gray-400 dark:border-gray-700">
                                Email
                            </th>
                            <th class="">
                            </th>
                            <th class="border border-none">
                            </th>
                        </tr>

                        @foreach ($employees as $employee)
                            <tr class="hover:bg-gray-200 dark:hover:bg-gray-600">
                                <td class="border border-gray-400 dark:border-gray-700">
                                    {{ $employee->first_name }}
                                </td>
                                <td class="border border-gray-400 dark:border-gray-700">
                                    {{ $employee->last_name }}
                                </td>
                                <td class="border border-gray-400 dark:border-gray-700">
                                    {{-- TODO: COMPANY NAME --}}
                                    {{-- TODO: FIX DB QUERY CALLS --}}
                                    {{ $employee->company->name }}
                                </td>
                                <td class="border border-gray-400 dark:border-gray-700">
                                    {{ $employee->email }}
                                </td>

                                <td
                                    class="border border-gray-400 dark:border-gray-700 text-green-400 dark:hover:bg-green-400 dark:hover:text-white">
                                    {{-- TODO --}}
                                    <a href="" class="flex justify-center">Edit</a>
                                </td>
                                <td
                                    class="border border-gray-400 dark:border-gray-700 text-red-400 dark:hover:bg-red-400 dark:hover:text-white">
                                    {{-- TODO --}}
                                    <a href="" class="flex justify-center">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
