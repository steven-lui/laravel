<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{ __("You're logged in!") }}

    {{-- TODO: LIST No OF EMPLOYEES AND COMPANIES --}}
    <p>Your project should include, but is not limited to:</p>
    <ul class="list-disc ml-4">
        <li class="text-green-400">
            Basic Laravel Auth: ability to log in as administrator
        </li>
        <li class="text-green-400">
            A seeder to create the first user with email admin@admin.com and password "password"
        </li>
        <li class="text-red-400">
            CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and
            Employees.
        </li>
        <li class="text-green-400">
            Companies Database table consists of these fields: Name (required), email, logo (minimum
            100?100), website
        </li>
        <li class="text-green-400">
            Employees Database table consists of these fields: First name (required), last name
            (required), Company, email, phone number
        </li>
        <li class="text-green-400">
            Use database migrations to create those schemas above
        </li>
        <li class="text-red-400">
            Store companies logos in storage/app/public folder and make them accessible from public
        </li>
        <li class="text-red-400">
            Use basic Laravel resource controllers with default methods ? index, create, store etc.
        </li>
        <li class="text-red-400">
            Use Laravel?s validation function, using Request classes
        </li>
        <li class="text-green-400">
            Use Laravel?s pagination for showing Companies/Employees list, 10 entries per page
        </li>
        <li class="text-green-400">
            Use <span class="line-through">https://github.com/laravel/ui</span> <span
                class="bold">https://github.com/laravel/breeze</span> as default Bootstrap-based design theme, but
            remove
            ability to register
        </li>
    </ul>
</x-app-layout>
