<x-app-layout>
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <x-table.table :data="$data" :columns="$columns" />
        <div class="mt-4">
            {{ $data->links() }}
        </div>
    </div>
</x-app-layout>
