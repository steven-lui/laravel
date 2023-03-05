<x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
    {{ __('Dashboard') }}
</x-responsive-nav-link>
<x-responsive-nav-link :href="route('companies')" :active="request()->routeIs('companies')">
    {{ __('Companies') }}
</x-responsive-nav-link>
<x-responsive-nav-link :href="route('employees')" :active="request()->routeIs('employees')">
    {{ __('Employees') }}
</x-responsive-nav-link>
