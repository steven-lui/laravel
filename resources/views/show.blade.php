<x-app-layout>
    <x-slot name="header">
        {{ $data->first_name . ' ' . $data->last_name }}
    </x-slot>

    <x-table.table>
        @foreach ($data->getAttributes() as $key => $value)
            <x-table.tr>
                <x-table.head>{{ ucwords(str_replace('_', ' ', $key)) }} </x-table.head>

                {{-- TODO: TYPE CHECKING --}}
                <x-table.cell>{{ $value }}</x-table.cell>
            </x-table.tr>
        @endforeach
    </x-table.table>

    <div class="mt-4 flex justify-end">
        <x-secondary-button class="px-6 mr-4">Back</x-secondary-button>
        <x-primary-button class="px-6 mr-4">Edit</x-primary-button>
        <x-primary-button class="px-6">Delete</x-primary-button>
    </div>
</x-app-layout>
