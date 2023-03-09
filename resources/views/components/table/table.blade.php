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

            <x-table.clickable url="/view" color="gray" text="View" />
            <x-table.clickable url="/edit" color="green" text="Edit" />
            <x-table.clickable url="/delete" color="red" text="Delete" />
        </tr>
    @endforeach
</table>
