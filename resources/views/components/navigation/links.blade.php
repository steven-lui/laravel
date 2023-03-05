<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
    {{ __('Dashboard') }}
</x-nav-link>
<x-nav-link :href="route('companies')" :active="request()->routeIs('companies')">
    {{ __('Companies') }}
</x-nav-link>
<x-nav-link :href="route('employees')" :active="request()->routeIs('employees')">
    {{ __('Employees') }}
</x-nav-link>
