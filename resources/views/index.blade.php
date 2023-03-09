<x-app-layout>
    <x-slot name="header">
        {{ $header }}
    </x-slot>

    <x-table.table :data="$data" :columns="$columns" />
    <div class="mt-2">
        {{ $data->links() }}
    </div>

    <div class="flex justify-end mt-4">
        <x-secondary-button>Add New {{ $header }}</x-secondary-button>
    </div>
</x-app-layout>
