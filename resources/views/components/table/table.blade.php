<table class="border-separate border-spacing-2 table-auto w-full text-center">
    <tr>
        @foreach ($columns as $column)
            <x-table.head>{{ __($column) }}</x-table.head>
        @endforeach
    </tr>

    @foreach ($data as $entry)
        <tr class="hover:bg-gray-200 dark:hover:bg-gray-600">
            @foreach ($entry->getAttributes() as $key => $value)
                <x-table.cell>{{ $value }}</x-table.cell>
            @endforeach

            {{-- EDIT/DELETE --}}
            <x-table.edit url="/edit" />
            <x-table.delete url="/delete" />
        </tr>
    @endforeach
</table>
