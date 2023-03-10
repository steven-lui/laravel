<x-app-layout>
    <x-slot name="header">
        {{ __(ucwords($page)) }}
    </x-slot>

    <x-table.table>
        <x-table.tr>
            @foreach ($data[0]->getAttributes() as $key => $value)
                {{-- skip id --}}
                @if ($loop->first)
                    @continue
                @endif

                <x-table.head>{{ ucwords(str_replace('_', ' ', $key)) }} </x-table.head>
            @endforeach
        </x-table.tr>

        @foreach ($data as $entry)
            <x-table.tr>
                @foreach ($entry->getAttributes() as $key => $value)
                    {{-- skip id --}}
                    @if ($loop->first)
                        @continue
                    @endif

                    <x-table.cell>{{ $value }}</x-table.cell>
                @endforeach

                <x-table.clickable url="{{ $page }}/{{ $entry->id }}/view" color="gray" text="View" />
                <x-table.clickable url="{{ $page }}/{{ $entry->id }}/edit" color="green" text="Edit" />
                <x-table.clickable url="{{ $page }}/{{ $entry->id }}/delete" color="red" text="Delete" />
            </x-table.tr>
        @endforeach
    </x-table.table>

    <div class="mt-2">
        {{ $data->links() }}
    </div>

    <div class="flex justify-end mt-4">
        <x-secondary-button>Add New {{ ucwords($page) }}</x-secondary-button>
    </div>
</x-app-layout>
